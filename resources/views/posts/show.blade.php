@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10 px-64">
        <div class="flex flex-wrap grid grid-cols-3">
            <div class="col-span-2 p-1">
                <img src="/storage/{{ $post->image }}" >
            </div>
            <div class="col-span-1 p-1 pl-4">
                <p class="text-3xl">{{ $post->user->username }}</p>

                <p>{{ $post->caption }}</p>
            </div>
        </div>
    </main>
@endsection
