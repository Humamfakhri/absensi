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
    <div class="navbot fixed-bottom pt-3 pb-1 shadow-lg bg-light">
      <div class="row text-center">
        <a href="index.php" class="col"><i class="fa-solid fa-house fs-5 active"></i><br><small>Dashboard</small></a>
        <a href="#" class="col"><i class="fa-solid fa-pen-to-square fs-5"></i><br><small>Edit</small></a>
        <a href="list.php" class="col"><i class="fa-solid fa-user fs-5"></i><br><small>Data</small></a>
      </div>
    </div>
    <!-- NAVIGATION BAR END -->

    <!-- CONTENT -->
    <div class="container pt-3">
      <h1 class="fw-bold text-center">Dashboard<br>Absensi Annimah</h1>
    </div>

    <div class="container mt-3 mb-5">
      <div class="row justify-content-center">
        <div class="col-11">
          <div class="box siswa bg-primary text-white p-2 pt-3 text-center rounded">
            <div class="row align-items-center">
              <div class="col total-siswa py-3">
                <h5>Siswa</h5>
                <h2 class="fw-bold">41</h2>
              </div>
              <div class="col my-auto">
                <div class="d-flex flex-column">
                  <div class="biasa pb-0 mb-0">
                    <p class="small m-0">Biasa</p>
                    <p class="fw-bold fs-5 m-0">33</p>
                  </div>
                    <p class="small m-0">Jumbo</p>
                    <p class="fw-bold fs-5 m-0">2</p>
                </div>
              </div>
              <!-- <div class="col-11 mt-2 bg-white text-dark mx-auto total border border-primary rounded-top pt-1 pb-3">
                <small>Masuk :<span class="fw-bold fs-6">41</span></small>
              </div> -->
              <div class="col-11 mt-2 bg-white text-dark mx-auto bungkus border border-dark-subtle rounded-bottom pt-3 pb-2">
                <small><span class="fw-bold fs-6">4</span> (biasa) + <span class="fw-bold fs-6">2</span> (jumbo)</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-5 col-staffob">
          <div class="box bg-success staff text-white p-3 py-4 text-center rounded ">
            <h5>Staff</h5>
            <h2 class="fw-bold">7</h2>
            <div class="col-11 mt-2 bg-white text-dark mx-auto bungkus border border-dark-subtle rounded-bottom pt-3 pb-1">
                <p class="fw-bold m-0 ds-6">2</p>
            </div>
          </div>
        </div>
        <div class="col-5 col-staffob">
          <div class="box bg-oren ob text-white p-3 py-4 text-center rounded">
            <h5>OB</h5>
            <h2 class="fw-bold">22</h2>
            <div class="col-11 mt-2 bg-white text-dark mx-auto bungkus border border-dark-subtle rounded-bottom pt-3 pb-1">
              <p class="fw-bold m-0 ds-6">2</p>
          </div>
          </div>
        </div>
      </div> <!-- row -->
      <div class="div text-center">Total Bungkus : <span class="fw-bold">8</span></div>
    </div>

    <!-- CONTENT END -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>