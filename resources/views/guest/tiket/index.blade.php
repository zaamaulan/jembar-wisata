@extends('layouts.master')

@section('title', 'Pesan Tiket')

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


            <div class="col-span-8 mb-20">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                    <!-- start form -->
                    <div class="grid grid-rows-8 grid-flow-col items-center">
                        <div class="row-start-1"></div>
                        <div class="row-start-2 row-end-7">
                            <!-- start row -->
                            <form method="post" action="/pesan-tiket">
                                <label for="" class="text-xl font-semibold text-neutral-700">Nama kamu siapa?</label><br>
                                <input type="text" class="h-11 w-96 bg-[#F3F3F3] mt-2 focus:outline-none px-3 py-1.5"><br>
                                <div class="mt-6 mb-5 h-px shrink-0 bg-gray-200"></div>

                                <label for="" class="text-xl font-semibold text-neutral-700">Mau pesan tiket buat berapa orang?</label><br>
                                <input type="text" class="h-11 w-96 bg-[#F3F3F3] mt-2 focus:outline-none px-3 py-1.5"><br>
                                <div class="mt-6 mb-5 h-px shrink-0 bg-gray-200"></div>

                                <label for="" class="text-xl font-semibold text-neutral-700">No Hp biar kami bisa menghubungi <br>
                                    kamu</label><br>
                                <input type="text" class="h-11 w-96 bg-[#F3F3F3] mt-2 focus:outline-none px-3 py-1.5"><br>
                                <div class="mt-6 mb-5 h-px shrink-0 bg-gray-200"></div>

                                <x-button type="submit" style="hover:bg-sky-500 bg-sky-400 transition-colors duration-200 text-white" buttonTitle="pesan tiket" href="pesan-tiket" />
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

        </div>

    </section>
@endsection
