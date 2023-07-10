<?php

namespace App\Http\Controllers;

use App\Models\PemeriksaanKehamilan;
use App\Models\RiwayatKehamilan;
use Illuminate\Http\Request;

class PemeriksaanKehamilanController extends Controller
{

    public function index($id_kehamilan)
    {
        // Ambil data riwayat kehamilan berdasarkan ID
        $riwayatKehamilan = RiwayatKehamilan::findOrFail($id_kehamilan);
    
        // Ambil data pemeriksaan kehamilan terkait
        $pemeriksaanKehamilan = $riwayatKehamilan->pemeriksaanKehamilan;
    
        // Pengecekan apakah ada data pemeriksaan kehamilan
        if ($pemeriksaanKehamilan) {
            // Tampilkan halaman index pemeriksaan kehamilan dengan data yang diperlukan
            return view('riwayat_kehamilan.pemeriksaan.index', compact('riwayatKehamilan', 'pemeriksaanKehamilan'));
        }
    
        // Jika tidak ada data pemeriksaan kehamilan, tampilkan pesan atau lakukan penanganan lain sesuai kebutuhan aplikasi Anda
        return redirect()->back()->with('error', 'Tidak ada data pemeriksaan kehamilan yang tersedia.');
    }

    public function create($id_kehamilan)
    {
        $riwayatKehamilan = RiwayatKehamilan::findOrFail($id_kehamilan);

        return view('riwayat_kehamilan.pemeriksaan.create', compact('riwayatKehamilan'));
    }

    public function store(Request $request, $id_kehamilan)
    {
        $request->validate([
            'lingkar_perut' => 'required',
            'tb_ibu' => 'required',
            'bb_ibu' => 'required',
            'sistole' => 'required',
            'diastole' => 'required',
        ]);

        $riwayatKehamilan = RiwayatKehamilan::findOrFail($id_kehamilan);

        $pemeriksaanKehamilan = new PemeriksaanKehamilan([
            'lingkar_perut' => $request->lingkar_perut,
            'tb_ibu' => $request->tb_ibu,
            'bb_ibu' => $request->bb_ibu,
            'sistole' => $request->sistole,
            'diastole' => $request->diastole,
        ]);

        $riwayatKehamilan->pemeriksaanKehamilan()->save($pemeriksaanKehamilan);

        return redirect()->route('riwayat-kehamilan.pemeriksaan.index', $riwayatKehamilan->id_kehamilan)
            ->with('success', 'Pemeriksaan kehamilan berhasil ditambahkan.');
    }
}
