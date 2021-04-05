@extends('layouts.app')

@section('content')
    <main style="align-items: center" class="sm:container sm:mx-auto sm:mt-10 px-64">
        @foreach($posts as $post)
            <div class="flex flex-wrap grid grid-cols-6 object-center pt-2">
                <div class="col-start-2 col-span-4 p-1">
                    <a href="/profile/{{ $post->user->id }}">
                        <img src="/storage/{{ $post->image }}" >
                    </a>
                </div>
            </div>
            <div class="flew flex-wrap grid grid-cols-3  pb-4">
                <div class="col-start-2 col-span-1 p-1 pl-4">
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
        @endforeach
    </main>
@endsection
