@extends('halaman_dashboard.index')
@if (Auth::user()->role === 'admin')
    @section('navitem')
        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
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
                <span>Data aplikasi</span>
            </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    @endsection
@elseif(Auth::user()->role === 'admin')
    @section('navitem')
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
            <a class="nav-link" href="/admin">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <hr class="sidebar-divider">
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Components</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="buttons.html">Buttons</a>
                    <a class="collapse-item" href="cards.html">Cards</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Utilities</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Utilities:</h6>
                    <a class="collapse-item" href="utilities-color.html">Colors</a>
                    <a class="collapse-item" href="utilities-border.html">Borders</a>
                    <a class="collapse-item" href="utilities-animation.html">Animations
                </div>
            </div>
        </li>
    @endsection
@endif

@section('main')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Edit data BRK</h1>
        <div class="card shadow mb-4">
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="forms-sample" method="POST" action="/dataaplikasi/brkedit" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <input type="hidden" name="id" value="{{ $dataaplikasi->id }}">
                            <label for="namaaplikasi">Nama Aplikasi</label>
                            <input type="text" class="form-control" id="nama_aplikasi" name="nama_aplikasi"
                                value="{{ old('nama_aplikasi', $dataaplikasi->namaaplikasi) }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Edit</button>
                        <a href="/dataaplikasi" class="btn btn-light">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
