<?php include 'header.php' ?>

<div class="container">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <center><img style="margin-top: 25px;" src="../assets/images/logo-banten.png" />
      </div>
      <div class="col-md-6">
        <center>
          <h2 style="margin-top:  25px;"><b>SMK Negeri 1 Kragilan</b></h2>
        </center>
        <center>
          <h4><b>Form Pendaftaran</b></h4>
        </center>
        <center>
          <h4><b>Calon Peserta Didik Baru</b></h4>
        </center>
        <center>
          <h5><b>Tahun Pelajaran 2021/2022</b></h4>
        </center>
        <center>
          <h4><b>Program Studi Akuntansi dan Keuangan Lembaga</b></h4>
        </center><br>
        <!-- font ganti jenis -->
      </div>
      <div class="col-md-3">
        <center><img style="margin-bottom:  80px; margin-top:  25px;" class="img-fluid" src="../assets/images/logo-smkn1.png" />
      </div>
    </div>
  </div>


  <?php
  include '../koneksi.php';

  //akl hari ke-1 laki-laki
  $data_akl_h1_l = mysqli_query($koneksi, "SELECT * FROM f_siswa_akl where tgl_pendaftaran='14-06-2021' and jenis_kelamin='Laki-laki' ");
  $jml_akl_h1_l = mysqli_num_rows($data_akl_h1_l);

  //akl hari ke-1 perempuan
  $data_akl_h1_p = mysqli_query($koneksi, "SELECT * FROM f_siswa_akl where tgl_pendaftaran='14-06-2021' and jenis_kelamin='Perempuan' ");
  $jml_akl_h1_p = mysqli_num_rows($data_akl_h1_p);

  //akl hari ke-2 laki-laki
  $data_akl_h2_l = mysqli_query($koneksi, "SELECT * FROM f_siswa_akl where tgl_pendaftaran='15-06-2021' and jenis_kelamin='Laki-laki' ");
  $jml_akl_h2_l = mysqli_num_rows($data_akl_h2_l);

  //akl hari ke-2 perempuan
  $data_akl_h2_p = mysqli_query($koneksi, "SELECT * FROM f_siswa_akl where tgl_pendaftaran='15-06-2021' and jenis_kelamin='Perempuan' ");
  $jml_akl_h2_p = mysqli_num_rows($data_akl_h2_p);

  //akl hari ke-3 Laki-laki
  $data_akl_h3 = mysqli_query($koneksi, "SELECT * FROM f_siswa_akl where tgl_pendaftaran='16-06-2021' and jenis_kelamin='Laki-laki'");
  $jml_akl_h3_l = mysqli_num_rows($data_akl_h3);

  //akl hari ke-3 Perempuan
  $data_akl_h3 = mysqli_query($koneksi, "SELECT * FROM f_siswa_akl where tgl_pendaftaran='16-06-2021' and jenis_kelamin='Perempuan'");
  $jml_akl_h3_p = mysqli_num_rows($data_akl_h3);

  //akl hari ke-4
  $data_akl_h4 = mysqli_query($koneksi, "SELECT * FROM f_siswa_akl where tgl_pendaftaran='17-06-2021'  and jenis_kelamin='Laki-laki'");
  $jml_akl_h4_l = mysqli_num_rows($data_akl_h4);

  $data_akl_h4 = mysqli_query($koneksi, "SELECT * FROM f_siswa_akl where tgl_pendaftaran='17-06-2021'  and jenis_kelamin='Perempuan'");
  $jml_akl_h4_p = mysqli_num_rows($data_akl_h4);

  //akl hari ke-
  $data_akl_h5 = mysqli_query($koneksi, "SELECT * FROM f_siswa_akl where tgl_pendaftaran='18-06-2021' and jenis_kelamin='Laki-laki'");
  $jml_akl_h5_l = mysqli_num_rows($data_akl_h5);

  $data_akl_h5 = mysqli_query($koneksi, "SELECT * FROM f_siswa_akl where tgl_pendaftaran='18-06-2021' and jenis_kelamin='Perempuan'");
  $jml_akl_h5_p = mysqli_num_rows($data_akl_h5);

  $jml_akl_l = $jml_akl_h1_l+$jml_akl_h2_l+$jml_akl_h3_l+$jml_akl_h4_l+$jml_akl_h5_l;
  $jml_akl_p = $jml_akl_h1_p + $jml_akl_h2_p + $jml_akl_h3_p + $jml_akl_h4_p + $jml_akl_h5_p;



  ?>


  <table class="table table-bordered">
    <tr>
      <th rowspan="2">
        <center>Tanggal
      </th>
      <th colspan="2">
        <center>AKL
      </th>
      <th colspan="2">
        <center>OTKP
      </th>
      <th colspan="2">
        <center>TKJ
      </th>
      <th colspan="2">
        <center>RPL
      </th>
      <th colspan="2">
        <center>TPM
      </th>
      <th colspan="2">
        <center>TKR
      </th>
      <th rowspan="2">
        <center>Total
      </th>

    </tr>
    <tr>
      <th>
        <center>L
      </th>
      <th>
        <center>P
      </th>
      <th>
        <center>L
      </th>
      <th>
        <center>P
      </th>
      <th>
        <center>L
      </th>
      <th>
        <center>P
      </th>
      <th>
        <center>L
      </th>
      <th>
        <center>P
      </th>
      <th>
        <center>L
      </th>
      <th>
        <center>P
      </th>
      <th>
        <center>L
      </th>
      <th>
        <center>P
      </th>
    </tr>
    <tr>
      <td>
        <center>14/06/2021
      </td>
      <td>
        <center>
          <!-- AKL h1 laki-laki -->
          <?= $jml_akl_h1_l ?>
      </td>
      <td>
        <center>
          <!-- AKL h1 perempuan -->
          <?= $jml_akl_h1_p ?>
      </td>
    </tr>
    <tr>
      <td>
        <center>15/06/2021
      </td>
      <td>
        <center>
          <!-- AKL h2 laki-laki -->
          <?= $jml_akl_h2_l ?>
      </td>
      <td>
        <center>
          <!-- AKL h1 perempuan -->
          <?= $jml_akl_h2_p ?>
      </td>
    </tr>
    <tr>
      <td>
        <center>16/06/2021
      </td>
      <td>
        <center>
          <!-- AKL h3 laki-laki -->
          <?= $jml_akl_h3_l ?>
      </td>
      <td>
        <center>
          <!-- AKL h3 laki-laki -->
          <?= $jml_akl_h3_p ?>
      </td>
    </tr>
    <tr>
      <td>
        <center>17/06/2021
      </td>
      <td>
        <center>
          <!-- AKL h3 laki-laki -->
          <?= $jml_akl_h4_l ?>
      </td>
      <td>
        <center>
          <!-- AKL h3 laki-laki -->
          <?= $jml_akl_h4_p ?>
      </td>
    </tr>
    <tr>
      <td>
        <center>18/06/2021
      </td>
      <td>
        <center>
          <!-- AKL h3 laki-laki -->
          <?= $jml_akl_h5_l ?>
      </td>
      <td>
        <center>
          <!-- AKL h3 laki-perempuan -->
          <?= $jml_akl_h5_p ?>
      </td>
    </tr>
    <tr>
      <th>
        <center>Jumlah
      </th>
      <th>
        <center><?= $jml_akl_l ?>
      </th>
      <th>
        <center><?= $jml_akl_p ?>
      </th>
    </tr>
  </table>


</div>

<?php
include 'footer.php' ?>
