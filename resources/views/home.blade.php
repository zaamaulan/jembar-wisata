@extends('layouts.master')

@section('title', 'Home')
@vite('resources/css/app.css')


@section('content')
    <section class="flex justify-center mt-16">
        <div class="flex flex-col">
            <div class="container mx-auto">
                <div class="flex flex-col gap-y-3">
                    <h1 class="text-sky-400 text-[40px] font-semibold text-center">Jembar Raya Waterpark</h1>
                    <p class="text-gray-500 text-lg font-medium text-center">Jembar Raya Waterpark, Enjoy the Excitement of Swimming and Playing <br>
                        Water
                        in Majalengka's Largest Water Park</p>
                </div>
                <div class="flex justify-center my-11">
                    <x-buttonPesanTiket style="hover:px-9 transition-all ease-in-out" />
                </div>
                <div class="flex justify-center w-full "><img src="/cover.png" alt=""></div>
            </div>
            <div class="bg-zinc-100 h-96 flex w-[99.2vw] my-28">
                <div class="container mx-auto flex justify-between capitalize items-center">
                    <div class="flex flex-col items-center w-96">
                        <div class="flex justify-center">@include('components.svg.clock')</div>
                        <h1 class="text-center text-xl font-semibold leading-[30px] text-neutral-700 my-6">jam buka</h1>
                        <p class="text-center text-gray-500 text-base font-normal leading-normal">Kami buka setiap hari pada <br> pukul 09.00 - 17.00 WIB
                        </p>
                    </div>
                    <div class="flex flex-col items-center w-96">
                        <div class="flex justify-center">@include('components.svg.point-map')</div>
                        <h1 class="text-center text-xl font-semibold leading-[30px] text-neutral-700 my-6">tempat lokasi</h1>
                        <p class="text-center text-gray-500 text-base font-normal leading-normal">Jembar Raya Waterpark terletak di Blok Kamis, <br> Ranji
                            Wetan, Kec. Kasokandel, Kabupaten <br> Majalengka, Jawa Barat 45453</p>
                    </div>
                    <div class="flex flex-col items-center w-96">
                        <div class="flex justify-center">@include('components.svg.mark')</div>
                        <h1 class="text-center text-xl font-semibold leading-[30px] text-neutral-700 my-6">tiket masuk</h1>
                        <p class="text-center text-gray-500 text-base font-normal leading-normal">Harga tiket masuk dari Jembar Waterpark <br> yaitu
                            Rp.25.000
                            ketika weekday dan Rp.30.000 <br> ketika weekend</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="text-center flex-col gap-y-3">
                    <div>
                        <span class="text-neutral-700 text-[40px] font-semibold">Fasilitas </span>
                        <span class="text-sky-400 text-[40px] font-semibold">Jembar Raya Waterpark</span>
                    </div>
                    <p class="text-gray-500 text-lg font-medium text-center">Jembar Raya Waterpark juga memiliki berbagai macam water slide yang dapat <br>
                        dinikmati oleh pengunjung, seperti water slide spiral, water slide straight, dan <br> water slide untuk anak-anak</p>
                </div>
                <div class="h-[100vh]"></div>
                
            </div>
        </div>
    </section>
@endsection
