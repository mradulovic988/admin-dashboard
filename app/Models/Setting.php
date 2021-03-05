<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'city',
        'country',
        'postal_code',
        'about_me',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
