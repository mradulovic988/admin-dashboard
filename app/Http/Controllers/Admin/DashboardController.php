<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }

    public function index() {
        return view('admin.pages.dashboard');
    }

    public function settings() {
        $user_id = Auth::user()->id;
//        $settings = Setting::where('user_id',$user_id)->get();

        $settings = Setting::where('user_id',$user_id)->latest()->first();
        return view('admin.pages.settings', [
            'settings' => $settings
        ]);
    }

    public function settings_store(Request $request) {
        $this->validate($request, [
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'postal_code' => 'required',
            'about_me' => 'required',
        ]);

        $request->user()->settings()->create([
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'postal_code' => $request->postal_code,
            'about_me' => $request->about_me,
        ]);

        return back();
    }
}
