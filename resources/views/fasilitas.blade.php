@extends('layouts.master')

@section('title', 'Fasilitas')
@vite('resources/css/app.css')


@section('content')
    <section class="mt-20 flex flex-col container mx-auto my-28">
        <div class="flex flex-col gap-y-3">
            <h1 class="text-neutral-700 text-[40px] font-semibold text-left">Fasilitas
                <span class="text-sky-400 text-[40px] font-semibold text-left">Jembar raya Waterpark</span>
            </h1>
            <p class="text-gray-500 text-lg font-medium text-left">
                Jembar Raya Waterpark juga memiliki berbagai macam fasilitas dari fasilitas
                <br>
                air hingga non-air. Berikut beberapa fasilitas yang ada di Jembar Raya
                <br>
                Waterpark
            </p>
        </div>

        <!-- 1 -->
        <div class="flex mt-20">
            <div class="flex  capitalize gap-x-14">
                <img src="/patung.jpg" alt="" class="rounded-lg w-[34rem] h-72 object-cover">
                <div class="flex flex-col justify-center w-7/12">
                    <h1 class="text-neutral-700 text-[30px] font-semibold text-left ">Kolam Renang Anak</h1>
                    <p class="mt-3 text-gray-500 text-[15px]">
                        Sebagaimana namanya, tentu Jember Waterpark menawarkan aneka wahana air yang mengasyikkan. Waterboom, misalnya.
                    </p>
                    <a href="fasilitas/KolamRenangAnak"
                        class="mt-4 text-gray-700 text-[15px] font-semibold hover:text-sky-500 transition-all ease-in-out">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>

        <!-- 2 -->
        <div class="flex mt-14">
            <div class="flex  capitalize gap-x-14">
                <img src="/patung2.png" alt="" class="rounded-lg w-[34rem] h-72 object-cover">
                <div class="flex flex-col justify-center w-7/12">
                    <h1 class="text-neutral-700 text-[30px] font-semibold text-left ">Patung-patung Unik</h1>
                    <p class="mt-3 text-gray-500 text-[15px]">
                        Pada saat musim liburan Jembar Waterpark selalu di padati pengunjung dari berbagai daerah di Indonesia.
                    </p>
                    <a href="fasilitas/PatungPatungUnik"
                        class="mt-4 text-gray-700 text-[15px] font-semibold hover:text-sky-500 transition-all ease-in-out">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>

        <!-- 3 -->
        <div class="flex mt-14">
            <div class="flex  capitalize gap-x-14">
                <img src="/saung.jpg" alt="" class="rounded-lg w-[34rem] h-72 object-cover">
                <div class="flex flex-col justify-center w-7/12">
                    <h1 class="text-neutral-700 text-[30px] font-semibold text-left ">Fasilitas Non-air</h1>
                    <p class="mt-3 text-gray-500 text-[15px]">
                        Nikmati sensasinya di kolam arus Jembar Waterpark. Anda akan bergerak di atas pelampung sepanjang kolam arus, sambil memandangi
                        keindahan alam di sekitarnya.
                    </p>
                    <a href="fasilitas/FasilitasNonAir"
                        class="mt-4 text-gray-700 text-[15px] font-semibold hover:text-sky-500 transition-all ease-in-out">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>

    </section>
@endsection
