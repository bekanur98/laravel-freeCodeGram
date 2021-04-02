@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10 px-64">
        <form action="/p" enctype="multipart/form-data" method="post">
            @csrf

            <div class="text-3xl pb-4">
                Add New Post
            </div>

            <div class="flex flex-wrap">
                <label for="caption" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                    Post Caption
                </label>

                <input id="caption" type="text" class="form-input w-full h-full @error('caption')  border-red-500 @enderror"
                       name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                @error('caption')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="flex flex-wrap">

                <label for="image" class="block text-gray-700 text-sm font-bold sm:mb-4">
                    Post Image
                </label>
                <input id="image" type="file" class="form-input w-full h-full @error('image')  border-red-500 @enderror"
                       name="image" value="{{ old('caption') }}" required autocomplete="image" autofocus>

                @error('image')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="flex flex-wrap pt-4">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                    Add New Post
                </button>
            </div>
        </form>
    </main>
@endsection
