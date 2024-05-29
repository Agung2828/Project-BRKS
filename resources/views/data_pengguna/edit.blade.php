@extends('halaman_dashboard.index')

@if (Auth::user()->role === 'admin')
    @section('navitem')
        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="/admin">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('usercontrol') }}">
                <i class="fas fa-fw fa-users"></i>
                <span>User Control</span>
            </a>
        </li>

        <!-- Nav Item - Data Pengajuan -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('datapengguna') }}">
                <i class="fas fa-fw fa-file-alt"></i>
                <span>Data Pengajuan</span>
            </a>
        </li>

        <!-- Nav Item - Data Aplikasi -->
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
@elseif(Auth::user()->role === 'admin')
    @section('navitem')
        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="/admin">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Pages Collapse Menu -->
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

        <!-- Nav Item - Utilities Collapse Menu -->
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
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
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
                {{-- Letakkan dd() di sini untuk melakukan debugging --}}

                <form class="forms-sample" method="POST" action="/datapengguna/brkedit" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <input type="hidden" name="id" value="{{ $data->id }}">
                            <label>Jenis Layanan</label><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="update_data" name="jenisLayanan"
                                    value="update data">
                                <label class="form-check-label" for="update data">update data</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="perbaikan_aplikasi" name="jenisLayanan"
                                    value="Perbaikan Aplikasi">
                                <label class="form-check-label" for="perbaikan_aplikasi">Perbaikan Aplikasi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="aplikasi_baru" name="jenisLayanan"
                                    value="Aplikasi_baru">
                                <label class="form-check-label" for="aplikasi_baru">Aplikasi baru</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="migrasi" name="jenisLayanan"
                                    value="Migrasi">
                                <label class="form-check-label" for="migrasi">Migrasi aplikasi baru</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="cleansing" name="jenisLayanan"
                                    value="cleansing">
                                <label class="form-check-label" for="cleansing">cleansing</label>
                            </div>
                        </div>

                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="{{ old('nama', $data->nama) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_aplikasi">Nama Aplikasi</label>
                        <select class="form-control" id="namaaplikasi" name="nama_aplikasi" required>
                            <option value="" disabled selected style="color: rgba(0,0,0,0.5);">Pilih Nama Aplikasi
                            </option>
                            @foreach ($aplikasi as $item)
                                <option value="{{ $item->namaaplikasi }}"
                                    {{ old('nama_aplikasi', $data->namaaplikasi) == $item->namaaplikasi ? 'selected' : '' }}>
                                    {{ $item->namaaplikasi }}
                                </option>
                            @endforeach
                        </select>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="IpApp">IpApp</label>
                        <input type="text" class="form-control" id="IpApp" name="IpApp"
                            value="{{ old('IpApp', $data->IpApp) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="platform">Platform/OS</label>
                        <input type="text" class="form-control" id="platform" name="platform"
                            value="{{ old('platform', $data->platform) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="kebutuhan">Kebutuhan</label>
                        <textarea class="form-control" id="kebutuhan" name="kebutuhan" rows="3" required>{{ old('kebutuhan', $data->kebutuhan) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="Jenis">Jenis perbaikan/update</label>
                        <input type="text" class="form-control" id="Jenis" name="jenis"
                            value="{{ old('Jenis', $data->Jenis) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggalpermohonan">Tanggal Permohonan</label>
                        <input type="date" class="form-control" id="tanggalpermohonan" name="tanggalpermohonan"
                            value="{{ old('tanggalpermohonan', \Carbon\Carbon::parse($data->Downtime)->format('Y-m-d\TH:i')) }}">
                    </div>
                    <div class="form-group">
                        <label for="Downtime">DownTime</label>
                        <input type="date" class="form-control" id="Downtime" name="Downtime"
                            value="{{ old('Downtime', \Carbon\Carbon::parse($data->Downtime)->format('Y-m-d\TH:i')) }}">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Tambah</button>
                    <a href="/datapengguna" class="btn btn-light">Kembali</a>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
