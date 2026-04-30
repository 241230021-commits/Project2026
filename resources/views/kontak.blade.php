@extends('app')

@section('title', 'Kontak')

@section('content')

<div class="max-w-4xl mx-auto">

    <h1 class="text-2xl font-bold text-center mb-6">Hubungi Saya</h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4 text-center">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid md:grid-cols-2 gap-6">

        <div class="bg-gradient-to-r from-green-300 to-white-500 text-black p-6 rounded-2xl shadow">

            <h2 class="text-lg font-bold mb-4"> Kontak Saya</h2>

            <p class="mb-2">📧 Email: merlinshalunny@gmail.com</p>
            <p class="mb-2">📱 WhatsApp: 08xxxxxxxxxx</p>
            <p class="mb-4">📷 Instagram: @Merlinsha Lunny</p>

            <a href="https://wa.me/6285750090710" 
               class="block bg-green-500 hover:bg-green-600 text-white text-center p-2 rounded mt-3">
               Chat via WhatsApp
            </a>

            <p class="text-sm mt-4 opacity-80">
                ⏱ Biasanya dibalas dalam 1x24 jam
            </p>

            <!-- MAP -->
            <iframe 
    
                src="https://maps.google.com/maps?q=Pontianak&t=&z=13&ie=UTF8&iwloc=&output=embed"
                class="w-full h-40 rounded mt-4">
            </iframe>

        </div>

        <!-- 🔷 FORM KONTAK -->
        <form action="/kontak" method="POST" 
              class="bg-white p-6 rounded-2xl shadow space-y-4">
            @csrf

            <!-- Nama -->
            <div>
                <label class="block text-sm mb-1">Nama</label>
                <input type="text" name="nama"
                       class="w-full border p-2 rounded focus:ring focus:ring-green-200"
                       required>
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm mb-1">Email</label>
                <input type="email" name="email"
                       class="w-full border p-2 rounded focus:ring focus:ring-green-200"
                       required>
            </div>

            <!-- Pesan -->
            <div>
                <label class="block text-sm mb-1">Pesan</label>
                <textarea name="pesan" rows="4"
                          class="w-full border p-2 rounded focus:ring focus:ring-green-200"
                          required></textarea>
            </div>

            <!-- Tombol -->
            <button type="submit"
                class="w-full bg-green-500 hover:bg-green-600 text-white py-2 rounded-lg">
                Kirim Pesan 🚀
            </button>

        </form>

    </div>
    <div class="bg-gradient-to-r from-green-400 to green-500
                text-white p-6 rounded-2x1 shadow
                hover:shadow-x1 hover:scale-105 transition duration-300">
</div>

@endsection