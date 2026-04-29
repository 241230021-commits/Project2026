@extends('app')

@section('title', 'Kontak')

@section('content')
    <h1 style="text-align:center;">Hubungi Saya 💬</h1>

    <div 
        onmouseover="this.style.transform='scale(1.05)'"
        onmouseout="this.style.transform='scale(1)'"
        style="
            max-width:420px;
            margin:auto;
            border-radius:20px;
            padding:25px;
            background:linear-gradient(135deg, #667eea, #764ba2);
            color:white;
            text-align:center;
            box-shadow:0 6px 15px rgba(0,0,0,0.2);
            transition:all 0.3s ease;
        "
    >

        <h2>✨ Kontak Saya</h2>

        <p>📧 <b>Email:</b> MerlinshaLunny@gmail.com</p>
        <p>📱 <b>WhatsApp:</b> 08xxxxxxxxxx</p>
        <p>📷 <b>Instagram:</b> @merlinsha</p>

        <hr style="margin:15px 0; border-color:white;">

        <h3>💌 Kirim Pesan</h3>

        <form>
            <input type="text" placeholder="Nama kamu"
                style="width:90%; padding:10px; margin:5px; border:none; border-radius:8px;"><br>

            <input type="email" placeholder="Email kamu"
                style="width:90%; padding:10px; margin:5px; border:none; border-radius:8px;"><br>

            <textarea placeholder="Tulis pesan kamu..."
                style="width:90%; padding:10px; margin:5px; border:none; border-radius:8px;"></textarea><br>

            <button style="
                background:white;
                color:#764ba2;
                padding:10px 20px;
                border:none;
                border-radius:10px;
                cursor:pointer;
                font-weight:bold;
                margin-top:10px;
            ">
                Kirim 🚀
            </button>
        </form>

        <p style="margin-top:15px; font-size:12px;">
            ⚡ Biasanya dibalas dalam 1x24 jam
        </p>

    </div>
@endsection