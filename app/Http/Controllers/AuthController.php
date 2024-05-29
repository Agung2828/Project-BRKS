<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; // Tambahkan Hash facade
use App\Models\User; // Ganti dengan model pengguna yang sesuai

class AuthController extends Controller
{
    public function index()
    {
        return view('halaman_auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $credentials = $request->only('email', 'password');

        // Menggunakan Auth::attempt untuk login
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Cek peran pengguna dan redirect ke halaman yang sesuai
            if ($user->role === 'admin') {
                return redirect()->route('admin')->with('success', 'Halo Admin, Anda berhasil login');
            } else {
                return redirect()->route('user')->with('success', 'Berhasil login');
            }
        } else {
            return redirect()->route('auth')->withErrors('Email atau password salah');
        }
    }

    public function create()
    {
        return view('halaman_auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'fullname' => 'required|min:5',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:6',
        ], [
            'fullname.required' => 'Full Name wajib diisi',
            'fullname.min' => 'Full Name minimal 5 karakter',
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email telah terdaftar',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 6 karakter',
        ]);

        // Membuat pengguna baru dengan password yang di-hash menggunakan Bcrypt
        $user = User::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'user'
        ]);

        return redirect()->route('auth')->with('success', 'Pendaftaran berhasil. Silahkan login.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    // Tambahkan metode untuk memperbarui password pengguna yang sudah ada
    public function rehashPasswords()
    {
        $users = User::all();
        foreach ($users as $user) {
            if (!Hash::needsRehash($user->password)) {
                // Password tidak di-hash dengan Bcrypt, lakukan re-hash
                $user->password = bcrypt($user->password);
                $user->save();
            }
        }
        return redirect()->route('admin')->with('success', 'Password pengguna diperbarui.');
    }
}
