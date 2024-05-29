

<?php if(Auth::user()->role === 'admin'): ?>
    <?php $__env->startSection('navitem'); ?>
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
            <a class="nav-link" href="<?php echo e(route('usercontrol')); ?>">
                <i class="fas fa-fw fa-users"></i>
                <span>User Control</span>
            </a>
        </li>

        <!-- Nav Item - Data Pengajuan -->
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('datapengguna')); ?>">
                <i class="fas fa-fw fa-file-alt"></i>
                <span>Data Pengajuan</span>
            </a>
        </li>

        <!-- Nav Item - Data Aplikasi -->
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
<?php elseif(Auth::user()->role === 'admin'): ?>
    <?php $__env->startSection('navitem'); ?>
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
                </div>
            </div>
        </li>
    <?php $__env->stopSection(); ?>
<?php endif; ?>

<?php $__env->startSection('main'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit data BRK</h1>
        <div class="card shadow mb-4">
            <div class="card-body">
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                

                <form class="forms-sample" method="POST" action="/datapengguna/brkedit" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                            <label>Jenis Layanan</label><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="update_data" name="jenisLayanan"
                                    value="update data">
                                <label class="form-check-label" for="update data">update data</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="perbaikan_aplikasi" name="jenisLayanan"
                                    value="Perbaikan Aplikasi">
                                <label class="form-check-label" for="perbaikan_aplikasi">Perbaikan Aplikasi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="aplikasi_baru" name="jenisLayanan"
                                    value="Aplikasi_baru">
                                <label class="form-check-label" for="aplikasi_baru">Aplikasi baru</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="migrasi" name="jenisLayanan"
                                    value="Migrasi">
                                <label class="form-check-label" for="migrasi">Migrasi aplikasi baru</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="cleansing" name="jenisLayanan"
                                    value="cleansing">
                                <label class="form-check-label" for="cleansing">cleansing</label>
                            </div>
                        </div>

                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="<?php echo e(old('nama', $data->nama)); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_aplikasi">Nama Aplikasi</label>
                        <select class="form-control" id="namaaplikasi" name="nama_aplikasi" required>
                            <option value="" disabled selected style="color: rgba(0,0,0,0.5);">Pilih Nama Aplikasi
                            </option>
                            <?php $__currentLoopData = $aplikasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->namaaplikasi); ?>"
                                    <?php echo e(old('nama_aplikasi', $data->namaaplikasi) == $item->namaaplikasi ? 'selected' : ''); ?>>
                                    <?php echo e($item->namaaplikasi); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="IpApp">IpApp</label>
                        <input type="text" class="form-control" id="IpApp" name="IpApp"
                            value="<?php echo e(old('IpApp', $data->IpApp)); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="platform">Platform/OS</label>
                        <input type="text" class="form-control" id="platform" name="platform"
                            value="<?php echo e(old('platform', $data->platform)); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="kebutuhan">Kebutuhan</label>
                        <textarea class="form-control" id="kebutuhan" name="kebutuhan" rows="3" required><?php echo e(old('kebutuhan', $data->kebutuhan)); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Jenis">Jenis perbaikan/update</label>
                        <input type="text" class="form-control" id="Jenis" name="jenis"
                            value="<?php echo e(old('Jenis', $data->Jenis)); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggalpermohonan">Tanggal Permohonan</label>
                        <input type="date" class="form-control" id="tanggalpermohonan" name="tanggalpermohonan"
                            value="<?php echo e(old('tanggalpermohonan', \Carbon\Carbon::parse($data->Downtime)->format('Y-m-d\TH:i'))); ?>">
                    </div>
                    <div class="form-group">
                        <label for="Downtime">DownTime</label>
                        <input type="date" class="form-control" id="Downtime" name="Downtime"
                            value="<?php echo e(old('Downtime', \Carbon\Carbon::parse($data->Downtime)->format('Y-m-d\TH:i'))); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Tambah</button>
                    <a href="/datapengguna" class="btn btn-light">Kembali</a>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('halaman_dashboard.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel10\project-laravel10\resources\views/data_pengguna/edit.blade.php ENDPATH**/ ?>