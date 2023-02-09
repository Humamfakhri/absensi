<?php 
session_start();
require 'functions.php';

if (isset($_POST['delete_btn'])) {
  $all_id = $_POST['delete_id'];
  $extract_id = implode(',', $all_id);
  
  $query = "DELETE FROM absensi WHERE id IN($extract_id)";
  $query_run = mysqli_query($conn, $query);

  if ($query_run) {
    $_SESSION['status'] = "Data Berhasil dihapus! ";
    header("Location: data.php");
  } else {
    $_SESSION['status'] = "Data Gagal dihapus! ";
    header("Location: data.php");
  }
}

?>