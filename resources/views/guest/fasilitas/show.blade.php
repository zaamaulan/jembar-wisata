@extends('layouts.master')

@section('title', 'Fasilitas')

@section('content')
    <section class="mt-20 flex flex-col container mx-auto my-28">
        <p class="text-2xl text-neutral-700 font-semibold my-10">{{ $fasilitas->nama_fasilitas }}</p>
        <p class="text-gray-500">{{ $fasilitas->deskripsi_fasilitas }}</p>
    </section>
@endsection
