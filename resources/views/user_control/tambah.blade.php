@extends('halaman_dashboard.index')

@section('navitem')
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
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
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
@endsection
@section('main')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Tambah User</h4>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="forms-sample" method="POST" action="/tambahuc" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama lengkap</label>
                        <input type="text" class="form-control" id="nama" name="fullname" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail3" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Tambah</button>
                    <a href="/usercontrol" class="btn btn-light">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
