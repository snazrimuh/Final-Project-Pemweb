<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use Illuminate\Http\Request;
use App\Models\WilayahKelurahan;

class AnakController extends Controller
{

    public function index()
    {
        $id_kelurahan = auth()->user()->id_kelurahan;
        $role = auth()->user()->role;
        
        if ($role == 'admin') {
            $anak = Anak::all();
        } else {
            $anak = Anak::where('id_kelurahan', $id_kelurahan)->get();
        }
        
        return view('anak.index', compact('anak'));
    }
    public function create()
    {
    return view('anak.create', [
        'anak' => new Anak() 
    ]);
    }


    public function store(Request $request)
    {
        $anak = Anak::create($request->all());
        return redirect()->route('anak.index')->with('success', 'Data anak berhasil ditambahkan');
    }

    public function edit($nik_anak)
    {
        $anak = Anak::find($nik_anak);
        return view('anak.edit', compact('anak'));
    }

    public function update(Request $request, $nik_anak)
    {
        $anak = Anak::find($nik_anak);
        $anak->update($request->all());
        return redirect()->route('anak.index')->with('success', 'Data anak berhasil diupdate');
    }

    public function destroy($nik_anak)
    {
        $anak = Anak::find($nik_anak);
        $anak->delete();
        return redirect()->route('anak.index')->with('success', 'Data anak berhasil dihapus');
    }

    public function pemeriksaanIndex($nik_anak)
    {
    $anak = Anak::findOrFail($nik_anak);
    $riwayatPemeriksaan = $anak->pemeriksaanAnak;
    return view('pemeriksaan_anak.index', compact('riwayatPemeriksaan'));
    }

}
