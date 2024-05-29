@extends('halaman_dashboard.index')

@section('navitem')
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/admin">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Prosedur</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('usercontrol') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>User Control</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('datapengguna') }}">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Data Pengajuan</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dataaplikasi') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Data Aplikasi</span>
        </a>
    </li>
@endsection

@section('main')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Tambah data BRK</h4>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="forms-sample" method="POST" action="/dataaplikasi/brktambah" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_aplikasi">Nama Aplikasi</label>
                        <input type="text" class="form-control" id="nama_aplikasi" name="nama_aplikasi" required>
                    </div>
                    <!-- Lanjutkan dengan elemen formulir lainnya -->
                    <button type="submit" class="btn btn-primary mr-2">Tambah Data</button>
                    <a href="{{ route('dataaplikasi') }}" class="btn btn-light">Batal</a>
                </form>
            </div>
        </div>
    </div>
@endsection
