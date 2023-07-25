@extends('layouts.master')

@section('title', 'Promo')
@vite('resources/css/app.css')


@section('content')
<section class="mt-12 flex flex-col">
    <h1 class="text-neutral-800 text-[40px] font-semibold text-center mb-10">PROMO</h1>
    <div class="container mx-auto flex justify-between capitalize items-center w-10/12">
        <a href="#" class="shadow-xl hover:shadow-2xl rounded-lg h-96 border-solid border-2 border-neutral-100 w-60">
            <img src="promo1.png" alt="">
            <div class="flex justify-center flex-col text-left mt-2 ms-5 w-48">
                <h1 class="text-neutral-700 text-[14px] font-bold text-left mt-5 mb-1">Hari Senin-Jumat</h1>
                <p class="text-neutral-700 font-medium text-left text-[11px]">biaya tiket masuk Rp25.000</p>
            </div>
        </a>
        <a href="#" class="shadow-xl hover:shadow-2xl rounded-lg h-96 border-solid border-2 border-neutral-100 w-60">
            <img src="promo2.png" alt="">
            <div class="flex justify-center flex-col text-left mt-2 ms-5 w-48">
                <h1 class="text-neutral-700 text-[14px] font-bold text-left mt-5 mb-1">Hari Sabtu dan Minggu</h1>
                <p class="text-neutral-700 font-medium text-left text-[11px]">biaya tiket masuk Rp30.000</p>
            </div>
        </a>
        <a href="#" class="shadow-xl hover:shadow-2xl rounded-lg h-96 border-solid border-2 border-neutral-100 w-60">
            <img src="promo3.png" alt="">
            <div class="flex justify-center flex-col text-left mt-2 ms-5 w-48">
                <h1 class="text-neutral-700 text-[14px] font-bold text-left mt-5 mb-1">Harga Khusus untuk anak</h1>
                <p class="text-neutral-700 font-medium text-left text-[11px]">Harga khusus untuk anak dan pelajar</p>
            </div>
        </a>
        <a href="#" class="shadow-xl hover:shadow-2xl rounded-lg h-96 border-solid border-2 border-neutral-100 w-60">
            <img src="promo4.png" alt="">
            <div class="flex justify-center flex-col text-left mt-2 ms-5 w-48">
                <h1 class="text-neutral-700 text-[14px] font-bold text-left mt-5 mb-1">Promo Tiket Gratis</h1>
                <p class="text-neutral-700 font-medium text-left text-[11px]">Promo tiket gratis</p>
            </div>
        </a>
    </div>
</section>
@endsection