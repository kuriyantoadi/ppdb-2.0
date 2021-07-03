<?php include 'function-rekap.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PPDB SMKN 1 Kragilan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
  <script src="../../assets/js/bootstrap.min.js"></script>

  <script type="../text/javascript" src="../../assets/js/jquery-latest.js"></script>
  <script type="../text/javascript" src="../../assets/js/jquery.tablesorter.min.js"></script>
</head>
<body>

  <div class="container">
    <center>
      <h2>Tampilan Admin PPDB SMKN 1 Kragilan</h2>
    </center>
    <center>
      <h3>Rekap Daftar Ulang</h3>
    </center>


    <table class="table table-bordered table-hover">
      <tr>
        <td><center>No</td>
        <td><center>Jurusan</td>
        <td><center>Siswa Diterima</td>
        <td><center>Siswa Sudah Upload Berkas</td>
        <td><center>Berkas Belum Divalidasi</td>
        <td><center>Siswa Daftar Ulang</td>
      </tr>
      <tr>
        <td><center><?= $no++ ?></td>
        <td><center>Akuntansi dan Keuangan Lembaga</td>
        <td><center><?= tampil_diterima('Akuntansi dan Keuangan Lembaga') ?></td>
        <td><center><?= tampil_upload('Akuntansi dan Keuangan Lembaga') ?></td>
        <td><center><?= tampil_val('Akuntansi dan Keuangan Lembaga') ?></td>
        <td><center><?= tampil_daftarulang('Akuntansi dan Keuangan Lembaga') ?></td>
      </tr>
    </table>


      <script src="../../assets/datepicker/js/custom.js"></script>
    </body>
    </html>
