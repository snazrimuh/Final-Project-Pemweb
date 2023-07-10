<?php

namespace App\Http\Controllers;

use App\Models\Wilayah_Kelurahan;
use Illuminate\Http\Request;

class WilayahKelurahanController extends Controller
{
    public function create()
    {
        $kelurahan = Wilayah_Kelurahan::all();
        return view('anak.create', compact('kelurahan'));
    }

    public function create_ibu()
    {
        $kelurahan = Wilayah_Kelurahan::all();
        return view('ibu.create', compact('kelurahan'));
    }

    public function create_admin_wilayah()
    {
        $kelurahan = Wilayah_Kelurahan::all();
        return view('admin_wilayah.create', compact('kelurahan'));
    }
    public function register()
    {
        $kelurahan = Wilayah_Kelurahan::all();
        return view('auth.register', compact('kelurahan'));
    }
}
