@extends('halaman_dashboard.index')
@if (Auth::user()->role === 'user')
    @section('navitem')
        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="/user">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('datapelanggan') }}">
                <i class="fas fa-fw fa-file-alt"></i>
                <span>Pengajuan</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    @endsection
@elseif(Auth::user()->role === 'user')
    @section('navitem')
        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="/user">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- Divider -->
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
                <form class="forms-sample" method="POST" action="/datapelanggan/brktambah" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label>Jenis Layanan</label><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="update_data" name="jenis_layanan[]"
                                    value="update data">
                                <label class="form-check-label" for="update data">update data</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="perbaikan_aplikasi"
                                    name="jenis_layanan[]" value="Perbaikan Aplikasi">
                                <label class="form-check-label" for="perbaikan_aplikasi">Perbaikan Aplikasi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="aplikasi_baru" name="jenis_layanan[]"
                                    value="Aplikasi_baru">
                                <label class="form-check-label" for="aplikasi_baru">Aplikasi baru</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="migrasi" name="jenis_layanan[]"
                                    value="Migrasi">
                                <label class="form-check-label" for="migrasi">Migrasi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="cleansing" name="jenis_layanan[]"
                                    value="cleansing">
                                <label class="form-check-label" for="cleansing">cleansing</label>
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
                            <option value="AMARIS">AMARIS</option>
                            <option value="ANTASENA">ANTASENA</option>
                            <option value="API">FMIS</option>
                            <option value="Bank Vision">Bank Vision</option>
                            <option value="BI FAST">BI FAST</option>
                            <option value="BI FAST REPORT">BI FAST REPORT</option>
                            <option value="BP Jamsostek<">BP Jamsostek</option>
                            <option value="BRK LINK">BRK LINK</option>
                            <option value="CMS">CMS</option>
                            <option value="DMS">DMS</option>
                            <option value="EFOS">EFOS</option>
                            <option value="FLPP">FLPP</option>
                            <option value="GO AML">GO AML</option>
                            <option value="HIRIS">HIRIS</option>
                            <option value="IKP">IKP</option>
                            <option value="Kasda Online">Kasda Online</option>
                            <option value="KUR">KUR</option>
                            <option value="KUR iB">KUR iB</option>
                            <option value="MlS">MlS</option>
                            <option value="Naskah Dinas">Naskah Dinas</option>
                            <option value="Papan Nisbah & KURS">Papan Nisbah & KURS</option>
                            <option value="Payment System">Payment System</option>
                            <option value="Payroll Online">Payroll Online</option>
                            <option value="PBB Kolektif">PBB Kolektif</option>
                            <option value="PRF">PRF</option>
                            <option value="Priority Banking">Priority Banking</option>
                            <option value="Program Budaya">Program Budaya</option>
                            <option value="QACA">QACA</option>
                            <option value="QRIS">QRIS</option>
                            <option value="Rekon ATM Bersama">Rekon ATM Bersama</option>
                            <option value="Rekon Debit Issuer">Rekon Debit Issuer</option>
                            <option value="Rekon IBFT">Rekon IBFT</option>
                            <option value="SDB">SDB</option>
                            <option value="SIAP">SIAP</option>
                            <option value="SIKP">SIKP</option>
                            <option value="SIDP">SIDP</option>
                            <option value="SIPENA">SIPENA</option>
                            <option value="SIPERU">SIPERU</option>
                            <option value="SKPD ONLINE">SKPD ONLINE</option>
                            <option value="SPAK">SPAK</option>
                            <option value="SPAN">SPAN</option>
                            <option value="Web CIF CS">Web CIF CS</option>
                            <option value="Website BRKS">Website BRKS</option>
                            <option value="Whistleblowing">Whistleblowing</option>
                            <!-- tambahkan opsi lain sesuai kebutuhan -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="IpApp">IpApp</label>
                        <input type="text" class="form-control" id="IpApp" name="IpApp" required>
                    </div>
                    <div class="form-group">
                        <label for="platform">platform</label>
                        <input type="text" class="form-control" id="platform" name="platform" required>
                    </div>
                    <div class="form-group">
                        <label for="Jenis">Jenis perbaikan/update</label>
                        <input type="text" class="form-control" id="Jenis" name="jenis" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggalpermohonan">Tanggal Permohonan</label>
                        <input type="datetime-local" class="form-control" id="tanggalpermohonan"
                            name="tanggalpermohonan" required>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Tambah</button>
                    <a href="/datapelanggan" class="btn btn-light">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
