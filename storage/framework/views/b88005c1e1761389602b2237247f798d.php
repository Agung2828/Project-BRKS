

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
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Tambah User</h4>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($item); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <form class="forms-sample" method="POST" action="/tambahuc" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('halaman_dashboard.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel10\project-laravel10\resources\views/user_control/tambah.blade.php ENDPATH**/ ?>