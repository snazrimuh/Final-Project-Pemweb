<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\PemeriksaanAnak;
use Illuminate\Http\Request;

class PemeriksaanAnakController extends Controller
{
    public function index($nik_anak)
    {
        $pemeriksaan = PemeriksaanAnak::where('nik_anak', $nik_anak)->get();
        $anak = Anak::findOrFail($nik_anak);
        return view('anak.pemeriksaan.index', compact('pemeriksaan', 'anak'));
    }

    public function create($nik_anak)
    {
        $anak = Anak::findOrFail($nik_anak);
        return view('anak.pemeriksaan.create', compact('anak', 'nik_anak'));
    }
    

    public function store(Request $request, $nik_anak)
    {
        $request->validate([
            'usia' => 'required',
            'tb_anak' => 'required',
            'bb_anak' => 'required',
            'imt' => 'required',
            'vitamin' => 'required',
            'status_tb' => 'required',
            'status_bb' => 'required',
            'id_parameter' => 'required',
            'status_stunting' => 'required',
        ]);

        $pemeriksaanAnak = new PemeriksaanAnak();
        $pemeriksaanAnak->nik_anak = $nik_anak;
        $pemeriksaanAnak->usia = $request->usia;
        $pemeriksaanAnak->tb_anak = $request->tb_anak;
        $pemeriksaanAnak->bb_anak = $request->bb_anak;
        $pemeriksaanAnak->imt = $request->imt;
        $pemeriksaanAnak->vitamin = $request->vitamin;
        $pemeriksaanAnak->status_tb = $request->status_tb;
        $pemeriksaanAnak->status_bb = $request->status_bb;
        $pemeriksaanAnak->id_parameter = $request->id_parameter;
        $pemeriksaanAnak->status_stunting = $request->status_stunting;
        $pemeriksaanAnak->save();

        return redirect()->route('anak.pemeriksaan.index', $nik_anak)->with('success', 'Pemeriksaan Anak berhasil ditambahkan.');
    }

    public function destroy($nik_anak, $id_pemeriksaan_anak)
    {
        $pemeriksaanAnak = PemeriksaanAnak::findOrFail($id_pemeriksaan_anak);
        $pemeriksaanAnak->delete();

        return redirect()->route('anak.pemeriksaan.index', $nik_anak)->with('success', 'Pemeriksaan Anak berhasil dihapus.');
    }
}
