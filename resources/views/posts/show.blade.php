@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10 px-64">
        <div class="flex flex-wrap grid grid-cols-3">
            <div class="col-span-2 p-1">
                <img src="/storage/{{ $post->image }}" >
            </div>
            <div class="col-span-1 p-1 pl-4">
                <div class="flex flex-wrap">
                    <img src="{{ $post->user->profile->profileImage() }}"
                         class="rounded-full h-8">
                    <p class="text-3xl p-1">{{ $post->user->username }}</p>
                    <a href="#" class="text-blue-500 pl-2 pt-3"> Follow</a>
                </div>
                <hr>
                <div>
                    <div class="flex flex-wrap pt-2">
                        <img src="{{ $post->user->profile->profileImage() }}"
                             class="rounded-full h-6">
                        <p class="text-1xl pl-1">{{ $post->user->username }}</p>
                        <p class="font-extralight pl-2">{{ $post->caption }}</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
