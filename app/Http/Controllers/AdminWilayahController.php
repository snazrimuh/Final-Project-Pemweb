<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Wilayah_Kelurahan;
use Illuminate\Http\Request;

class AdminWilayahController extends Controller
{
    /**
     * Menampilkan daftar admin wilayah.
     */
    public function index()
    {
        $admins = User::where('role', 'user')->get();
        return view('admin_wilayah.index', compact('admins'));

    }

    /**
     * Menampilkan form untuk membuat admin wilayah baru.
     */
    public function create()
    {
        $kelurahan = Wilayah_Kelurahan::all();
        return view('admin_wilayah.create', compact('kelurahan'));
    }

    /**
     * Menyimpan admin wilayah baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:20',
            'email' => 'required|email|max:20',
            // 'password' => 'required|string|max:20',
            'id_kelurahan' => 'required|integer',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            // 'password' => $request->password,
            'id_kelurahan' => $request->id_kelurahan,
        ]);

        return redirect()->route('admin_wilayah.index')->with('success', 'Admin Wilayah berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit admin wilayah.
     */
    public function edit($id)
    {
        $admin = User::findOrFail($id);
        $kelurahan = Wilayah_Kelurahan::all();
        return view('admin_wilayah.edit', compact('admin', 'kelurahan'));
    }

    /**
     * Mengupdate admin wilayah yang ada di database.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:20',
            'email' => 'required|email|max:20',
            // 'password' => 'required|string|max:20',
            'id_kelurahan' => 'required|integer',
        ]);

        $admin = User::findOrFail($id);

        $admin->name = $request->name;
        $admin->email = $request->email;
        // $admin->password = $request->password;
        $admin->id_kelurahan = $request->id_kelurahan;

        $admin->save();

        return redirect()->route('admin_wilayah.index')->with('success', 'Admin Wilayah berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $admin = User::findOrFail($id);
        $admin->delete();

        return redirect()->route('admin_wilayah.index')->with('success', 'Admin Wilayah berhasil dihapus.');
    }
}
