@extends('layouts.master')

@section('title', 'Fasilitas')
@vite('resources/css/app.css')


@section('content')
<section class="mt-20 flex flex-col ml-16">
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
    <div class="flex mt-20">
        <div class="flex  capitalize">
            <img src="/patung.jpg" alt="" class="rounded-lg w-1/3 h-60">
            <div class="flex flex-col ml-10 mt-14 w-7/12">
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
            <img src="/patung2.jpg" alt="" class="rounded-lg w-1/3 h-60">
            <div class="flex flex-col ml-10 mt-14 w-7/12">
                <h1 class="text-neutral-700 text-[30px] font-semibold text-left ">Patung-patung Unik</h1>
                <p class="mt-3 text-gray-500 text-[15px]">
                    Pada saat musim liburan Jembar Waterpark selalu di padati pengunjung dari berbagai daerah di Indonesia.
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
            <img src="/saung.jpg" alt="" class="rounded-lg w-1/3 h-60">
            <div class="flex flex-col ml-10 mt-14 w-7/12">
                <h1 class="text-neutral-700 text-[30px] font-semibold text-left ">Fasilitas Non-air</h1>
                <p class="mt-3 text-gray-500 text-[15px]">
                Nikmati sensasinya di kolam arus Jembar Waterpark. Anda akan bergerak di atas pelampung sepanjang kolam arus, sambil memandangi keindahan alam di sekitarnya.
                </p>
                <a href="#" class="mt-4 text-gray-700 text-[15px] font-semibold">
                    Baca Selengkapnya
                </a>
            </div>
        </div>
    </div>

    <div class="kosong">
        <p class="h-32">
    </div>

</section>
@endsection