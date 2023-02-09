<?php 
function navbar($dashboard, $absen, $data){
  echo"
  <div class='navbot fixed-bottom pt-3 pb-1 shadow-lg bg-light'>
      <div class='row text-center'>
        <a href='index.php' class='col'><i class='fa-solid fa-house fs-5 $dashboard'></i><br><small>Dashboard</small></a>
        <a href='absen.php' class='col'><i class='fa-solid fa-list-check fs-5 $absen'></i><br><small>Absen</small></a>
        <a href='data.php' class='col'><i class='fa-solid fa-user fs-5 $data'></i><br><small>Data</small></a>
      </div>
    </div>
  ";
}
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "annimah");

function query($query) {
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data) {
  global $conn;
  $nama = htmlspecialchars($data["nama"]);
  $grup = htmlspecialchars($data["grup"]);
  $kelas = htmlspecialchars($data["kelas"]);
  $porsi = htmlspecialchars($data["porsi"]);
  $misting = htmlspecialchars($data["misting"]);
  $kehadiran = htmlspecialchars($data["kehadiran"]);
  $query = "INSERT INTO absensi VALUES ('', '$nama', '$grup', '$kelas', '$porsi', '$misting', '$kehadiran')";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}
?>