@extends('layouts.admin-layout')

@section('content')
    <section>
      {{ request()->path() }}
    </section>
@endsection