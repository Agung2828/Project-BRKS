<?php

namespace App\Http\Controllers;

use App\Models\dataaplikasi as Modelsdataaplikasi;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class DataAplikasi extends Controller
{
    function index()
    {
        $data = Modelsdataaplikasi::all();
        return view('data_aplikasi.index', ['data' => $data]);
    }

    function tambah()
    {
        $data = Modelsdataaplikasi::all();
        return view('data_aplikasi.tambah', ['data' => $data]);
    }

    function edit($id)
    {
        $data = Modelsdataaplikasi::find($id);
        return view('data_aplikasi.edit', ['dataaplikasi' => $data]);
    }

    function hapus(Request $request)
    {
        Modelsdataaplikasi::where('id', $request->id)->delete();
        Session::flash('success', 'Berhasil Hapus Data');
        return back();
    }

    function modal($id)
    {
        $dataaplikasi = Modelsdataaplikasi::find($id);
        return view('nama_view', compact('dataaplikasi'));
    }

    // function modal2($id)
    // {
    //     $dataaplikasi = Modelsdataaplikasi::find($id);
    //     return view('nama_view', compact('dataaplikasi'));
    // }

    function create(Request $request)
    {
        $request->validate([
            'nama_aplikasi' => 'required',
        ], [
            'nama_aplikasi.required' => 'nama aplikasi Wajib Di isi',
        ]);

        Modelsdataaplikasi::insert([
            'namaaplikasi' => $request->nama_aplikasi,
        ]);

        Session::flash('success', 'Data berhasil ditambahkan');

        return redirect('/dataaplikasi')->with('success', 'Berhasil Menambahkan Data');
    }

    function change(Request $request)
    {
        $request->validate([
            'nama_aplikasi' => 'required',
        ], [
            'nama_aplikasi.required' => 'Nama Aplikasi Wajib Di isi',
        ]);

        $dataaplikasi = Modelsdataaplikasi::find($request->id);
        $dataaplikasi->namaaplikasi = $request->nama_aplikasi;
        $dataaplikasi->save();

        Session::flash('success', 'Berhasil Mengubah Data');

        return redirect('/dataaplikasi');
    }
}
