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

        @foreach ($fasilitas as $f)
            <div>
                <x-fasilitas-card title="{{ $f->nama_fasilitas }}" description="{{ $f->deskripsi_fasilitas }}" image="dinosaurus.png"
                    link="/fasilitas/{{ $f->id }}" />
            </div>
        @endforeach


    </section>
@endsection
