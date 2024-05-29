@extends('halaman_dashboard.index')
@if (Auth::user()->role === 'user')
    @section('navitem')
        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="/user">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Prosedur</span>
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
                <span>Prosedur</span>
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
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Pengajuan</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                {{-- new --}}

                <a href="/datapelanggan/brktambah" class="btn-sm btn-primary text-decoration-none">Tambah Pengajuan</a>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (Session::has('success'))
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire(
                                'Sukses',
                                '{{ Session::get('success') }}',
                                'success'
                            );
                        });
                    </script>
                @endif

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Jenis Layanan</th>
                                <th>Nama</th>
                                <th>Nama Aplikasi</th>
                                <th>Ip App</th>
                                <th>Platform</th>
                                <th>Jenis perbaikan/update</th>
                                <th>Tanggal Permohonan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->JenisLayanan }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->namaaplikasi }}</td>
                                    <td>{{ $item->IpApp }}</td>
                                    <td>{{ $item->platform }}</td>
                                    <td>{{ $item->Jenis }}</td>
                                    <td>{{ $item->tanggalpermohonan }}</td>
                                    <td>
                                        <a href="/datapelanggan/brkedit/{{ $item->id }}"
                                            class="btn btn-sm btn-primary">Edit</a>
                                        <form onsubmit="return confirmDelete(event)"
                                            action="/datapelanggan/brkhapus/{{ $item->id }}" method="POST"
                                            action="/datapengguna/brkhapus/{{ $item->id }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    function confirmDelete(event) {
        event.preventDefault(); // Menghentikan form dari pengiriman langsung

        Swal.fire({
            title: 'Yakin Hapus Data?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                event.target.submit(); // Melanjutkan pengiriman form
            }
        });
    }
</script>
