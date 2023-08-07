@extends('layouts.admin-layout')

@section('content')
    <section>
        <p>
            kamu berada di Route <span class="text-blue-400">{{ request()->path() }}</span>
        </p>
    </section>
@endsection
