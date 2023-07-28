@extends('layouts.master')

@section('title', 'Blog')
@vite('resources/css/app.css')


@section('content')
    <section class="mt-20 flex flex-col container mx-auto my-28">
        <div class="grid grid-cols-3 gap-20">
            @foreach ($post as $p)
                <div>
                    <x-card style="shadow-lg h-[30rem]" title="{{ $p->judul_post }}" thumbnail="blog.png" caption="{{ $p->isi_post }}" href="/blog/{$slug}" />
                    @foreach ($author as $a)
                        <h1>{{ $a }}</h1>
                    @endforeach
                </div>
                @endforeach
            </div>
    </section>
@endsection
