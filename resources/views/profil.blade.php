@extends('app')

@section('title', 'Profil')

@section('content')


<div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-lg p-6">

    <!-- FOTO + NAMA -->
    <div class="text-center">
        <img src="/images/foto.png" 
             class="w-28 h-28 mx-auto rounded-full border-4 border-green-500 shadow-md">

        <h2 class="text-2xl font-bold mt-3">Merlinsha Lunny</h2>
        <p class="text-gray-500">🎓 Sistem Informasi</p>
        <p class="text-gray-500">📍 Pontianak</p>

        <!-- BADGE -->
        <span class="inline-block mt-3 bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm">
            🌟 Donatur Aktif
        </span>
    </div>

    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6 text-center">

        <div class="bg-green-100 p-4 rounded-xl">
            <p class="text-2xl font-bold text-green-600">Rp 1.500.000</p>
            <p class="text-sm text-gray-600">Total Donasi</p>
        </div>

        <div class="bg-blue-100 p-4 rounded-xl">
            <p class="text-2xl font-bold text-blue-600">25</p>
            <p class="text-sm text-gray-600">Jumlah Donasi</p>
        </div>

        <div class="bg-purple-100 p-4 rounded-xl">
            <p class="text-2xl font-bold text-purple-600">Rp 500.000</p>
            <p class="text-sm text-gray-600">Dompet Donasi</p>
        </div>

    </div>

    <!-- 🔷 TENTANG -->
    <div class="mt-8 text-center">
        <h3 class="text-lg font-bold mb-2">Tentang Saya</h3>
        <p class="text-gray-600">
            Saya adalah mahasiswa Sistem Informasi yang memiliki minat dalam 
            pengembangan web dan teknologi digital. Melalui platform Donasiku, 
            saya ingin membantu masyarakat untuk lebih mudah berbagi kebaikan 
            dan menyalurkan bantuan kepada yang membutuhkan.
        </p>
    </div>

    <!-- 🔷 RIWAYAT DONASI -->
    <div class="mt-8">
        <h3 class="text-lg font-bold mb-3">Riwayat Donasi</h3>

        <div class="bg-gray-50 rounded-xl p-4 shadow">

            <div class="flex justify-between border-b py-2">
                <span>Bantuan Banjir</span>
                <span class="text-green-600 font-semibold">Rp 100.000</span>
            </div>

            <div class="flex justify-between border-b py-2">
                <span>Donasi Pendidikan</span>
                <span class="text-green-600 font-semibold">Rp 50.000</span>
            </div>

            <div class="flex justify-between py-2">
                <span>Bantuan Kesehatan</span>
                <span class="text-green-600 font-semibold">Rp 75.000</span>
            </div>

        </div>
    </div>

    <!-- 🔷 TOMBOL AKSI -->
    <div class="mt-8 text-center">
        <a href="/donasi" 
           class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-lg shadow">
            Donasi Sekarang
        </a>
    </div>

</div>

@endsection