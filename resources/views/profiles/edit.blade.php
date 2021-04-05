@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10 px-64">
        <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')

            <div class="text-3xl pb-4">
                Edit profile
            </div>

            <div class="flex flex-wrap">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                    Title
                </label>

                <input id="title" type="text" class="form-input w-full h-full @error('title')  border-red-500 @enderror"
                       name="title" value="{{ old('title') ?? $user->profile->title }}" required autocomplete="title" autofocus>

                @error('title')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="flex flex-wrap">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                    Description
                </label>

                <input id="description" type="text" class="form-input w-full h-full @error('description')  border-red-500 @enderror"
                       name="description" value="{{ old('description') ?? $user->profile->description }}" required autocomplete="description" autofocus>

                @error('description')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="flex flex-wrap">
                <label for="url" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                    Url
                </label>

                <input id="url" type="text" class="form-input w-full h-full @error('url')  border-red-500 @enderror"
                       name="url" value="{{ old('url') ?? $user->profile->url }}" autocomplete="url" autofocus>

                @error('url')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="flex flex-wrap">

                <label for="image" class="block text-gray-700 text-sm font-bold sm:mb-4">
                    Profile Image
                </label>
                <input id="image" type="file" class="form-input w-full h-full @error('image')  border-red-500 @enderror"
                       name="image" value="{{ old('caption') }}" autocomplete="image" autofocus>

                @error('image')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="flex flex-wrap pt-4">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                    Save Profile
                </button>
            </div>
        </form>
    </main>
@endsection
