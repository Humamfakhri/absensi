<?php
require 'functions.php';
$datas = query("SELECT * FROM absensi");
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
  <div class="navbot fixed-bottom pt-3 pb-1 shadow-lg">
      <div class="row text-center">
        <a href="index.php" class="col"><i class="fa-solid fa-house fs-5"></i><br><small>Dashboard</small></a>
        <a href="#" class="col"><i class="fa-solid fa-pen-to-square fs-5"></i><br><small>Edit</small></a>
        <a href="data.php" class="col"><i class="fa-solid fa-user fs-5 active"></i><br><small>Data</small></a>
      </div>
    </div>
    <!-- NAVIGATION BAR END -->

  <table class="table table-striped">
    <tr>
      <th>No.</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>
    <?php foreach($datas as $data) :?>
    <tr>
      <td><?= $data['id']; ?></td>
      <td><?= $data['nama']; ?></td>
      <td><a href="">Edit</a> | <a href="">Hapus</a></td>
    </tr>
    <?php endforeach; ?>
  </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>