<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verifikasi Akun Anda</title>
</head>
<body>
    <p>
        Halo <b><?php echo e($details['nama']); ?></b> !
    </p>
    <br>
    <p>
        Berikut ini adalah data anda :
    </p>

    <table>
        <tr>
            <td>Full Name</td>
            <td>:</td>
            <td><?php echo e($details['nama']); ?></td>
        </tr>
        <tr>
            <td>Role</td>
            <td>:</td>
            <td><?php echo e($details['role']); ?></td>
        </tr>
        <tr>
            <td>Website</td>
            <td>:</td>
            <td><?php echo e($details['website']); ?></td>
        </tr>
        <tr>
            <td>Tanggal Register</td>
            <td>:</td>
            <td><?php echo e($details['datetime']); ?></td>
        </tr>
    </table>
    <br><br>
    <center>
        <h3>Klik dibawah ini untuk verifikasi akun anda :</h3>
        <a href="<?php echo e($details['url']); ?>" style="text-decoration: none; color: rgb(255, 255, 255); padding: 9px; background-color: blue; font-weight: bold; border-radius: 20%;">Verifikasi</a>
        <br><br><br>
        <p>
            Copy right @ 2024 | BankRiauKepriSyariah
        </p>
    </center>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel10\project-laravel10\resources\views/mail/verify.blade.php ENDPATH**/ ?>