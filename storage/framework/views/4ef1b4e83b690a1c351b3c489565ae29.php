
<?php if(Auth::user()->role === 'admin'): ?>
    <?php $__env->startSection('navitem'); ?>
        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
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
                <span>Data aplikasi</span>
            </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    <?php $__env->stopSection(); ?>
<?php elseif(Auth::user()->role === 'admin'): ?>
    <?php $__env->startSection('navitem'); ?>
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
            <a class="nav-link" href="/admin">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
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
    <?php $__env->stopSection(); ?>
<?php endif; ?>
<?php $__env->startSection('main'); ?>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Edit User</h4>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <form method="POST" action="<?php echo e(route('usercontrol.update', $user->id)); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="nama">Nama lengkap</label>
                        <input type="text" class="form-control" id="nama" name="fullname"
                            value="<?php echo e(old('fullname', $user->fullname)); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" name="email"
                            value="<?php echo e(old('email', $user->email)); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword3">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword3" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Edit</button>
                    <a href="<?php echo e(route('usercontrol')); ?>" class="btn btn-light">Kembali</a>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('halaman_dashboard.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel10\project-laravel10\resources\views/user_control/edit.blade.php ENDPATH**/ ?>