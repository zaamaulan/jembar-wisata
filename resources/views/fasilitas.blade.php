@extends('layouts.master')

@section('title', 'Fasilitas')
@vite('resources/css/app.css')


@section('content')
<section class="mt-20 flex flex-col ml-10">
    <div class="flex flex-col gap-y-3">
        <h1 class="text-neutral-700 text-[40px] font-semibold text-left">Fasilitas 
            <span class="text-sky-400 text-[40px] font-semibold text-left">Jembar raya Waterpark</span>
        </h1>
        <p class="text-gray-500 text-lg font-medium text-left">
        Jembar Raya Waterpark juga memiliki berbagai macam fasilitas dari fasilitas
        <br>
        air hingga non-air. Berikut beberapa fasilitas yang ada di Jembar Raya
        <br>
        Waterparkp
        </p>
    </div>

    <!-- 1 -->
    <div class="flex mt-14">
        <div class="flex  capitalize">
            <img src="/patung.jpg" alt="" class="rounded-lg">
            <div class="flex flex-col ml-10 mt-14">
                <h1 class="text-neutral-700 text-[30px] font-semibold text-left ">Kolam Renang Anak</h1>
                <p class="mt-3 text-gray-500 text-[15px]">
                    Sebagaimana namanya, tentu Jember Waterpark menawarkan aneka wahana air yang mengasyikkan. Waterboom, misalnya.
                </p>
                <a href="#" class="mt-4 text-gray-700 text-[15px] font-semibold">
                    Baca Selengkapnya
                </a>
            </div>
        </div>
    </div>

    <!-- 2 -->
    <div class="flex mt-14">
        <div class="flex  capitalize">
            <img src="/patung.jpg" alt="" class="rounded-lg">
            <div class="flex flex-col ml-10 mt-14">
                <h1 class="text-neutral-700 text-[30px] font-semibold text-left ">Kolam Renang Anak</h1>
                <p class="mt-3 text-gray-500 text-[15px]">
                    Sebagaimana namanya, tentu Jember Waterpark menawarkan aneka wahana air yang mengasyikkan. Waterboom, misalnya.
                </p>
                <a href="#" class="mt-4 text-gray-700 text-[15px] font-semibold">
                    Baca Selengkapnya
                </a>
            </div>
        </div>
    </div>

    <!-- 3 -->
    <div class="flex mt-14">
        <div class="flex  capitalize">
            <img src="/patung.jpg" alt="" class="rounded-lg">
            <div class="flex flex-col ml-10 mt-14">
                <h1 class="text-neutral-700 text-[30px] font-semibold text-left ">Kolam Renang Anak</h1>
                <p class="mt-3 text-gray-500 text-[15px]">
                    Sebagaimana namanya, tentu Jember Waterpark menawarkan aneka wahana air yang mengasyikkan. Waterboom, misalnya.
                </p>
                <a href="#" class="mt-4 text-gray-700 text-[15px] font-semibold">
                    Baca Selengkapnya
                </a>
            </div>
        </div>
    </div>

</section>
@endsection