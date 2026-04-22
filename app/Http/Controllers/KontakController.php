<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $email = "merlin@email.com";
        $no_hp = "08123456789";

        return view('kontak', compact('email', 'no_hp'));
    }
}