@extends('layouts.master')

@section('title', 'Blog')

@section('content')
    <section class="mt-20 flex flex-col container mx-auto my-28">
        <div class="max-w-4xl">
            <p class="text-2xl text-neutral-700 font-semibold my-10">{{ $post->judul_post }}</p>
            <p class="text-gray-500">{{ $post->isi_post }}</p>
        </div>
    </section>
@endsection
