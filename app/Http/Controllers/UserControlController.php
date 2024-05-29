<?php

namespace App\Http\Controllers;

use App\Mail\AuthMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserControlController extends Controller
{
    // Fungsi untuk menampilkan semua data pengguna
    function index()
    {
        $data = User::all();
        return view('user_control.index', ['uc' => $data]);
    }

    // Fungsi untuk menambahkan pengguna baru
    function tambah()
    {
        return view('user_control.tambah');
    }

    // Fungsi untuk membuat pengguna baru
    function create(Request $request)
    {
        $request->validate([
            'fullname' => 'required|min:4',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Menambahkan Hash::make untuk mengenkripsi password
        ]);

        Session::flash('success', 'User berhasil ditambahkan');

        return redirect('/usercontrol');
    }


    // Fungsi untuk mengedit data pengguna
    // function edit($id)
    // {
    //     $data = User::findOrFail($id);
    //     return view('user_control.edit', ['uc' => $data]);
    // }

    // Fungsi untuk menyimpan perubahan pada data pengguna yang diedit
    function change(Request $request)
    {
        $request->validate([
            'fullname' => 'required|min:4',
        ]);

        $user = User::findOrFail($request->id);

        $user->fullname = $request->fullname;
        $user->password = $request->password;

        $user->save();

        Session::flash('success', 'User berhasil diedit');

        return redirect('/usercontrol');
    }

    // Fungsi untuk menghapus pengguna
    function hapus(Request $request)
    {
        User::findOrFail($request->id)->delete();

        Session::flash('success', 'Data berhasil dihapus');

        return redirect('/usercontrol');
    }

    // Fungsi untuk menaikkan peran pengguna menjadi admin
    function upgradeRole(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->role = 'admin';
        $user->save();

        Session::flash('success', 'Pengguna berhasil diangkat menjadi admin');

        return redirect('/usercontrol');
    }

    // Fungsi untuk menurunkan admin menjadi pengguna biasa
    function downgradeRole(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->role = 'user';
        $user->save();

        Session::flash('success', 'Admin berhasil diturunkan menjadi pengguna biasa');

        return redirect('/usercontrol');
    }
}
