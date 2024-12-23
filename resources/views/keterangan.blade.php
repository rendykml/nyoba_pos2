{{-- @dd($name); --}}
@extends('layouts.main')

@section('container')
    <section id="home" class="home">
        <h1>Nama : {{ $name['name'] }}</h1>
        <h2>Kelas : {{ $name['kelas'] }} </h2>
        <h3>NPM : {{ $name['NPM'] }}</h3>
        <a href="/about"> Kembali </a>
    </section>
@endsection
