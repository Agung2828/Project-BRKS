<?php

namespace App\Http\Controllers;

use App\Models\dataaplikasi;
use App\Models\datapelanggan as Modelsdatapelanggan;
use App\Models\datapengguna;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class Datapelanggan extends Controller
{
    function index()
    {
        $data = Modelsdatapelanggan::where('user_id', auth()->user()->id)->get();
        return view('data_pelanggan.index', ['data' => $data]);
    }

    function tambah()
    {
        $aplikasi = dataaplikasi::all();
        return view('data_pelanggan.tambah', compact('aplikasi'));
    }

    function edit($id)
    {
        $data = Modelsdatapelanggan::find($id);
        $aplikasi = dataaplikasi::all();
        return view('data_pelanggan.edit', ['data' => $data, 'aplikasi' => $aplikasi]);
    }

    function hapus(Request $request)
    {
        Modelsdatapelanggan::where('id', $request->id)->delete();
        Session::flash('success', 'Berhasil Hapus Data');
        $data = Modelsdatapelanggan::all();
        return view('data_pelanggan.index', ['data' => $data]);
    }
    function create(Request $request)
    {
        $request->validate([
            'jenis_layanan' => 'required|array',
            'jenis_layanan.*' => 'required',
            'nama' => 'required',
            'nama_aplikasi' => 'required',
            'IpApp' => 'required',
            'platform' => 'required',
            'jenis' => 'required',
            'tanggalpermohonan' => 'required',
        ], [
            'jenis_layanan.required' => 'Jenis Layanan Wajib Di isi',
            'jenis_layanan.*.required' => 'Setiap jenis layanan harus dipilih',
            'nama.required' => 'Nama Wajib Di isi',
            'nama_aplikasi.required' => 'nama aplikasi Wajib Di isi',
            'IpApp.required' => 'IpApp Wajib Di isi',
            'platform.required' => 'Platform Wajib Di isi',
            'jenis.required' => 'Jenis Wajib Di isi',
            'tanggalpermohonan.required' => 'Tanggal Wajib Di isi'
        ]);

        // Ambil nilai checkbox dari permintaan (berupa array)
        $jenisLayanan = $request->input('jenis_layanan');

        // Ubah array nilai checkbox menjadi string untuk disimpan di database
        $jenisLayananString = implode(',', $jenisLayanan);

        // Simpan data ke database
        Modelsdatapelanggan::insert([
            'jenisLayanan' => $jenisLayananString,
            'nama' => $request->nama,
            'namaaplikasi' => $request->nama_aplikasi,
            'IpApp' => $request->IpApp,
            'platform' => $request->platform,
            'jenis' => $request->jenis,
            'tanggalpermohonan' => $request->tanggalpermohonan,
            'user_id' => auth()->user()->id
        ]);

        datapengguna::insert([
            'JenisLayanan' => $jenisLayananString,
            'nama' => $request->nama,
            'namaaplikasi' => $request->nama_aplikasi,
            'IpApp' => $request->IpApp,
            'platform' => $request->platform,
            'jenis' => $request->jenis,
            'tanggalpermohonan' => $request->tanggalpermohonan,
        ]);

        Session::flash('success', 'Data berhasil ditambahkan');

        return redirect('/datapelanggan')->with('success', 'Berhasil Menambahkan Data');
    }

    function change(Request $request)
    {
        $request->validate([
            'jenisLayanan' => 'required',
            'nama' => 'required',
            'nama_aplikasi' => 'required',
            'IpApp' => 'required',
            'platform' => 'required',
            'jenis' => 'required',
            'tanggalpermohonan' => 'required',
        ], [
            'JenisLayanan.required' => 'JenisLayanan Wajib Di isi',
            'nama.required' => 'Nama Wajib Di isi',
            'nama_aplikasi.required' => 'namaaplikasi Wajib Di isi',
            'IpApp.required' => 'IpApp Wajib Di isi',
            'platform.required' => 'Platform Wajib Di isi',
            'jenis.required' => 'Jenis Wajib Di isi',
            'tanggalpermohonan' => 'Tanggal Wajib Di isi',
        ]);

        $datapelanggan = Modelsdatapelanggan::find($request->id);

        // Ambil nilai checkbox dari permintaan (berupa array)
        // $jenisLayanan = $request->input('jenis_layanan');

        // Ubah array nilai checkbox menjadi string untuk disimpan di database
        // $jenisLayananString = implode(',', $jenisLayanan);

        $datapelanggan->jenisLayanan = $request->jenisLayanan;
        $datapelanggan->nama = $request->nama;
        $datapelanggan->namaaplikasi = $request->nama_aplikasi;
        $datapelanggan->IpApp = $request->IpApp;
        $datapelanggan->platform = $request->platform;
        $datapelanggan->Jenis = $request->jenis;
        $datapelanggan->tanggalpermohonan = $request->tanggalpermohonan;
        $datapelanggan->save();

        Session::flash('success', 'Berhasil Mengubah Data');

        return redirect('/datapelanggan');
    }
}
