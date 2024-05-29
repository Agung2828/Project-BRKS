<?php

namespace App\Http\Controllers;

use App\Models\dataaplikasi;
use App\Models\datapengguna as Modelsdatapengguna;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class DataPengguna extends Controller
{
    function index()
    {
        $data = ModelsDataPengguna::all();
        return view('data_pengguna.index', ['data' => $data]);
    }
    function tambah()
    {
        $aplikasi = dataaplikasi::all();
        // dd($aplikasi);
        return view('data_pengguna.tambah', compact('aplikasi'));
    }
    function edit($id)
    {
        $data = Modelsdatapengguna::find($id);
        $aplikasi = dataaplikasi::all();
        return view('data_pengguna.edit', ['data' => $data, 'aplikasi' => $aplikasi]);
    }
    function hapus(Request $request)
    {
        Modelsdatapengguna::where('id', $request->id)->delete();

        Session::flash('success', 'Berhasil Hapus Data');

        return back();
    }
    function cetak(Request $request)
    {
        // dd($request);
        // Mendapatkan nilai yang diperlukan dari permintaan
        $id = $request->input('id');
        $tanggal_pengajuan = $request->input('tanggal_pengajuan');
        $tanggal_uat = $request->input('tanggal_uat');
        $no_prf = $request->input('no_prf');
        $tanggal_ver_security = $request->input('tanggal_ver_security');
        $tanggal_prf_ticket = $request->input('tanggal_prf_ticket');
        $ip_app = $request->input('ip_app');
        $platform = $request->input('platform');
        $jenis = $request->input('jenis');
        $nama = $request->input('nama');
        $tanggal_mengetahuiatas = $request->input('tanggal_mengetahuiatas');
        $mengetahuiatas = $request->input("mengetahuiatas");
        $menyetujui = $request->input("menyetujui");
        $tanggal_menyetujui = $request->input("tanggal_menyetujui");
        $petugas = $request->input("petugas");
        $tanggal_petugas = $request->input("tanggal_petugas");
        $mengetahuibahwa = $request->input("mengetahuibahwa");
        $tanggal_mengetahuibahwa = $request->input("tanggal_mengetahuibahwa");
        $tanggalpermohonan = $request->input("tanggalpermohonan");

        // Dan nilai lainnya yang Anda perlukan

        $datapengguna = Modelsdatapengguna::find($id);

        // Mengirimkan data ke tampilan
        return view('data_pengguna.cetak', compact(
            'tanggal_pengajuan',
            'tanggal_uat',
            'no_prf',
            'tanggal_ver_security',
            'tanggal_prf_ticket',
            'ip_app',
            'platform',
            'jenis',
            'nama',
            'tanggal_mengetahuiatas',
            'mengetahuiatas',
            'menyetujui',
            'petugas',
            'tanggal_petugas',
            'tanggal_menyetujui',
            'mengetahuibahwa',
            'tanggal_mengetahuibahwa',
            'datapengguna',
            'tanggalpermohonan'
        ));
    }
    function modal($id)
    {
        $data = ModelsDataPengguna::find($id); // Menggunakan find untuk mencari data berdasarkan ID
        return view('data_pengguna.modal', compact('data'));
    }

    // new
    function create(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nama_aplikasi' => 'required',
            'jenis_layanan' => 'required',
            'IpApp' => 'required',
            'platform' => 'required',
            'kebutuhan' => 'required',
            'jenis' => 'required',
            'tanggalpermohonan' => 'required',
        ], [
            'nama.required' => 'Nama Wajib Di isi',
            'nama_aplikasi.required' => 'nama aplikasi Wajib Di isi',
            'jenis_layanan.required' => 'jenislayanan Wajib Di isi',
            'IpApp.required' => 'IpApp Wajib Di isi',
            'platform.required' => 'platform Wajib Di isi',
            'kebutuhan.required' => 'kebutuhan Wajib Di isi',
            'jenis.required' => 'jenis Wajib Di isi',
            'tanggalpermohonan' => 'Tanggal Wajib Di isi',
        ]);

        // Ambil nilai checkbox dari permintaan (berupa array)
        $jenisLayanan = $request->input('jenis_layanan');

        // Ubah array nilai checkbox menjadi string untuk disimpan di database
        $jenisLayananString = implode(',', $jenisLayanan);

        Modelsdatapengguna::insert([
            'nama' => $request->nama,
            'namaaplikasi' => $request->nama_aplikasi,
            'jenisLayanan' => $jenisLayananString,
            'IpApp' => $request->IpApp,
            'platform' => $request->platform,
            'kebutuhan' => $request->kebutuhan,
            'jenis' => $request->jenis,
            'tanggalpermohonan' => $request->tanggalpermohonan,
            'Downtime' => $request->Downtime,

        ]);

        Session::flash('success', 'Data berhasil ditambahkan');

        return redirect('/datapengguna')->with('success', 'Berhasil Menambahkan Data');
    }
    function change(Request $request)
    {
        // dd($request);
        $request->validate([
            'nama' => 'required|min:3',
            'nama_aplikasi' => 'required',
            'jenisLayanan' => 'required',
            'IpApp' => 'required|min:8|max:40',
            'platform' => 'required',
            'kebutuhan' => 'required',
            'jenis' => 'required',
            // 'tanggalpermohonan' => 'required',
        ], [
            'nama.required' => 'Nama Wajib Di isi',
            'nama.min' => 'Bidang nama minimal harus 3 karakter.',
            'nama_aplikasi.required' => 'Nama Aplikasi Wajib Di isi',
            'JenisLayanan.required' => 'JenisLayanan Wajib Di isi',
            'IpApp.required' => 'IpApp Wajib Di isi',
            'IpApp.max' => 'IpApp max 40 Digit',
            'IpApp.min' => 'IpApp min 40 Digit',
            'platform.required' => 'platform Wajib Di isi',
            'kebutuhan.required' => 'kebutuhan Wajib Di isi',
            'Jenis.required' => 'Jenis Wajib Di isi',
            // 'tanggalpermohonan' => 'Tanggal Wajib Di isi',
        ]);

        $datapengguna = Modelsdatapengguna::find($request->id);

        $datapengguna->nama = $request->nama;
        $datapengguna->namaaplikasi = $request->nama_aplikasi;
        $datapengguna->jenisLayanan = $request->jenisLayanan;
        $datapengguna->IpApp = $request->IpApp;
        $datapengguna->platform = $request->platform;
        $datapengguna->kebutuhan = $request->kebutuhan;
        $datapengguna->jenis = $request->jenis;
        // $datapengguna->tanggalpermohonan = $request->tanggalpermohonan;
        $datapengguna->Downtime = $request->Downtime;
        $datapengguna->save();

        Session::flash('success', 'Berhasil Mengubah Data');

        return redirect('/datapengguna');
    }
}
