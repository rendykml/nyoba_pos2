<style>
    .contact{
        text-align: center;
        justify-content: center;
        display: block;
    }
</style>
@extends('layouts.main')

@section('container')
    <section class="contact mt-5">
        <h1>Get in Touch</h1>
        <ul>
            <strong>Instagram:{{ $kontak_single['id'] }}</strong> <a href="{{ $kontak_single['kontak_ig'] }}" target="_blank">@your_instagram</a><br>
            
            <strong>WhatsApp:{{ $kontak_single['kontak_wa'] }}</strong> <br>
            {{-- <li><strong>GitHub:</strong> <a href="https://github.com/your_github" target="_blank">github.com/your_github</a>
            </li> --}}
            <a href="/kontak">Kembali</a>
        </ul>
    </section>
@endsection