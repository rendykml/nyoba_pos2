   

    {{-- @dd($name) --}}
    @extends('layouts.main')

    @section('container')
        {{-- <section class="about">
            <img src="img/rendy.jpeg" alt="Rendy Kamaluddin">
            {{-- <h1>{{ $name }}</h1> --}}
        {{-- <p>Hello! My name is {{ $name }} dari kelas {{ $kelas }} dengan NPM({{ $NPM }}), a --}}
        {{-- 20-year-old student from Bandung. I am currently pursuing a
                degree in Computer Science at the Universitas Logistik dan Bisnis Internasional. With a passion for
                technology and problem-solving, I strive to become an expert in the field of Informatics Engineering.</p>
        </section> --}}

        @foreach ($names as $nama_keterangan)
            <section class="mt-5" >
                <a href="/keterangan/{{ $nama_keterangan['slug'] }}">
                    <h1>Nama : {{ $nama_keterangan['name'] }}</h1>
                </a>
            </section>
        @endforeach
    @endsection
