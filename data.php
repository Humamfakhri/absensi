<?php
session_start();
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

  <!-- HEADER -->
  <div class="header container py-3">
    <div class="row align-items-center justify-content-center">
      <div class="col-12">
        <form class="d-flex" role="search">
          <input class="f-14 form-control me-2" type="search" placeholder="Cari nama ..." aria-label="Search">
          <button class="f-14 btn btn-outline-primary" type="submit">Cari</button>
        </form>
      </div>
      <div class="d-flex justify-content-center mt-3">
      <form action="delete.php" method="POST">
      <a href="tambah.php" class="btn btn-primary me-2 f-12">+ Tambah</a>
      <button type="submit" name="edit_btn" class="btn btn-success me-2 f-12"><i class="fa-solid fa-pen me-2"></i>Edit</button>
      <button type="submit" name="delete_btn" class="btn btn-danger f-12"><i class="fa-solid fa-trash me-2"></i>Hapus</button>
      </div>
    </div>
  </div>
  <!-- HEADER END -->

  <section class="data mt-3">

    <!-- MURID SD -->
    <?php 
    if (isset($_SESSION['status'])) {
      echo "
      <div class='alert alert-warning' role='alert'>
        Data Berhasil dihapus!
      </div>
      ";
      unset($_SESSION['status']);
    }
    $datas = query("SELECT * FROM absensi WHERE grup = 'Murid SD' ORDER BY kelas ASC, nama ASC");
    $i = 1;
    ?>
      <table class="table table-striped mb-4">
        <h2 class="fw-bold text-center">Murid SD</h2>
        <tr class="align-middle">
          <th>No.</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Pilih</th>
        </tr>
        <?php foreach($datas as $data) :?>
        <tr>
          <td><?= $i; ?></td>
          <?php
          if ($data['porsi'] == 'Jumbo') {
            echo "<td style='background-color: #a4c8ff;'>".$data['nama']."</td>";
          } else {
            echo "<td>".$data['nama']."</td>";
          }
          ?>
          <td><?= $data['kelas']; ?></td>
          <td class="ps-3"><input type="checkbox" name="delete_id[]" value="<?=$data['id']; ?>"></td>
        </tr>
        <?php $i++; endforeach; ?>
      </table>

      <!-- STAFF -->
      <?php 
        $datas = query("SELECT * FROM absensi WHERE grup = 'Staff' ORDER BY kelas ASC, nama ASC");
        $i = 1;
      ?>
      <table class="table table-striped mb-4">
      <h2 class="fw-bold text-center">Staff</h2>
        <tr class="align-middle">
          <th>No.</th>
          <th>Nama</th>
          <th>Pilih</th>
        </tr>
        <?php foreach($datas as $data) :?>
        <tr>
          <td><?= $i; ?></td>
          <td><?= $data['nama']; ?></td>
          <td class="ps-3"><input type="checkbox" name="delete_id[]" value="<?=$data['id']; ?>"></td>
        </tr>
        <?php $i++; endforeach; ?>
      </table>

      <!-- OB -->
      <?php 
        $datas = query("SELECT * FROM absensi WHERE grup = 'OB SD' OR grup = 'OB SMP' ORDER BY kelas ASC, nama ASC");
        $i = 1;
      ?>
      <table class="table table-striped mb-4">
      <h2 class="fw-bold text-center">OB</h2>
        <tr class="align-middle">
          <th>No.</th>
          <th>Nama</th>
          <th>Pilih</th>
        </tr>
        <?php foreach($datas as $data) :?>
        <tr>
          <td><?= $i; ?></td>
          <td><?= $data['nama']; ?></td>
          <td class="ps-3"><input type="checkbox" name="delete_id[]" value="<?=$data['id']; ?>"></td>
        </tr>
        <?php $i++; endforeach; ?>
      </table>
    </form>
  </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>