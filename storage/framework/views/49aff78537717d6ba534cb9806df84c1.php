<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container-lg">
      <button
        type="button"
        class="btn btn-primary"
        data-bs-toggle="modal"
        data-bs-target="#exampleModal"
        data-bs-whatever="@mdo"
      >
        Cetak
      </button>

      <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Isi Data</h1>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
          <!-- modal.blade.php -->
<div class="modal-body">
  <form action="<?php echo e(route('cetak')); ?>" method="GET">
      <?php echo csrf_field(); ?>
      <div class="mb-3">
        <label for="tanggal_ver_security" class="col-form-label">Tanggal Ver Security:</label>
        <input type="datetime-local" class="form-control" name="tanggal_ver_security" id="tanggal_ver_security">
    </div>    
      <div class="mb-3">
          <label for="tanggal_pengajuan" class="col-form-label">Tanggal Pengajuan:</label>
          <input type="datetime-local" class="form-control" name="tanggal_pengajuan" id="tanggal_pengajuan">
      </div>
      <div class="mb-3">
          <label for="number-input-prf" class="col-form-label">No PRF/Tic/CR:</label>
          <input type="number" class="form-control" name="no_prf" id="number-input-prf">
      </div>
      <div class="mb-3">
          <label for="datetime-input-uat" class="col-form-label">Tanggal UAT:</label>
          <input type="datetime-local" class="form-control" name="tanggal_uat" id="datetime-input-uat">
      </div>
      <div class="mb-3">
          <label for="datetime-input-prf-ticket" class="col-form-label">Tanggal PRF/Ticket:</label>
          <input type="datetime-local" class="form-control" name="tanggal_prf_ticket" id="datetime-input-prf-ticket">
      </div>
      <div class="mb-3 row">
          <label for="name-input-mengetahui" class="col-sm-3 col-form-label">Mengetahui:</label>
          <div class="col-sm-6">
              <input type="text" class="form-control" name="mengetahui" id="name-input-mengetahui">
          </div>
          <div class="col-sm-3">
              <label for="datetime-input-mengetahui" class="col-form-label">Tanggal Mengetahui:</label>
              <input type="datetime-local" class="form-control" name="tanggal_mengetahui" id="datetime-input-mengetahui">
          </div>
      </div>
      <div class="mb-3 row">
          <label for="name-input-menyetujui" class="col-sm-3 col-form-label">Menyetujui:</label>
          <div class="col-sm-6">
              <input type="text" class="form-control" name="menyetujui" id="name-input-menyetujui">
          </div>
          <div class="col-sm-3">
              <label for="datetime-input-menyetujui" class="col-form-label">Tanggal Menyetujui:</label>
              <input type="datetime-local" class="form-control" name="tanggal_menyetujui" id="datetime-input-menyetujui">
          </div>
      </div>
      <div class="mb-3 row">
          <label for="name-input-petugas" class="col-sm-3 col-form-label">Petugas:</label>
          <div class="col-sm-6">
              <input type="text" class="form-control" name="petugas" id="name-input-petugas">
          </div>
          <div class="col-sm-3">
              <label for="datetime-input-petugas" class="col-form-label">Tanggal Petugas:</label>
              <input type="datetime-local" class="form-control" name="tanggal_petugas" id="datetime-input-petugas">
          </div>
      </div>
      <div class="mb-3 row">
          <label for="name-input-mengetahui2" class="col-sm-3 col-form-label">Mengetahui:</label>
          <div class="col-sm-6">
              <input type="text" class="form-control" name="mengetahui2" id="name-input-mengetahui2">
          </div>
          <div class="col-sm-3">
              <label for="datetime-input-mengetahui2" class="col-form-label">Tanggal Mengetahui:</label>
              <input type="datetime-local" class="form-control" name="tanggal_mengetahui2" id="datetime-input-mengetahui2">
          </div>
      </div>
      <button type="submit" class="btn btn-primary">Cetak</button>
  </form>
</div>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel10\project-laravel10\resources\views/data_pengguna/modal.blade.php ENDPATH**/ ?>