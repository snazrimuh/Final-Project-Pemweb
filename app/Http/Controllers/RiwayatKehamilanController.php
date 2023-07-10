<?php

namespace App\Http\Controllers;

use App\Models\Ibu;
use App\Models\RiwayatKehamilan;
use Illuminate\Http\Request;

class RiwayatKehamilanController extends Controller
{
    public function index()
    {
        $riwayatKehamilan = RiwayatKehamilan::with('ibu')->get();
        return view('riwayat_kehamilan.index', compact('riwayatKehamilan'));
    }

    public function create()
    {
        $ibu = Ibu::all();
        return view('riwayat_kehamilan.create', compact('ibu'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik_ibu' => 'required',
            'tgl_melahirkan' => 'required|date',
        ]);
    
        if ($request->has('nik_ibu') && !empty($request->nik_ibu)) {
            RiwayatKehamilan::create([
                'nik_ibu' => $request->nik_ibu,
                'tgl_melahirkan' => $request->tgl_melahirkan,
            ]);
    
            return redirect()->route('riwayat-kehamilan.index')->with('success', 'Riwayat kehamilan berhasil ditambahkan.');
        } else {
            return redirect()->back()->with('error', 'NIK Ibu tidak valid. Silakan pilih ibu yang valid.');
        }
    }
    
}
