<?php
session_start();
if ($_SESSION['status']!="akl") {
    header("location:../../index.php?pesan=belum_login");
}

include '../header.php';
?>

<div class="container">

  <div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
      <center><h2>Tampilan Operator PPDB SMKN 1 Kragilan</h2></center>
      <center><h3>Kompetensi Keahlian Akuntansi Keuangan Lembaga</h3></center>
		</div>
		<div class="col-md-2">
		</div>
  </div>

  <table class="table table-bordered">
    <?php
      include '../../../koneksi.php';
      $id = $_GET['id'];
      $data = mysqli_query($koneksi, "select * from f_siswa_akl where id='$id'");
      while ($d = mysqli_fetch_array($data)) {
        ?>

        <br><br><br>
        <a style="margin-right: 10px;" type="button" class="btn btn-danger btn-md" href="index.php">Kembali</a>
        <a style="margin-right: 10px;" type="button" class="btn btn-warning btn-md" href="upload-bukti.php?id=<?= $d['id'] ?>">Upload Bukti Pendaftaran</a>


        <table class="table table-bordered">
          <form class="" action="akl-proses.php" method="post">
            <?php include '../form-bukti-daftar.php' ?>
            <tr>
              <td>
                SKHUN <?= $d['pdf_skhun'] ?>
                <br>
                <select name="val_skhun" class="form-control" required>
                  <option value="<?= $d['val_skhun']; ?>">Pilih Kondisi <?= $d['val_skhun']; ?></option>
                  <option value="Data Sesuai">Data Sesuai</option>
                  <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
                </select>
              </td>
              <td>
                <embed src="../../../assets/file_upload/akl/<?= $d['pdf_skhun']; ?>" type="application/pdf" width="100%" height="500px">
              </td>
            </tr>
            <tr>
              <td>Surat Sehat dari Dokter
                <select name="val_surat_dokter" class="form-control" required>
                  <option value="<?= $d['val_surat_dokter']; ?>">Pilih Kondisi <?= $d['val_surat_dokter']; ?></option>
                  <option value="Data Sesuai">Data Sesuai</option>
                  <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
                </select>
              </td>
              <td>
                <embed src="../../../assets/file_upload/akl/<?= $d['pdf_surat_dokter']; ?>" type="application/pdf" width="100%" height="500px">
              </td>
            </tr>
            <tr>
              <td>Kartu Keluarga
                <br>NIK : <b> <?= $d['nik']; ?> </b>
                <br>Nomor KK : <b><?= $d['no_kk']; ?></b>
                <br>Tanggal KK Terbit : <b><?= $d['tgl_kk']; ?></b>
                <br>
                <select name="val_kk" class="form-control" required>
                  <option value="<?= $d['val_kk']; ?>">Pilih Kondisi <?= $d['val_kk']; ?></option>
                  <option value="Data Sesuai">Data Sesuai</option>
                  <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
                </select>
              </td>
              <td>
                <embed src="../../../assets/file_upload/akl/<?= $d['pdf_kk']; ?>" type="application/pdf" width="100%" height="500px">
              </td>
            </tr>
            <tr>
              <td>Akta Kelahiran
                <select name="val_akta" class="form-control" required>
                  <option value="<?= $d['val_akta']; ?>">Pilih Kondisi <?= $d['val_akta']; ?></option>
                  <option value="Data Sesuai">Data Sesuai</option>
                  <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
                </select>
              </td>

              <td>
                <embed src="../../../assets/file_upload/akl/<?= $d['pdf_akta']; ?>" type="application/pdf" width="100%" height="500px">
              </td>
            </tr>
            <tr>
              <td>Photo
                <select name="val_photo" class="form-control" required>
                  <option value="<?= $d['val_photo']; ?>">Pilih Kondisi <?= $d['val_photo']; ?></option>
                  <option value="Data Sesuai">Data Sesuai</option>
                  <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
                </select>
              </td>
              <td>
                <embed src="../../../assets/file_upload/akl/<?= $d['pdf_photo']; ?>" type="application/pdf" width="100%" height="500px">
              </td>
            </tr>
            <tr>
              <td>SwaPhoto
                <select name="val_swaphoto" class="form-control" required>
                  <option value="<?= $d['val_swaphoto']; ?>">Pilih Kondisi <?= $d['val_swaphoto']; ?></option>
                  <option value="Data Sesuai">Data Sesuai</option>
                  <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
                </select>
              </td>
              <td>
                <embed src="../../../assets/file_upload/akl/<?= $d['pdf_swa_kk']; ?>" type="application/pdf" width="100%" height="500px">
              </td>
            </tr>
            <tr>
              <td>Rapor Semester 2
                <select name="val_rapor_2" class="form-control" required>
                  <option value="<?= $d['val_rapor_2']; ?>">Pilih Kondisi  <?= $d['val_rapor_2']; ?></option>
                  <option value="Data Sesuai">Data Sesuai</option>
                  <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
                </select>
              </td>
              <td>
                <embed src="../../../assets/file_upload/akl/1-rapor_2.pdf" type="application/pdf" width="100%" height="500px">
              </td>
            </tr>
            <tr>
              <td>Rapor Semester 3
                <select name="val_rapor_3" class="form-control" required>
                  <option value="<?= $d['val_rapor_3']; ?>">Pilih Kondisi  <?= $d['val_rapor_3']; ?></option>
                  <option value="Data Sesuai">Data Sesuai</option>
                  <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
                </select>
              </td>
              <td>
                <embed src="../../../assets/file_upload/akl/<?= $d['pdf_rapor_3']; ?>" type="application/pdf" width="100%" height="500px">
              </td>
            </tr>
            <tr>
              <td>Rapor Semester 4
                <select name="val_rapor_4" class="form-control" required>
                  <option value="<?= $d['val_rapor_4']; ?>">Pilih Kondisi  <?= $d['val_rapor_4']; ?></option>
                  <option value="Data Sesuai">Data Sesuai</option>
                  <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
                </select>
              </td>
              <td>
                <embed src="../../../assets/file_upload/akl/<?= $d['pdf_rapor_4']; ?>" type="application/pdf" width="100%" height="500px">
              </td>
            </tr>
            <tr>
              <td>Rapor Semester 5
                <select name="val_rapor_5" class="form-control" required>
                  <option value="<?= $d['val_rapor_5']; ?>">Pilih Kondisi  <?= $d['val_rapor_5']; ?></option>
                  <option value="Data Sesuai">Data Sesuai</option>
                  <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
                </select>
              </td>
              <td>
                <embed src="../../../assets/file_upload/akl/<?= $d['rapor_5']; ?>" type="application/pdf" width="100%" height="500px">
              </td>
            </tr>
            <tr>
              <td>Rapor Semester 6
                <select name="rapor_6" class="form-control" required>
                  <option value="<?= $d['rapor_6']; ?>">Pilih Kondisi  <?= $d['rapor_6']; ?></option>
                  <option value="Data Sesuai">Data Sesuai</option>
                  <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
                </select>
              </td>
              <td>
                <embed src="../../../assets/file_upload/akl/<?= $d['pdf_rapor_6']; ?>" type="application/pdf" width="100%" height="500px">
              </td>
            </tr>
            <tr>
              <td>Piagam 1
                <select name="val_piagam1" class="form-control" required>
                  <option value="<?= $d['val_piagam1']; ?>">Pilih Kondisi <?= $d['val_piagam1']; ?></option>
                  <option value="Data Sesuai">Data Sesuai</option>
                  <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
                </select>
              </td>
              <td>
                <embed src="../../../assets/file_upload/akl/<?= $d['pdf_piagam1']; ?>" type="application/pdf" width="100%" height="500px">
              </td>
            </tr>
            <tr>
              <td>Piagam 2
                <select name="val_piagam2" class="form-control" required>
                  <option value="<?= $d['val_piagam2']; ?>">Pilih Kondisi <?= $d['val_piagam2']; ?></option>
                  <option value="Data Sesuai">Data Sesuai</option>
                  <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
                </select>
              </td>
              <td>
                <embed src="../../../assets/file_upload/akl/<?= $d['pdf_piagam2']; ?>" type="application/pdf" width="100%" height="500px">
              </td>
            </tr>
            <tr>
              <td>Piagam 3
                <select name="val_piagam3" class="form-control" required>
                  <option value="<?= $d['val_piagam3']; ?>">Pilih Kondisi <?= $d['val_piagam3']; ?></option>
                  <option value="Data Sesuai">Data Sesuai</option>
                  <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
                </select>
              </td>
              <td>
                <embed src="../../../assets/file_upload/akl/<?= $d['pdf_piagam3']; ?>" type="application/pdf" width="100%" height="500px">
              </td>
            </tr>
          </table>

                <center>
                  <select style="margin-top: 25px;  width: 30%;" name="kondisi" class="form-control" required>
                    <option value="<?= $d['kondisi']; ?>">Pilih Kondisi <?= $d['kondisi']; ?></option>
                    <option value="Siswa Lolos Seleksi">Siswa Lolos Seleksi</option>
                    <option value="Siswa Tidak Lolos Seleksi">Siswa Tidak Lolos Seleksi</option>
                  </select>

              <input style="margin-top: 25px; margin-bottom: 80px;" type="submit" name="submit" value="submit" class="btn btn-success">
          </form>

    <br>
    <?php
      } ?>

      </div>
    </div>
</div>
</div>


  </body>
</html>
