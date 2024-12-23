<style>

    .contact {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 50px 20px;
        text-align: center;
    }

    .contact h1 {
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    .contact ul {
        list-style: none;
        padding: 0;
    }

    .contact ul li {
        font-size: 1.2rem;
        margin: 10px 0;
    }

    .contact ul li a {
        color: #4CAF50;
        text-decoration: none;
        font-weight: bold;
    }

    .contact ul li a:hover {
        text-decoration: underline;
    }
</style>

@extends('layouts.main')

@section('container')
    <section class="contact">
        <h1>Get in Touch</h1>
        <ul>
            @foreach($kontak as $kontaks)
            <li><strong>Instagram:{{ $kontaks['id'] }}</strong> <a href="{{ $kontaks['kontak_ig'] }}" target="_blank">@your_instagram</a>
            </li>
            <li><a href="/kontaks{{ $kontaks['id'] }}">lihat lebih</a></li>
            {{-- <li><strong>WhatsApp:{{ $kontaks['kontak_wa'] }}</strong></li> --}}
            {{-- <li><strong>GitHub:</strong> <a href="https://github.com/your_github" target="_blank">github.com/your_github</a>
            </li> --}}
            @endforeach
        </ul>
    </section>
@endsection
