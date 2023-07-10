<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Wilayah_Kelurahan;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.dashboard');
            }

            return redirect('/dashboarduser');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
    public function register()
    {
        $kelurahan = Wilayah_Kelurahan::all();
        return view('auth.register', compact('kelurahan'));
    }

    public function storeUser(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'id_kelurahan' => 'required|integer',
            'password' => 'required|min:6|confirmed',
        ]);

        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        // Atur autentikasi untuk pengguna yang baru terdaftar
        Auth::login($user);

        return redirect()->route('login')->with('success', 'Admin Wilayah berhasil ditambahkan.');
    }
}
