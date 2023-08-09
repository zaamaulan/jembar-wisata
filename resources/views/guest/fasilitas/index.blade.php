<?php
$dummyData = [['title' => 'Kolam Renang Anak', 'description' => 'Sebagaimana namanya, tentu Jember Waterpark menawarkan aneka wahana air yang mengasyikkan. Waterboom, misalnya', 'image' => 'patung.jpg'], ['title' => 'Patung-patung Unik', 'description' => 'Pada saat musim liburan Jembar Waterpark selalu di padati pengunjung dari berbagai daerah di Indonesia', 'image' => 'patung2.png'], ['title' => 'Fasilitas Non-air', 'description' => 'Nikmati sensasinya di kolam arus Jembar Waterpark. Anda akan bergerak di atas pelampung sepanjang kolam arus, sambil memandangi keindahan alam di sekitarnya', 'image' => 'saung.jpg']];
?>

@extends('layouts.master')

@section('title', 'Fasilitas')

@section('content')
    <section class="mt-20 flex flex-col container mx-auto my-28 gap-y-10">
        <div class="flex flex-col gap-y-3">
            <h1 class="text-neutral-700 text-[40px] font-semibold text-left">Fasilitas
                <span class="text-sky-400 text-[40px] font-semibold text-left">Jembar raya Waterpark</span>
            </h1>
            <p class="text-gray-500 text-lg font-medium text-left max-w-4xl">
                Jembar Raya Waterpark juga memiliki berbagai macam fasilitas dari fasilitas
                air hingga non-air. Berikut beberapa fasilitas yang ada di Jembar Raya
                Waterpark
            </p>
        </div>

        @foreach ($dummyData as $d)
            <div class="">
                <x-fasilitas-card title="{{ $d['title'] }}" description="{{ $d['description'] }}" image="{{ $d['image'] }}" />
            </div>
        @endforeach

    </section>
@endsection