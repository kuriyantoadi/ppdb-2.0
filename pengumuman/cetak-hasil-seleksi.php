<?php
session_start();
if ($_SESSION['status']!="admin" && $_SESSION['status']!="siswa") {
    header("location:index.php?pesan=belum_login");
}

include '../koneksi.php';
// $nisn = isset($_GET['nisn']) ? abs((int) $_GET['nisn']) : 0;
$nik = isset($_GET['nik']) ? abs((int) $_GET['nik']) : 0;

$data_siswa = mysqli_query($koneksi, "select nama_siswa from f_pengumuman where nik='$nik'");
while ($d_siswa = mysqli_fetch_array($data_siswa)) {

  $nama_siswa = $d_siswa['nama_siswa'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PPDB SMKN 1 Kragilan - <?= $nama_siswa ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <!-- <script src="../../assets/js/bootstrap.min.js"></script> -->

</head>
<body>

<div class="container">

    <center><img style="margin-bottom: 0px; margin-top:  10px; margin-left: 0px" src="../assets/images/kop-surat.png" /><center>

      <h3><b>SURAT KETERANGAN</b></h3>
      <p>Nomor : 442/../Adm.Sekolah (revisi)</p>
      <p style="margin-top: 10px; margin-bottom: 10px">Tentang :</p>
      <p style="margin-bottom: 20px"><b>PENGUMUMAN HASIL SELEKSI
      <br>PENERIMAAN PESERTA DIDIK BARU (PPBD)
      <br>SMK NEGERI 1 KRAGILAN TAHUN PELAJARAN 2021/2022</b></p>

      <?php
        $nik = isset($_GET['nik']) ? abs((int) $_GET['nik']) : 0;
        $data = mysqli_query($koneksi, "select * from f_pengumuman where nik='$nik'");
        while ($d = mysqli_fetch_array($data)) {
      ?>

      <table>
        <tr>
          <td colspan="2">Kepala SMK Negeri 1 Kragilan Kabupaten Serang menyatakan bahwa ;</td>
        </tr>
        <tr>
          <td width="150px">Nama</td>
          <td>: <?= $d['nama_siswa'] ?></td>
        </tr>
        <tr>
          <td>NISN</td>
          <td>: <?= $d['nisn_siswa'] ?></td>
        </tr>
        <tr>
          <td>Asal Sekolah</td>
          <td>: <?= $d['asal_sekolah'] ?></td>
        </tr>

      </table>
      <p style="margin-top: 20px">Berdasarkan hasil rapat pleno panitia PPDB SMK Negeri 1 Kragilan tanggal 289 Juni 2021,
        dengan memperhatikan Nilai Raport dan Tes Bakat dan Minat/Uji Kompetensi, maka siswa tersebut dinyatakan:</p>

      <table>
        <tr>
          <td colspan="2"><center>
            <h3><b><?= $d['kondisi'] ?></b></h3>
          </center>
          </td>
        </tr>

        <?php if ($d['kondisi'] == "DITERIMA") { ?>
          <tr>
            <td>DI KOMPETENSI KEAHLIAN</td>
            <td>: <?= "TEKNIK KOMPUTER JARINGAN" ?></td>
          </tr>
        <?php } ?>

      </table>

      <p style="text-align: justify; margin-top: 10px" >
        Syarat yang harus dipenuhi	 :
        <br>Demikian Surat Keterangan ini kami sampaikan.
      </p>

<!-- tanda tanggan kepala sekolah -->
    <img height="130px" align="right" src="../assets/images/stampel.png" style="margin-right:  80px;"/>

    <p style="text-align: justify; margin-top: 180px">
      *)  Catatan :
      <ol style="text-align: justify;">
        <li>Daftar Ulang tanggal 1 s.d 9 Juli 2021,
          <br>(Siswa yang tidak mendaftar ulang dianggap mengundurkan diri);</li>
        <li>Siswa yang diterima, wajib mengikuti kegiatan MPLS, pada tanggal 12 s.d 14 Juli 2021.</li>
      </ol>


    </p>
  <?php
      } ?>

  </div>


<script>
    window.print();
  </script>


  </body>
</html>
