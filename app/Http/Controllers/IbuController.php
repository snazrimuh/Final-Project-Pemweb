<?php

namespace App\Http\Controllers;

use App\Models\Ibu;
use Illuminate\Http\Request;

class IbuController extends Controller
{
    public function index()
    {
        $id_kelurahan = auth()->user()->id_kelurahan;
        $role = auth()->user()->role;
        
        if ($role == 'admin') {
            $ibu = Ibu::all();
        } else {
            $ibu = Ibu::where('id_kelurahan', $id_kelurahan)->get();
        }
        return view('ibu.index', compact('ibu'));
    }
    
    public function create()
    {
        return view('ibu.create', ['ibu' => new Ibu()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik_ibu' => 'required|integer',
            'kk' => 'required|integer',
            'nama_ibu' => 'required|string|max:50',
            'alamat_ibu' => 'required|string|max:100',
            'tgl_lahir_ibu' => 'required|date',
            'id_kelurahan' => 'required|integer',
        ]);

        Ibu::create($request->all());

        return redirect()->route('ibu.index')->with('success', 'Data Ibu berhasil ditambahkan.');
    }

    public function edit(Ibu $ibu)
    {
        return view('ibu.edit', compact('ibu'));
    }

    public function update(Request $request, Ibu $ibu)
    {
        $request->validate([
            'nik_ibu' => 'required|integer',
            'kk' => 'required|integer',
            'nama_ibu' => 'required|string|max:50',
            'alamat_ibu' => 'required|string|max:100',
            'tgl_lahir_ibu' => 'required|date',
            'id_kelurahan' => 'required|integer',
        ]);

        $ibu->update($request->all());

        return redirect()->route('ibu.index')->with('success', 'Data Ibu berhasil diperbarui.');
    }

    public function destroy(Ibu $ibu)
    {
        $ibu->delete();

        return redirect()->route('ibu.index')->with('success', 'Data Ibu berhasil dihapus.');
    }
}
