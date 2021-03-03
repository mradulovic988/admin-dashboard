@extends('header.header')
@section('content')
    <div id="root">
        @extends('admin.sidebar.sidebar')
        <div class="relative md:ml-64 bg-gray-100">
            <!-- Header -->
            <div class="relative bg-gray-800 pb-32 pt-12">
                <div class="px-4 md:px-10 mx-auto w-full">
                    <div>
                        <!-- Card stats -->
                        <div class="flex flex-wrap">
                            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                <form action="{{ route('posts') }}" method="post">
                                    @csrf
                                    <h6
                                        class="text-gray-500 text-sm mt-3 mb-6 font-bold uppercase"
                                    >
                                        Add New Post
                                    </h6>
                                    <div class="flex flex-wrap">
                                        <div class="w-full lg:w-12/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label
                                                    class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                    htmlFor="grid-password"
                                                >
                                                    Title
                                                </label>
                                                <input
                                                    type="text"
                                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                                                    value=""
                                                    placeholder="Lorem Ipsum"
                                                    name="title"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap">
                                        <div class="w-full lg:w-12/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label
                                                    class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                    htmlFor="grid-password"
                                                >
                                                    Content
                                                </label>
                                                <textarea
                                                    type="text"
                                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                                                    rows="4"
                                                    placeholder="Lorem ipsum data dolores"
                                                    name="body"
                                                ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap">
                                        <div class="w-full lg:w-12/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <button type="submit" class="bg-gray-600 text-white font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                                                    Submit Post
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="px-4 md:px-10 mx-auto w-full">
                    <div>
                        <!-- Card stats -->
                        <div class="flex flex-wrap">
                            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                @if($posts->count())
                                    @foreach($posts as $post)
                                        <div class="pt-1 pr-2 pl-2 pb-1 mb-4 bg-white">
                                            <p class="font-bold text-xl">{{ $post->title }}</p>
                                            <a href="" class="font-bold text-sm pb-3">{{ $post->user->full_name }}</a> <span class="text-gray-600 text-sm">{{ $post->updated_at->diffForHumans() }}</span>
                                            <p class="mb-2 pt-3">{{ $post->body }}</p>
                                        </div>
                                    @endforeach
                                @else
                                    <p>There is no posts.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
    @extends('admin.footer.footer')
@endsection
