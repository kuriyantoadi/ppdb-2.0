<?php
session_start();
if ($_SESSION['status']!="siswa" && $_SESSION['status']!="admin" && $_SESSION['status']!="operator") {
    header("location:index.php?pesan=belum_login");
}

include '../header.php';
?>

  <div class="container">

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <center><img style="margin-top: 25px;" src="../../assets/images/logo-banten.png" />
        </div>
        <div class="col-md-6">
          <center>
            <h2 style="margin-top:  25px;"><b>SMK Negeri 1 Kragilan</b></h2>
          </center>
          <center>
            <h4><b>Form Edit Pendaftaran</b></h4>
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
          <center><img style="margin-top:  25px;" class="img-fluid" src="../../assets/images/logo-smkn1.png" />
        </div>
      </div>
    </div>

    <form class="form-horizontal" action="edit_up.php" name="input" method="POST" enctype="multipart/form-data" onSubmit="return validasi()">
    <?php
    include '../../koneksi.php';
    $nik = isset($_GET['nik']) ? abs((int) $_GET['nik']) : 0;
    $cek_kartu = mysqli_query($koneksi, "select
    id,
    npsn_sekolah,
    nisn,
    catatan_operator,
    nik
    from f_siswa_akl where nik='$nik'");

    ?>

    <br><br><br>
    <table>
      <tr>
        <td><a type="button" style="margin-right: 10px; margin-bottom: 25px;"
          class="btn btn-danger btn-md" href="logout.php">Keluar</a></td>
        </td>
        <td>
          <?php
          while ($d1 = mysqli_fetch_array($cek_kartu)) {
              //validasi jika npsn kosong
              $cek_npsn = $d1['npsn_sekolah'];
              if ($cek_npsn) {
                ?>
                <a style="margin-right: 10px; margin-bottom: 25px;" class="btn btn-primary btn-md" href="cetak.php?nik=<?= $d1['nik']; ?>">Cetak PDF</a>
              <?php
                }
          ?>
        </td>
      </tr>
      <tr>
        <td>
          <h4><strong>Catatan : </strong></h4>
        </td>
        <td>
          <h4 style="margin-left: 10px"><?= $d1['catatan_operator']; ?></h4>
        </td>
      </tr>
    <?php } ?>
      </table>

      <?php
      // include '../../koneksi.php';
      // $nik = isset($_GET['nik']) ? abs((int) $_GET['nik']) : 0;
      $data = mysqli_query($koneksi, "select * from f_siswa_akl where nik='$nik'");
      while ($d = mysqli_fetch_array($data)) {
          //validasi jika npsn kosong
          $cek_npsn = $d['npsn_sekolah'];
          if (!empty($cek_npsn)) {
          ?>


          <?php

              include('../form-lihat-data.php');
              exit;
          }else{
            include '../form-edit.php';
          }
          ?>



      <h4>H. KONDISI FISIK DAN KEBIASAAN</h4>
      <div class="form-group">
        <label class="control-label col-sm-2">Apakah anda bertindik (bagi laki-laki) </label>
        <div class="col-sm-3">
          <select name="bertindik" class="form-control" required>
            <option value="">Pilih</option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
            <option value="Perempuan">Saya Perempuan</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Apakah anda Perokok </label>
        <div class="col-sm-3">
          <select name="perokok" class="form-control"  required>
            <option value="">Pilih</option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Apakah anda pemakai Psikotropika<br>(Narkoba, Ganja dan sejenisnya) </label>
        <div class="col-sm-3">
          <select name="psikotropika" class="form-control" required>
            <option value="">Pilih</option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Apakah anda bertato </label>
        <div class="col-sm-3">
          <select name="bertato" class="form-control" required>
            <option value="">Pilih</option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Apakah anda peminum-minuman keras </label>
        <div class="col-sm-3">
          <select name="peminum" class="form-control" required>
            <option value="">Pilih</option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Apakah anda Buta Warna </label>
        <div class="col-sm-3">
          <select name="buta_warna" class="form-control" required>
            <option value="">Pilih</option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
      </div>
      <br>

    <?php } ?>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" name="upload" value="upload" class="btn btn-default">Submit</button>
        </div>
      </div>
    </form>
  </div>

<?php include '../footer.php' ?>
