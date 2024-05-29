<?php

namespace App\Http\Controllers;

use App\Models\User; // Ganti dengan model pengguna yang sesuai


use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
        return view('pointakses/admin/index');
    }
    public function downgradeRole($id)
    {
        $user = User::findOrFail($id);

        // Pastikan hanya admin yang dapat diturunkan menjadi pengguna biasa
        if ($user->role === 'admin') {
            $user->role = 'user';
            $user->save();

            return redirect()->back()->with('success', 'Peran pengguna berhasil diturunkan menjadi user.');
        } else {
            return redirect()->back()->with('error', 'Peran pengguna sudah user.');
        }
    }
}
