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
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-bold mb-0 ml-5">Data User</h4>
                </div>
                <div>
                    <a href="/tambahuc" class="text-decoration-none text-white mr-5">
                        <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                            <i class="ti-plus btn-icon-prepend"></i>Tambah User
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

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

    <div class="col-lg-12 grid-margin stretch-card mt-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">ACCOUNT TABLE</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama lengkap</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Aksi User</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($uc as $item)
                                <tr>
                                    <td>{{ $item->fullname }}</td>
                                    <td
                                        style="{{ $item->role === 'admin' ? 'color:rgb(0, 255, 0); font-weight: bold;' : '' }}">
                                        {{ $item->role }}
                                    </td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        @if ($item->role === 'user')
                                            <form onsubmit="return confirm('Yakin ingin Mengangkat USER Menjadi ADMIN ?')"
                                                class="d-inline" action="{{ route('upgrade.role', $item->id) }}"
                                                method="POST">
                                                @csrf
                                                <input type="submit"
                                                    class="btn-sm text-decoration-none border border-warning text-warning"
                                                    value="UP">
                                            </form>
                                        @elseif ($item->role === 'admin')
                                            <form onsubmit="return confirm('Yakin ingin Menurunkan ADMIN Menjadi USER ?')"
                                                class="d-inline" action="{{ route('downgrade.role', $item->id) }}"
                                                method="POST">
                                                @csrf
                                                <input type="submit"
                                                    class="btn-sm text-decoration-none border border-primary text-primary"
                                                    value="DOWN">
                                            </form>
                                        @else
                                            <span class="text-muted">Admin</span>
                                        @endif
                                    </td>
                                    <td>
                                        <form onsubmit="return confirmDelete(event)"
                                            action="/usercontrol/brkhapus/{{ $item->id }}" method="POST"
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
