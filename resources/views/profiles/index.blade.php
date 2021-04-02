@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10 px-64">
        <div class="grid grid-cols-3">
            <div class="col-span-1 p-5">
                <div class="">
                    <img src="https://pbs.twimg.com/profile_images/1276770212927410176/qTgTIejk_400x400.jpg"
                         alt="" class="rounded-full" style="width: 120px; height: 120px"
                    >
                </div>
            </div>
            <div class="col-span-2 pt-5">
                <div class="flex flex-wrap justify-between items-baseline">
                    <h1 class="text-2xl">
                        <strong>
                            {{ $user->username }}
                        </strong>
                    </h1>
                    <a class="text-blue-500" href="/p/create">Add new post</a>
                </div>
                <div class="flex flex-wrap pt-1">
                    <div class="pr-5"><strong>153</strong> posts</div>
                    <div class="pr-5"><strong>23k</strong> followers</div>
                    <div class="pr-5"><strong>212</strong> following</div>
                </div>
                <div class="pt-4"><b>{{ $user->profile->title }}</b></div>
                <div class="pt-2">{{ $user->profile->description }}</div>
                <div class=" pt-2"><a class="text-blue-500" href="#">{{ $user->profile->url}}</a></div>
            </div>
        </div>

        <div class="pt-10">
            <hr>
        </div>

        {{--    post div--}}
        <div class="grid grid-cols-3 pt-8">
            @foreach($user->posts as $post)
                <div class="p-2">
                    <img src="/storage/{{$post->image}}" class="w-100">
                </div>
            @endforeach
        </div>
    </main>
@endsection
