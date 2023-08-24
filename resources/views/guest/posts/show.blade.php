@extends('layouts.master')

@section('title', 'Blog')

@section('content')
    <section class="mt-20 flex flex-col container mx-auto my-28">
        <div class="flex gap-x-28">
        <div class="max-w-4xl">
            <h1 class="text-2xl text-neutral-700 font-semibold my-10">{{ $post->judul_post }}</h1>
            <h3 class="font-light">Juli 09, 2023</h3>
            <img src="/jembar.png" alt="">
            <br>
            <p class="text-gray-500">{{ $post->isi_post }}</p>
            
        </div>
        <div class="flex flex-col">
            <br><br>
            <br><br>
            <div class="bg-gray shadow-sm rounded-sm  mt-2 ">
            <h3 class="text-xl font-semibold text-blue-800 font-poppins mb-3 hover:text-gray-500 transition-all">• Blog Terpopuler</h3><br>       
            <div class="flex gap-x-7">
                <img src="/lainnya3.png" alt="" class="w-40">
                <div>
                    <h1 class="font-medium">JEMBAR RAYA WATERPARK</h1>
                    <h1 class="font-medium">Tiket & Wahana Juli 2023</h1>
                    <p class="font-light">Juli 09, 2023</p>
                </div>
            </div>
            <br><br>
            <div class="flex gap-x-7">
                <img src="/lainnya2.png" alt="" class="w-40">
                <div>
                    <h1 class="font-medium">Wisata Situ Cipanten</h1>
                    <p class="font-light">September 10, 2023</p>
                </div>
            </div>
            <br><br>
            <div class="flex gap-x-7">
                <img src="/lainnya1.png" alt="" class="w-40">
                <div>
                    <h1 class="font-medium">Terasering Panyaweuyan,</h1>
                    <h1 class="font-medium">Wisata Majalengka Paling</h1>
                    <h1 class="font-medium">Populer </h1>
                    <p class="font-light">January 15, 2023</p>
                </div>
            </div>
        
            </div></div>
            </div>
            </div>
        </div>
    </div>
    </section>
@endsection
