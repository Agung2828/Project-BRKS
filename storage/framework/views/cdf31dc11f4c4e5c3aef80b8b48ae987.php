

<?php $__env->startSection('navitem'); ?>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Tambah data BRK</h4>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($item); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <form class="forms-sample" method="POST" action="/dataaplikasi/brktambah" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="nama_aplikasi">Nama Aplikasi</label>
                        <input type="text" class="form-control" id="nama_aplikasi" name="nama_aplikasi" required>
                    </div>
                    <!-- Lanjutkan dengan elemen formulir lainnya -->
                    <button type="submit" class="btn btn-primary mr-2">Tambah Data</button>
                    <a href="<?php echo e(route('dataaplikasi')); ?>" class="btn btn-light">Batal</a>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('halaman_dashboard.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel10\project-laravel10\resources\views/data_aplikasi/tambah.blade.php ENDPATH**/ ?>