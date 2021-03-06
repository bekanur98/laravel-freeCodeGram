@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10 px-64">
        <div class="grid grid-cols-3">
            <div class="col-span-1 p-5">
                <div class="">
                    <img src="{{ $user->profile->profileImage() }}"
                         alt="" class="rounded-full h-28"
                    >
                </div>
            </div>
            <div class="col-span-2 pt-5">
                <div class="flex flex-wrap justify-between items-baseline">
                    <div class="flex flex-wrap items-center pb-3">
                        <h1 class="text-2xl">
                            <strong>
                                {{ $user->username }}
                            </strong>
                        </h1>
                        <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                    </div>

                    @can('update', $user->profile)
                        <a class="text-blue-500" href="/p/create">Add new post</a>
                    @endcan
                    @can('update', $user->profile)
                        <a class="text-blue-500" href="/profile/{{ $user->id }}/edit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                        </a>
                    @endcan
                </div>

                <div class="flex flex-wrap pt-1">
                    <div class="pr-5"><strong>{{ $postCount }}</strong> posts</div>
                    <div class="pr-5"><strong>{{ $followersCount }}</strong> followers</div>
                    <div class="pr-5"><strong>{{ $followingCount }}</strong> following</div>
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
                    <a href="/p/{{ $post->id }}">
                        <img src="/storage/{{$post->image}}" class="w-64 h-64">
                    </a>
                </div>
            @endforeach
        </div>
    </main>
@endsection
