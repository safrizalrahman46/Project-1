<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DinamisController extends Controller
{
    public function Beranda(){
        return view('Dinamis.Beranda');
    }
    public function Profil(){
        return view('Dinamis.profil');
    }
    public function Kontak(){
        return view('Dinamis.Kontak');
    }
}
