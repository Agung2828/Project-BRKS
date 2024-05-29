@extends('halaman_dashboard.index')
@section('navitem')
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    {{-- <li class="nav-item active">
        <a class="nav-link" href="/admin">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Prosedur</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('usercontrol') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>User Control</span>
        </a>
    </li>
 --}}

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
    <!--Begin Page Content-->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

        <!-- Content Row -->
        <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-20 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    {{ Auth::user()->email }}</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ Auth::user()->role }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <!--div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                                <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                                                <div class="dropdown no-arrow">
                                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                    </a>
                                                    <!--div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                         aria-labelledby="dropdownMenuLink">
                                                        <div class="dropdown-header">Dropdown Header:</div>
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card Body -->
                    <div class="card-body">
                        <!-- Proses Pengajuan -->
                        <h2>Prosedur Pengajuan</h2>
                        <hr size="2px" color="yellow" width="20%" align="left">
                        <p style="color: blue;">Prosedur Permohonan Pengajuan:</p>
                        <ol>
                            <li>Pemohon terlebih dahulu mengisi form Pengajuan di Halaman Pengajuan.</li>
                            <li>Formulir permohonan pengajuan dan lampiran formulir dikirimkan melalui System Ticketing
                                Websupport.</li>
                            <li>Konfirmasi balasan permohonan pengajuan subdomain website (disetujui/ditolak) akan
                                disampaikan oleh Websupport – Bidang Humas BRK kepada pihak pemohon.</li>
                            <li>Pengajuan yang disetujui oleh Bidang Humas BRK, akan ditindaklanjuti pembuatannya oleh Badan
                                Sistem Informasi (BSI), setelah proses pembuatan selesai akan diserahterimakan oleh
                                Websupport – Bidang Humas BRK kepada pihak pemohon.</li>
                            <li>Layanan permohonan pengajuan subdomain website dilayani pada hari kerja (Senin – Jum’at,
                                pukul 08.00 – 16.00 WIB).</li>
                        </ol>

                        <!-- Syarat dan Ketentuan -->
                        <h2>Syarat dan Ketentuan</h2>
                        <hr size="2px" color="yellow" width="22%" align="left">
                        <p>Layanan Pengajuan Subdomain Website semula dapat diajukan secara langsung kepada ITSupport BRK
                            Syariah, namun untuk menjaga standarisasi perusahaan di lingkungan BRK Syariah maka nama
                            subdomain yang diajukan harus mendapat persetujuan dari Bidang Humas BRK.</p>
                        <p style="color: blue;">Siapa yang dapat mengajukan?</p>
                        <ul>
                            <li>Unit Organisasi/Kerja di Bank Riau Kepri (BRK), yakni Perusahaan, Fakultas, Unit Bisnis, dan
                                Unit Khusus dapat mengajukan permohonan.</li>
                        </ul>

                        <!-- Ketentuan standar konten dan desain tampilan visual website -->
                        <h2>Ketentuan standar konten dan desain tampilan visual website</h2>
                        <hr size="2px" color="yellow" width="22%" align="left">
                        <ol>
                            <li>Setiap halaman website harus memiliki navigasi yang jelas.</li>
                            <li>Konten harus relevan dan mudah dipahami oleh pengguna.</li>
                            <li>Desain visual harus responsif untuk berbagai ukuran layar perangkat.</li>
                            <li>Penggunaan warna, font, dan elemen desain lainnya harus konsisten.</li>
                            <li>Menghindari penggunaan konten yang melanggar hak cipta atau kebijakan perusahaan.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /.container-fluid -->
@endsection
