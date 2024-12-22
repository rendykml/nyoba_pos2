
<style>
body {
font-family: 'Arial', sans-serif;
margin: 0;
padding: 0;
background: #f5f5f5;
color: #333;
}

header {
background: linear-gradient(90deg, #4CAF50, #2c3e50);
color: white;
padding: 20px;
text-align: center;
}

nav {
display: flex;
justify-content: center;
background: #333;
}

nav a {
color: white;
padding: 15px 20px;
text-decoration: none;
text-transform: uppercase;
font-weight: bold;
transition: background 0.3s;
}

nav a:hover {
background: #4CAF50;
}

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
        <li><strong>Instagram:</strong> <a href="https://instagram.com/your_instagram" target="_blank">@your_instagram</a>
        </li>
        <li><strong>WhatsApp:</strong> <a href="https://wa.me/your_number" target="_blank">+62 81234567890</a></li>
        <li><strong>GitHub:</strong> <a href="https://github.com/your_github" target="_blank">github.com/your_github</a>
        </li>
    </ul>
</section>

@endsection
