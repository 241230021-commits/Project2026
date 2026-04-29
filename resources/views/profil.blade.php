@extends('app')

@section('title', 'Profil')

@section('content')
    <h1 style="text-align:center;">Profil Saya</h1>

    <div style="
        max-width:400px;
        margin:auto;
        border-radius:15px;
        padding:20px;
        background:linear-gradient(135deg, #6a11cb, #2575fc);
        color:white;
        text-align:center;
        box-shadow:0 4px 10px rgba(0,0,0,0.2);
    ">
    <img src="{{ asset('images/foto.png') }}"
        width="120"
        style="display: block; margin: 15px auto; border-radius:50%;">
        <h2>Merlinsha Lunny</h2>

        <p>🎓 Sistem Informasi</p>
        <p>📍 Pontianak</p>

        <hr>

        <p><b>UNIVERSITAS MUHAMMADIYAH PONTIANAK</p>

    </div>
   
@endsection