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

        <!-- Heading -->
        <!--div class="sidebar-heading">
                                                                                                                                                        Interface
                                                                                                                                                    </div-->

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
                    @endsection
@endif
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
                <form class="forms-sample" method="POST" action="/datapengguna/brktambah" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label>Jenis Layanan</label><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="update_data" name="jenis_layanan[]"
                                    value="update data">
                                <label class="form-check-label" for="update data">Update Data</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="perbaikan_aplikasi"
                                    name="jenis_layanan[]" value="Perbaikan Aplikasi">
                                <label class="form-check-label" for="perbaikan_aplikasi">Perbaikan Aplikasi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="aplikasi_baru" name="jenis_layanan[]"
                                    value="Aplikasi_baru">
                                <label class="form-check-label" for="aplikasi_baru">Aplikasi Baru</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="migrasi" name="jenis_layanan[]"
                                    value="Migrasi">
                                <label class="form-check-label" for="migrasi">Migrasi Aplikasi Baru</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="cleansing" name="jenis_layanan[]"
                                    value="cleansing">
                                <label class="form-check-label" for="cleansing">Cleansing/backup</label>
                            </div>
                        </div>

                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_aplikasi">Nama Aplikasi</label>
                        <select class="form-control" id="namaaplikasi" name="nama_aplikasi" required>
                            <option value="" disabled selected style="color: rgba(0,0,0,0.5);">Pilih Nama Aplikasi
                            </option>
                            @foreach ($aplikasi as $item)
                                <option value="{{ $item->namaaplikasi }}">{{ $item->namaaplikasi }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="IpApp">IpApp</label>
                        <input type="text" class="form-control" id="IpApp" name="IpApp" required>
                    </div>
                    <div class="form-group">
                        <label for="platform">Platform/OS</label>
                        <input type="text" class="form-control" id="platform" name="platform" required>
                    </div>
                    <div class="form-group">
                        <label for="kebutuhan">Kebutuhan</label>
                        <textarea class="form-control" id="kebutuhan" name="kebutuhan" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Jenis">Jenis perbaikan/update</label>
                        <input type="text" class="form-control" id="Jenis" name="jenis" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggalpermohonan">Tanggal Permohonan</label>
                        <input type="date" class="form-control" id="tanggalpermohonan" name="tanggalpermohonan">
                    </div>
                    <div class="form-group">
                        <label for="Downtime">DownTime</label>
                        <input type="date" class="form-control" id="Downtime" name="Downtime">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Tambah</button>
                    <a href="/datapengguna" class="btn btn-light">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
