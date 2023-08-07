@extends('layouts.master')

@section('title', 'Home')
@vite(['resources/css/app.css', 'resources/css/style.css'])




@section('content')
    <section class="grid grid-cols-1 content-center mt-16">
        <div class="flex flex-col">
            <div class="container mx-auto">
                <div class="flex flex-col gap-y-3">
                    <h1 class="text-sky-400 text-[40px] font-semibold text-center">Jembar Raya Waterpark</h1>
                    <p class="text-gray-500 text-base font-normal text-center">Jembar Raya Waterpark, Enjoy the Excitement of Swimming and Playing <br>
                        Water
                        in Majalengka's Largest Water Park</p>
                </div>
                <div class="flex justify-center my-11">
                    <x-button style="hover:px-9 transition-all ease-in-out bg-sky-400 text-white" buttonTitle="pesan tiket" href="/pesan-tiket" />
                </div>
                <div class="flex justify-center w-full "><img src="/cover.png" alt=""></div>
            </div>
            <div class="bg-zinc-100 h-[30rem] flex w-[99.2vw] my-28">
                <div class="container mx-auto flex justify-between items-center">
                    <div class="grid grid-rows-3 w-96">
                        <div class="flex justify-center">@include('components.svg.clock')</div>
                        <h1 class="text-center text-xl font-semibold leading-[30px] text-neutral-700 my-6 capitalize">jam buka</h1>
                        <p class="text-center text-gray-500 text-base font-normal leading-normal">Jembar Waterpark Majalengka buka setiap hari, dimulai
                            dari
                            jam 08.00 hingga 16.00 WIB.
                        </p>
                    </div>
                    <div class="grid grid-rows-3 w-96">
                        <div class="flex justify-center">@include('components.svg.point-map')</div>
                        <h1 class="text-center text-xl font-semibold leading-[30px] text-neutral-700 my-6 capitalize">tempat lokasi</h1>
                        <p class="text-center text-gray-500 text-base font-normal leading-normal">Terletak di Blok Kamis, Ranji
                            Wetan, Kec. Kasokandel, Kabupaten Majalengka, Jawa Barat 45453</p>

                    </div>
                    <div class="grid grid-rows-3 w-96">
                        <div class="flex justify-center">@include('components.svg.mark')</div>
                        <h1 class="text-center text-xl font-semibold leading-[30px] text-neutral-700 my-6 capitalize">tiket masuk</h1>
                        <p class="text-center text-gray-500 text-base font-normal leading-normal">Harga tiket masuk dari Jembar Waterpark yaitu
                            Rp.25.000
                            ketika weekday dan Rp.30.000 ketika weekend</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center flex-col my-28">
                <div class="text-center flex flex-col gap-y-3">
                    <div>
                        <span class="text-neutral-700 text-[40px] font-semibold">Fasilitas </span>
                        <span class="text-sky-400 text-[40px] font-semibold">Jembar Raya Waterpark</span>
                    </div>
                    <p class="text-gray-500 text-base font-normal text-center">Jembar Raya Waterpark juga memiliki berbagai macam water slide yang dapat
                        <br>
                        dinikmati oleh pengunjung, seperti water slide spiral, water slide straight, dan <br> water slide untuk anak-anak
                    </p>
                </div>
        
                <!-- start slider -->
                <section >
                <div class="container__slider">

<div class="container-a">
    <input type="radio" name="slider" id="item-1" checked>
    <input type="radio" name="slider" id="item-2">
    <input type="radio" name="slider" id="item-3">

    <div class="cards">
        <label class="card" for="item-1" id="selector-1">
            <img src="{{ URL::to('/fasilitas1.png') }}" class="slide-img">
        </label>
        <label class="card" for="item-2" id="selector-2">
            <img src="{{ URL::to('/fasilitas2.png') }}" class="slide-img">
        </label>
        <label class="card" for="item-3" id="selector-3">
        <img src="{{ URL::to('/fasilitas3.png') }}" class="slide-img">
        </label>
    </div>
</div>

</div>
                </section>
           
                <!-- end slider -->

                <div class="flex justify-center mt-5">
                    <x-button style=" bg-transparant text-neutral-700" buttonTitle="fasilitas lainnya" href="/fasilitas" />
                </div>
            </div>
            <div class="my-28">
                <div class="text-center flex flex-col gap-y-3">
                    <div class="mb-11">
                        <div>
                            <span class="text-neutral-700 text-[40px] font-semibold">Galeri </span>
                            <span class="text-sky-400 text-[40px] font-semibold">Jembar Raya Waterpark</span>
                        </div>
                        <p class="text-gray-500 text-base font-normal text-center">Foto-foto di bawah ini menunjukkan pengunjung Jembar Raya Waterpark
                            Majalengka yang <br> sedang menikmati berbagai wahana dan fasilitas yang tersedia di taman air tersebut. <br> Jangan lupa
                            follow
                            Instagram
                            kami.</p>
                    </div>
                    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer class></script>
                    <div class="elfsight-app-c0c86c49-430b-4f94-b2b6-81431314e99d"></div>
                </div>
            </div>
            <div class="flex flex-col bg-zinc-100 pb-20">
                <div class="text-center flex flex-col gap-y-3 my-11">
                    <h1 class="text-neutral-700 text-[40px] font-semibold">Blog</h1>
                </div>
                <div class="w-[99.2vw]">
                    <div class="container mx-auto grid grid-cols-3 capitalize items-center gap-y-14">
                        @for ($i = 0; $i < 3; $i++)
                            <x-card style="" thumbnail="" title="" caption="" href="" />
                        @endfor
                    </div>
                    <div class="flex justify-end pr-[11.5rem] mt-16">
                        <x-button style="bg-sky-400 text-white flex justify-end w-fit h-fit" buttonTitle="blog lainnya" href="/blog" />
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    

