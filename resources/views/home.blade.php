@extends('app')

@section('title', 'Home')

@section('content')

<div class="max-w-6xl mx-auto px-4">

    <div class="text-center py-12">
        <h1 class="text-3xl md:text-4xl font-bold text-green-600">
            Bersama Kita Bisa Membantu 
        </h1>

        <p class="text-gray-600 mt-3 max-w-xl mx-auto">
            Bantu sesama dengan donasi yang transparan, cepat, dan tepat sasaran. 
            Setiap rupiah yang kamu berikan sangat berarti bagi mereka.
        </p>

    
        <a href="#" 
           class="inline-block mt-6 bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-lg shadow hover:scale-105 transition">
           Donasi Sekarang 
        </a>
    </div>


    <div class="grid md:grid-cols-3 gap-6 text-center mb-10">

        <div class="bg-white p-5 rounded-xl shadow hover:shadow-lg transition hover:scale-105">
            <p class="text-gray-500">💰 Dompet Donasi</p>
            <h2 class="text-green-600 text-2xl font-bold">Rp 500.000</h2>
        </div>

        <div class="bg-white p-5 rounded-xl shadow hover:shadow-lg transition hover:scale-105">
            <p class="text-gray-500">📊 Total Donasi</p>
            <h2 class="text-blue-600 text-2xl font-bold">Rp 1.500.000</h2>
        </div>

        <div class="bg-white p-5 rounded-xl shadow hover:shadow-lg transition hover:scale-105">
            <p class="text-gray-500">🙌 Jumlah Donatur</p>
            <h2 class="text-purple-600 text-2xl font-bold">25 Orang</h2>
        </div>

    </div>

    <!-- 📦 KAMPANYE -->
    <h2 class="text-xl font-bold mb-4">Kampanye Donasi</h2>

    <div class="grid md:grid-cols-3 gap-6">

        <!-- Card -->
        <div class="bg-white p-4 rounded-xl shadow hover:shadow-lg transition">
        <img src="{{ asset('images/banjir.jpeg') }}" class="w-full h-48 object-cover rounded-t-xl mb-3">
            <h3 class="font-bold">Bantuan Banjir</h3>
            <p class="text-sm text-gray-600 mb-2">
                Membantu korban banjir di Kalimantan Barat.
            </p>

            <!-- Progress -->
            <div class="w-full bg-gray-200 rounded-full h-2 mb-2">
                <div class="bg-green-500 h-2 rounded-full" style="width:70%"></div>
            </div>

            <p class="text-sm">Rp 700.000 / Rp 1.000.000</p>

            <button class="mt-3 w-full bg-green-500 hover:bg-green-600 text-white py-2 rounded">
                Donasi
            </button>
        </div>

        <!-- Card -->
        <div class="bg-white p-4 rounded-xl shadow hover:shadow-lg transition">
            <img src="{{ asset('images/sekolah.jpg') }}" class="w-full h-48 object-cover rounded-t-xl mb-3">
            <h3 class="font-bold">Donasi Pendidikan</h3>
            <p class="text-sm text-gray-600 mb-2">
                Bantuan biaya sekolah anak kurang mampu.
            </p>

            <div class="w-full bg-gray-200 rounded-full h-2 mb-2">
                <div class="bg-blue-500 h-2 rounded-full" style="width:50%"></div>
            </div>

            <p class="text-sm">Rp 500.000 / Rp 1.000.000</p>

            <button class="mt-3 w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded">
                Donasi
            </button>
        </div>

        <!-- Card -->
        <div class="bg-white p-4 rounded-xl shadow hover:shadow-lg transition">
            <img src="{{ asset('images/kesehatan.webp') }}" class="w-full h-48 object-cover rounded-t-xl mb-3">
            <h3 class="font-bold">Bantuan Kesehatan</h3>
            <p class="text-sm text-gray-600 mb-2">
                Donasi untuk pengobatan masyarakat.
            </p>

            <div class="w-full bg-gray-200 rounded-full h-2 mb-2">
                <div class="bg-purple-500 h-2 rounded-full" style="width:30%"></div>
            </div>

            <p class="text-sm">Rp 300.000 / Rp 1.000.000</p>

            <button class="mt-3 w-full bg-purple-500 hover:bg-purple-600 text-white py-2 rounded">
                Donasi
            </button>
        </div>

    </div>

    <!-- 💬 TESTIMONI -->
    <h2 class="text-xl font-bold mt-12 mb-4 text-center">Apa Kata Mereka?</h2>

    <div class="grid md:grid-cols-3 gap-6 text-center">

        <div class="bg-white p-4 rounded-xl shadow">
            <p>"Terima kasih, bantuan ini sangat berarti 🙏"</p>
            <span class="text-sm text-gray-500">- Penerima bantuan</span>
        </div>

        <div class="bg-white p-4 rounded-xl shadow">
            <p>"Platformnya mudah dan transparan 👍"</p>
            <span class="text-sm text-gray-500">- Donatur</span>
        </div>

        <div class="bg-white p-4 rounded-xl shadow">
            <p>"Saya jadi lebih mudah membantu sesama ❤️"</p>
            <span class="text-sm text-gray-500">- Pengguna</span>
        </div>

    </div>

    <!-- 🚀 CTA AKHIR -->
    <div class="text-center mt-12 mb-10">
        <h2 class="text-xl font-bold">
            Yuk jadi bagian dari kebaikan hari ini 🌱
        </h2>

        <a href="#" 
           class="inline-block mt-4 bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-lg shadow hover:scale-105 transition">
           Donasi Sekarang
        </a>
    </div>

</div>

@endsection