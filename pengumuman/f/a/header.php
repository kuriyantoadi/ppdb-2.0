<?php
session_start();
if ($_SESSION['status']!="admin") {
    header("location:../index.php?pesan=belum_login");
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PPDB SMKN 1 Kragilan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
  <script src="../../../assets/js/bootstrap.min.js"></script>

  <script type="../text/javascript" src="../../../assets/js/jquery-latest.js"></script>
  <script type="../text/javascript" src="../../../assets/js/jquery.tablesorter.min.js"></script>
</head>
<body>

  <div class="container">
    <center>
      <h2 style="margin-top: 50px; margin-bottom: 0px">Tampilan Admin PPDB SMKN 1 Kragilan</h2>
      <h2 style="margin-top: 0px; margin-bottom: 50px">Halaman Daftar Ulang</h2>
    </center>
