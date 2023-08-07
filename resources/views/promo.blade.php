@extends('layouts.master')

@section('title', 'Promo')
@vite('resources/css/app.css')


@section('content')
    <section class="mt-20 flex flex-col container mx-auto my-28">
        <div class="flex flex-col gap-y-3">
            <h1 class="text-neutral-700 text-[40px] font-semibold text-left">Promo
                <span class="text-sky-400 text-[40px] font-semibold text-left">Jembar raya Waterpark</span>
            </h1>
            <p class="text-gray-500 text-lg font-medium text-left max-w-4xl">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea explicabo nostrum rerum. Porro corporis inventore nemo!
            </p>
        </div>
        <div class="container mx-auto grid grid-cols-4 ">
            <x-card title="Hari Senin-Jumat" thumbnail="promo1.png" caption="biaya tiket masuk Rp25.000" href="" style="" />
            <x-card title="Hari Sabtu dan Minggu" thumbnail="promo2.png" caption="biaya tiket masuk Rp30.000" href="" style="" />
            <x-card title="Harga Khusus untuk anak" thumbnail="promo3.png" caption="Harga khusus untuk anak dan pelajar" href="" style="" />
            <x-card title="Promo Tiket Gratis" thumbnail="promo4.png" caption="Promo tiket gratis" href="" style="" />
        </div>
    </section>
@endsection
