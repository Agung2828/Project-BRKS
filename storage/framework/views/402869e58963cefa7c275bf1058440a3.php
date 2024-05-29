<!DOCTYPE html>
<html>

<head>
    <title>Cetak Form Pengajuan & Berita Acara</title>
</head>

<body>
    <style>
        header {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            /* Menambahkan jarak antara header dan konten */
        }

        table,
        th,
        td {
            border-collapse: collapse;
            border: 1px solid black;
        }
    </style>
    <div class="container" style="display: flex; flex-direction: column;">
        <header>
            <img class="img-profile rounded-circle" width="150" src="<?php echo e(asset('pictures/accounts/logoobrk.png')); ?>">
            <h2>Form Pengajuan & Berita Acara Migrasi/Restore/Update Data Perbaikan Aplikasi dan Program Production</h2>
        </header>
        <form action="<?php echo e(route('modal')); ?>" method="GET">
            <div style="display: flex; flex-direction: row;">
                <div style="flex: 1;">
                    <p>Jenis Kegiatan: Divisi TSI</p>
                </div>
                <div style="flex: 1;">
                    <p>Tanggal Pengajuan: <?php echo e($tanggal_pengajuan); ?></p>
                </div>
            </div>
            <div style="display: flex; flex-direction: row;">
                <div style="flex: 1;">
                    <p>Developer: Divisi TSI</p>
                </div>
                <div style="flex: 1;">
                    <p>Owner Aplikasi: Bank Riau Kepri </p>
                </div>
            </div>
            <div style="display: flex; flex-direction: row;">
                <div style="flex: 1;">
                    <p>Owner Server: Bank Riau Kepri</p>
                </div>
                <div style="flex: 1;">
                    <p>No PRF/Tic/CR: <?php echo e($no_prf); ?></p>
                </div>
            </div>
            <div style="display: flex; flex-direction: row;">
                <div style="flex: 1;">
                    <p>Lokasi Server: GTN</p>
                </div>
                <div style="flex: 1;">
                    <p>Tanggal UAT: <?php echo e($tanggal_uat); ?></p>
                </div>
            </div>
            <div style="display: flex; flex-direction: row;">
                <div style="flex: 1;">
                    <p>Tanggal Ver Security: <?php echo e($tanggal_ver_security); ?></p>
                </div>
                <div style="flex: 1;">
                    <p>Tanggal PRF/Ticket: <?php echo e($tanggal_prf_ticket); ?></p>
                </div>
            </div>

            <table style="width:100%; margin-bottom: 20px;">
                <tr>
                    <th width="30" style="border-bottom: 2px solid black;">No</th>
                    <th style="border-bottom: 2px solid black;">List Checklist</th>
                    <th style="border-bottom: 2px solid black;">Pengajuan</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Nama Aplikasi</td>
                    <td><?php echo e($datapengguna->namaaplikasi); ?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jenis Layanan</td>
                    <td><?php echo e($datapengguna->JenisLayanan); ?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Ip App</td>
                    <td><?php echo e($datapengguna->IpApp); ?></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Platform</td>
                    <td><?php echo e($datapengguna->platform); ?></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Kebutuhan</td>
                    <td><?php echo e($datapengguna->kebutuhan); ?></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Jenis</td>
                    <td><?php echo e($datapengguna->Jenis); ?></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Downtime</td>
                    <td><?php echo e($datapengguna->Downtime); ?></td>
                </tr>
            </table>
            <div>
                <table style="width:100%;">
                    <tr>
                        <th style="text-align: center; border-bottom: 2px solid black;">Izin Perbaikan/Update</th>
                        <th style="text-align: center; border-bottom: 2px solid black;">Nama</th>
                        <th style="text-align: center; border-bottom: 2px solid black;">Tanggal</th>
                        <th style="text-align: center; border-bottom: 2px solid black; width: 50%;">Tanda Tangan</th>
                    </tr>
                    <tr>
                        <td style="text-align: center;">Permohonan</td>
                        <td style="text-align: center;"><?php echo e($datapengguna->nama); ?></td>
                        <td style="text-align: center;"><?php echo e($datapengguna->tanggalpermohonan); ?></td>
                        <td style="text-align: center; height: 80px;"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">Mengetahui</td>
                        <td style="text-align: center;"><?php echo e($mengetahuiatas); ?></td>
                        <td style="text-align: center;"><?php echo e($tanggal_mengetahuiatas); ?></td>
                        <td style="text-align: center; height: 80px;"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">Menyetujui</td>
                        <td style="text-align: center;"><?php echo e($menyetujui); ?></td>
                        <td style="text-align: center;"><?php echo e($tanggal_menyetujui); ?></td>
                        <td style="text-align: center; height: 80px;"></td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align: center; border-top: 2px solid black;">Dilakukan oleh:</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">Petugas</td>
                        <td style="text-align: center;"><?php echo e($petugas); ?></td>
                        <td style="text-align: center;"><?php echo e($tanggal_petugas); ?></td>
                        <td style="text-align: center; height: 80px;"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">Mengetahui</td>
                        <td style="text-align: center;"><?php echo e($mengetahuibahwa); ?></td>
                        <td style="text-align: center;"><?php echo e($tanggal_mengetahuibahwa); ?></td>
                        <td style="text-align: center; height: 80px;"></td>
                    </tr>
                </table>
            </div>

    </div>
    </div>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\laravel10\project-laravel10\resources\views/data_pengguna/cetak.blade.php ENDPATH**/ ?>