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
          <h4><b>Program Studi Teknik Kendaraan Ringan</b></h4>
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
    from f_siswa_tkr where nik='$nik'");

    ?>

    <br><br><br>
    <table>
      <tr>
        <td><a type="button" style="margin-right: 10px; margin-bottom: 25px;" class="btn btn-danger btn-md" href="logout.php">Keluar</a></td>
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
      $data = mysqli_query($koneksi, "select * from f_siswa_tkr where nik='$nik'");
      while ($d = mysqli_fetch_array($data)) {
          //validasi jika npsn kosong
          $cek_npsn = $d['npsn_sekolah'];
          if (!empty($cek_npsn)) {
              include('../form-lihat-data.php');
              exit;
          }else{
          ?>

          <form class="form-horizontal" action="" name="input" method="POST" enctype="multipart/form-data" onSubmit="return validasi()">

          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Tanggal Pendaftaran :</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="tgl_pendfataran" value="<?php echo date('d-m-Y'); ?>" required readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Kompetensi Keahlian :</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="kompetensi_keahlian" value="<?= $d['kompetensi_keahlian'] ?>" readonly>
            </div>
          </div>

          <br>

          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Kompetensi Keahlian Ke-2 :</label>
            <div class="col-sm-6">
              <select class="form-control" name="kompetensi_keahlian_2">
                <option value="<?= $d['kompetensi_keahlian_2'] ?>">Pilihan Awal | <?= $d['kompetensi_keahlian_2'] ?></option>
                <option value="Akuntansi dan Keuangan Lembaga">Akuntansi dan Keuangan Lembaga</option>
                <option value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran</option>
                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                <!-- <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option> -->
                <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                <option value="Teknik Pemesinan">Teknik Pemesinan</option>
              </select>
            </div>
          </div>

          <?php
            include '../form-edit.php';
          }
       } ?>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="upload" value="upload" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

<?php include '../footer.php' ?>
