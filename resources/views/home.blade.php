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
            <div><h1 class="text-2xl"><strong>freeCodeCamp</strong></h1></div>
            <div class="flex flex-wrap pt-1">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4"><b>freeCodeCamp.org</b></div>
            <div class="pt-2">We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
            <div class=" pt-2"><a class="text-blue-500" href="#">www.freecodecamp.org</a></div>
        </div>
    </div>

    <div class="pt-10">
        <hr>
    </div>

{{--    post div--}}
    <div class="grid grid-cols-3 pt-8">
        <div class="p-2">
            <img src="https://www.alishaaneja.com/assets/codecamp/1.jpg" class="w-100">
        </div>
        <div class="p-2">
            <img src="https://www.weekendnotes.com/im/003/06/380262538590308943030512925739891062996992o1.jpg" class="w-100">
        </div>
        <div class="p-2">
            <img src="https://muellerconnect.com/wp-content/uploads/2018/08/MCONN_1200x800_CodeCamp2018_thumbnail.jpg" class="w-100">
        </div>
    </div>
</main>
@endsection
