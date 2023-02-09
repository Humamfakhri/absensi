<?php
require 'functions.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600;700&family=Nunito:wght@200;400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/cce5ebab8a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Absensi Annimah</title>
  </head>
  <body>
  <!-- NAVIGATION BAR -->
  <?php navbar("", "", "active"); ?>
  <!-- NAVIGATION BAR END -->
  <section class="tambah-data">
    <div class="container">
      <h1 class="fw-bold text-center my-4">Tambah Data</h1>
      <form action="" method="POST" class="col-10 mx-auto">
        <?php 
        if (isset($_POST["submit"])) {
          if(tambah($_POST) > 0) {
            echo "
            <div class='alert alert-success' role='alert'>
              Data Berhasil ditambahkan! <a href='data.php' class='alert-link'>Lihat</a>
            </div>
            ";
          }
        }
        ?>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" required autofocus>
        </div>
        <div class="mb-3">
          <label for="grup" class="form-label">Grup</label>
          <select id="grup" class="form-select" name="grup" required>
            <option>OB SMP</option>
            <option>OB SD</option>
            <option>Staff</option>
            <option>Murid SD</option>
            <option>...</option>
            <option>Murid SMP</option>
            <option>Guru SD</option>
            <option>Guru SMP</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="kelas" class="form-label">Kelas</label>
          <select id="kelas" class="form-select" name="kelas" required>
            <option>-</option>
            <option>3 MUSAB</option>
            <option>3 SALMAN</option>
            <option>3 KHOLID</option>
            <option>3 HAMZAH</option>
            <option>2 SHOFIAH</option>
            <option>2 KHADIJAH</option>
            <option>2 HAFSAH</option>
            <option>2 AISYAH</option>
            <option>1 ZAENAB</option>
            <option>1 FATIMAH</option>
          </select>
        </div>
        <label for="porsi" class="form-label">Porsi</label>
        <select id="porsi" class="form-select" name="porsi" required>
          <option>Biasa</option>
          <option>Jumbo</option>
        </select>
        <input type="text" value="Ada" id="misting" name="misting" hidden>
        <input type="text" value="Hadir" id="kehadiran" name="kehadiran" hidden>
        <button type="submit" name="submit" class="btn btn-primary float-end mt-3">Simpan</button>
        <a href="data.php" class="btn btn-secondary float-end mt-3 me-2">Batal</a>
      </form>
    </div>
  </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
      const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

      const alert = (message, type) => {
        const wrapper = document.createElement('div')
        wrapper.innerHTML = [
          `<div class="alert alert-${type} alert-dismissible" role="alert">`,
          `   <div>${message}</div>`,
          '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
          '</div>'
        ].join('')

        alertPlaceholder.append(wrapper)
      }

      const alertTrigger = document.getElementById('liveAlertBtn')
      if (alertTrigger) {
        alertTrigger.addEventListener('click', () => {
          alert('Data Berhasil ditambahkan!', 'success')
        })
      }
    </script>
  </body>
</html>