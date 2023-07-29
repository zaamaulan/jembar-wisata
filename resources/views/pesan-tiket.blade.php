@extends('layouts.master')

@section('title', 'Pesan Tiket')
@vite('resources/css/app.css')


@section('content')
    <section class="mt-20 flex flex-col ml-16">
    <div class="flex flex-col gap-y-3">
        <h1 class="text-neutral-700 text-[40px] font-semibold text-center">Pesan Tiket 
            <span class="text-sky-400 text-[40px] font-semibold text-center">Jembar raya Waterpark</span>
        </h1>
        <p class="text-gray-500 text-lg font-medium text-center">
        Kini tiket dapat dipesan melalui web tanpa takut kehabisan tiket. 
        <br>
        Pesan sekarang
        </p>
    </div>

    <div class="grid grid-cols-10 mt-20">
    <div class="col-span-1"></div>


    <div class="col-span-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- start form -->
            <div class="grid grid-rows-8 grid-flow-col items-center">
                <div class="row-start-1"></div>
                <div class="row-start-2 row-end-7">
                    <!-- start row -->
                    <form method="post" action="" class="">
                    <label for="" class="text-xl font-semibold">Nama kamu siapa?</label><br>
                    <input type="text" class="h-11 w-96 bg-[#F3F3F3] mt-2"><br>
                    <div class="mt-6 mb-5 h-px shrink-0 bg-gray-200"></div>

                    <label for="" class="text-xl font-semibold">Mau pesan tiket buat berapa orang?</label><br>
                    <input type="text" class="h-11 w-96 bg-[#F3F3F3] mt-2"><br>
                    <div class="mt-6 mb-5 h-px shrink-0 bg-gray-200"></div>

                    <label for="" class="text-xl font-semibold">No Hp biar kami bisa menghubungi <br> kamu</label><br>
                    <input type="text" class="h-11 w-96 bg-[#F3F3F3] mt-2"><br>
                    <div class="mt-6 mb-5 h-px shrink-0 bg-gray-200"></div>

                    <button type="submit" class="rounded-md bg-[#3AA1FF] pl-4 pr-5 py-3 mx-auto text-white hover:active:bg-sky-600">Pesan tiket</button>
                    </form>

                    <!-- end row -->

                </div>
                <div class="row-start-8"></div>

                
            </div>
            <!-- end form -->

            <!-- start gambar -->
            <div class="mx-auto"><img src="{{ URL::to('/tiket.png') }}"></div>
            <!-- end gambar -->
        </div>
    </div>


    <div class="col-span-9"></div>
    </div>

    </section>
@endsection