

<?php $__env->startSection('navitem'); ?>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="/admin">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Prosedur</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('usercontrol')); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>User Control</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('datapengguna')); ?>">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Data Pengajuan</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('dataaplikasi')); ?>">
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
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

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($item); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php if(Session::has('success')): ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire(
                    'Sukses',
                    '<?php echo e(Session::get('success')); ?>',
                    'success'
                );
            });
        </script>
    <?php endif; ?>

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
                            <?php $__currentLoopData = $uc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($item->fullname); ?></td>
                                    <td
                                        style="<?php echo e($item->role === 'admin' ? 'color:rgb(0, 255, 0); font-weight: bold;' : ''); ?>">
                                        <?php echo e($item->role); ?>

                                    </td>
                                    <td><?php echo e($item->email); ?></td>
                                    <td>
                                        <?php if($item->role === 'user'): ?>
                                            <form onsubmit="return confirm('Yakin ingin Mengangkat USER Menjadi ADMIN ?')"
                                                class="d-inline" action="<?php echo e(route('upgrade.role', $item->id)); ?>"
                                                method="POST">
                                                <?php echo csrf_field(); ?>
                                                <input type="submit"
                                                    class="btn-sm text-decoration-none border border-warning text-warning"
                                                    value="UP">
                                            </form>
                                        <?php elseif($item->role === 'admin'): ?>
                                            <form onsubmit="return confirm('Yakin ingin Menurunkan ADMIN Menjadi USER ?')"
                                                class="d-inline" action="<?php echo e(route('downgrade.role', $item->id)); ?>"
                                                method="POST">
                                                <?php echo csrf_field(); ?>
                                                <input type="submit"
                                                    class="btn-sm text-decoration-none border border-primary text-primary"
                                                    value="DOWN">
                                            </form>
                                        <?php else: ?>
                                            <span class="text-muted">Admin</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <form onsubmit="return confirmDelete(event)"
                                            action="/usercontrol/brkhapus/<?php echo e($item->id); ?>" method="POST"
                                            class="d-inline">
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


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

<?php echo $__env->make('halaman_dashboard.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel10\project-laravel10\resources\views/user_control/index.blade.php ENDPATH**/ ?>