<?php
// session_start();
// if ($_SESSION['status']!="siswa") {
//     header("location:../../login/akl/index.php?pesan=belum_login");
// }

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
          <center><img style="margin-bottom:  80px; margin-top:  25px;" class="img-fluid" src="../../assets/images/logo-smkn1.png" />
        </div>
      </div>
    </div>

    <?php include '../../alert.php' ?>

    <!-- <form class="form-horizontal" action="update-siswa.php" name="input" method="POST" enctype="multipart/form-data" onSubmit="return validasi()"> -->
      <form class="form-horizontal" action="daftar_up.php" name="input" method="POST" enctype="multipart/form-data" onSubmit="return validasi()">

      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Tanggal Pendaftaran :</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="tgl_pendfataran" value="<?php echo date('d-m-Y'); ?>" required readonly>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Kompetensi Keahlian :</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="kompetensi_keahlian" value="Akuntansi dan Keuangan Lembaga" readonly>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Kompetensi Keahlian Ke-2 :</label>
        <div class="col-sm-6">
          <select class="form-control" name="kompetensi_keahlian_2">
            <option value="">Pilih</option>
            <!-- <option value="tidak memilih">Hanya 1 Kompetensi Keahlian</option> -->
            <!-- <option value="Akuntansi dan Keuangan Lembaga">Akuntansi dan Keuangan Lembaga</option> -->
            <option value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran</option>
            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
            <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
            <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
            <option value="Teknik Pemesinan">Teknik Pemesinan</option>
          </select>
        </div>
      </div>

      <br>
      <?php include '../form-daftar.php' ?>

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

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" name="upload" value="upload" class="btn btn-default">Submit</button>
        </div>
      </div>
    </form>
  </div>

<?php include '../footer.php' ?>
