<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $nama = "Merlinsha Lunny";
        $nim = "241230021";
        $prodi = "sistem informasi";

        return view('profil', compact('nama', 'nim', 'prodi'));
    }
}
