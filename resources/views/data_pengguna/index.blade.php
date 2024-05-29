@extends('halaman_dashboard.index')

@if (Auth::user()->role === 'admin')
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
@endif
@section('main')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Pengajuan</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <!--h6 class="m-0 font-weight-bold text-primary mb-4">DataTables Example</h6-->
                {{-- new --}}

                <a href="/datapengguna/brktambah" class="btn-sm btn-primary text-decoration-none">Tambah data</a>

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
                                <th>Nama</th>
                                <th>Nama Aplikasi</th>
                                <th>Jenis Layanan</th>
                                <th>Ip App</th>
                                <th>Platform/OS</th>
                                <th>kebutuhan</th>
                                <th>Jenis perbaikan/update</th>
                                <th>Tanggal Permohonan</th>
                                <th>DownTime</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->namaaplikasi }}</td>
                                    <td>{{ $item->JenisLayanan }}</td>
                                    <td>{{ $item->IpApp }}</td>
                                    <td>{{ $item->platform }}</td>
                                    <td>{{ $item->kebutuhan }}</td>
                                    <td>{{ $item->Jenis }}</td>
                                    <td>{{ $item->tanggalpermohonan }}</td>
                                    <td>{{ $item->Downtime }}</td>
                                    <td>
                                        <a href="/datapengguna/brkedit/{{ $item->id }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                        <form onsubmit="return confirmDelete(event)"
                                            action="/datapengguna/brkhapus/{{ $item->id }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                        {{-- <a href="{{ route('modal', ['id' => $item->id]) }}" target="_blank" class="btn btn-sm btn-primary">Cetak <i class="fas fa-print"></i></a> --}}
                                        <button id="btncetak" type="button" class="btn btn-primary"
                                            data-id="{{ $item->id }}" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                            Cetak
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </div>

    <style>
        /* Animasi berputar */
        .rotate {
            transition: transform 0.9s;
        }

        .rotate:hover {
            transform: rotate(360deg);
        }
    </style>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Isi Data</h1>
                    <button type="button" class="btn-close rotate" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-x" viewBox="0 0 16 16">
                            <path
                                d="M4.354 4.354a.5.5 0 0 1 .708 0L8 7.293l3.938-3.939a.5.5 0 1 1 .708.708L8.707 8l3.939 3.938a.5.5 0 1 1-.708.708L8 8.707l-3.938 3.939a.5.5 0 1 1-.708-.708L7.293 8 3.354 4.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </button>
                </div>
                <!-- modal.blade.php -->
                <div class="modal-body">
                    <form action="{{ route('cetak') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="hidden" name="id" id="modal-input-id">
                            <label for="tanggal_ver_security" class="col-form-label">Tanggal
                                Ver Security:</label>
                            <input type="date" class="form-control" name="tanggal_ver_security"
                                id="tanggal_ver_security">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_pengajuan" class="col-form-label">Tanggal
                                Pengajuan:</label>
                            <input type="date" class="form-control" name="tanggal_pengajuan" id="tanggal_pengajuan">
                        </div>
                        <div class="mb-3">
                            <label for="number-input-prf" class="col-form-label">No
                                PRF/Tic/CR:</label>
                            <input type="number" class="form-control" name="no_prf" id="number-input-prf">
                        </div>
                        <div class="mb-3">
                            <label for="date-input-uat" class="col-form-label">Tanggal
                                UAT:</label>
                            <input type="date" class="form-control" name="tanggal_uat" id="datetime-input-uat">
                        </div>
                        <div class="mb-3">
                            <label for="date-input-prf-ticket" class="col-form-label">Tanggal
                                PRF/Ticket:</label>
                            <input type="date" class="form-control" name="tanggal_prf_ticket"
                                id="date-input-prf-ticket">
                        </div>
                        <div class="mb-3 row">
                            <label for="name-input-mengetahuiatas" class="col-sm-3 col-form-label">Mengetahui:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="mengetahuiatas"
                                    id="name-input-mengetahuiatas">
                            </div>
                            <div class="col-sm-3">
                                <label for="date-input-mengetahuiatas" class="col-form-label">Tanggal
                                    Mengetahui:</label>
                                <input type="date" class="form-control" name="tanggal_mengetahuiatas"
                                    id="date-input-mengetahuiatas">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="name-input-menyetujui" class="col-sm-3 col-form-label">Menyetujui:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="menyetujui" id="name-input-menyetujui">
                            </div>
                            <div class="col-sm-3">
                                <label for="date-input-tanggal_menyetujui" class="col-form-label">Tanggal
                                    Menyetujui:</label>
                                <input type="date" class="form-control" name="tanggal_menyetujui"
                                    id="date-input-tanggal_menyetujui">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="name-input-petugas" class="col-sm-3 col-form-label">Petugas:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="petugas" id="name-input-petugas">
                            </div>
                            <div class="col-sm-3">
                                <label for="date-input-petugas" class="col-form-label">Tanggal
                                    Petugas:</label>
                                <input type="date" class="form-control" name="tanggal_petugas"
                                    id="date-input-petugas">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="name-input-mengetahuibahwa" class="col-sm-3 col-form-label">Mengetahui:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="mengetahuibahwa"
                                    id="name-input-mengetahuinbahwa">
                            </div>
                            <div class="col-sm-3">
                                <label for="date-input-mengetahuibahwa" class="col-form-label">Tanggal
                                    Mengetahui:</label>
                                <input type="date" class="form-control" name="tanggal_mengetahuibahwa"
                                    id="date-input-mengetahuibahwa">
                            </div>
                        </div>
                        <button type="submit" target="_blank" class="btn btn-primary">Cetak</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- /.container-fluid -->
@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
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
    <script>
        // Tangani peristiwa klik tombol cetak
        document.querySelectorAll('#btncetak').forEach(button => {
            button.addEventListener('click', function() {
                // Ambil id dari data-id atribut tombol cetak yang diklik
                var id = this.getAttribute('data-id');
                console.log(id);
                // Masukkan id ke dalam input tersembunyi dalam formulir modal
                document.querySelector('#modal-input-id').value = id;
            });
        });
    </script>
@endpush
