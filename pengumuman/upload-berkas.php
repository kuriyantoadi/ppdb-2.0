<?php

include 'header.php';

include '../koneksi.php';
$cek_kondisi = mysqli_query($koneksi, "SELECT * from f_pengumuman where nisn_siswa='$nisn_siswa' ");
while ($d_kondisi = mysqli_fetch_array($cek_kondisi)) {

  if ($d_kondisi['kondisi'] == "TIDAK DITERIMA") {
    header("location:index.php?pesan=belum_login");
  }

}
?>

      <table class="table table-bordered">
        <?php
      include '../koneksi.php';
      $nik = isset($_GET['nik']) ? abs((int) $_GET['nik']) : 0;
      $data = mysqli_query($koneksi, "select *  from f_pengumuman where nik='$nik'");
      while ($d = mysqli_fetch_array($data)) {

              ?>

        <table>
          <tr>
            <td><a type="button" style="margin-right: 10px; margin-bottom: 25px;" class="btn btn-danger btn-md" href="dashboard.php?nik=<?php echo $d['nik']; ?>">Kembali</a></td>
            <td><a type="button" style="margin-right: 10px; margin-bottom: 25px;" class="btn btn-primary btn-md" href="../assets/file/F-PESERTA_DIDIK.pdf">
                Formulir Dapodik  <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
              </a>
            </td>
            <td><a type="button" style="margin-right: 10px; margin-bottom: 25px;" class="btn btn-primary btn-md" href="cetak-pakta.php?nik=<?php echo $d['nik'] ?>">
              Pakta Integritas   <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
              </a>
            </td>
            <td>
              <?php if (!empty($d['pdf_pakta'])): ?>
                <a type="button" style="margin-right: 10px; margin-bottom: 25px;" class="btn btn-primary btn-md" href="cetak-upload-berkas.php?nik=<?php echo $d['nik'] ?>">
                  Butki Upload Berkas <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                </a>
              <?php endif; ?>
            </td>
          </tr>
        </table>

        <?php include '../alert.php'; ?>
        <form class="form-horizontal" action="upload-berkas-up.php" name="input" method="POST" enctype="multipart/form-data" onSubmit="return validasi()">
          <table class="table table-bordered">

            <tr>
              <td>Catatan dari Operator</td>
              <td><b><?php echo $d['catatan_operator']; ?></b></td>
            </tr>
            <tr>
              <td>Status Siswa Diterima</td>
              <td><?php include 'label-diterima.php' ?></td>
            </tr>
            <tr>
              <td>Status Upload Berkas</td>
              <td><?php include 'label-upload.php'; ?></td>
            </tr>
            <tr>
              <td>Status Daftar Ulang</td>
              <td><?php include 'label-daftarulang.php' ?></td>
            </tr>
            <tr>
              <td>Tanggal Daftar Ulang</td>
              <td><?php echo $d['tgl_daftarulang']; ?></td>
            </tr>
            <tr>
              <td>Nomor Pendaftaran</td>
              <td><?php echo $d['no_p']; ?></td>
            </tr>
            <tr>
              <td>Nama Siswa</td>
              <td><?php echo $d['nama_siswa']; ?></td>
            </tr>
            <tr>
              <td>Kompetensi Keahlian</td>
              <td><?php echo $d['kompetensi_keahlian']; ?></td>
            </tr>
            <tr>
              <td>Asal Sekolah</td>
              <td><?php echo $d['asal_sekolah']; ?></td>
            </tr>
            <tr>
              <td>NPSN Sekolah SMP</td>
              <td><?php echo $d['npsn_sekolah']; ?></td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td><?php echo $d['alamat']; ?></td>
            </tr>
            <tr>
              <td>RT</td>
              <td><?php echo $d['rt']; ?></td>
            </tr>
            <tr>
              <td>RW</td>
              <td><?php echo $d['rw']; ?></td>
            </tr>
            <tr>
              <td>Kelurahan</td>
              <td><?php echo $d['kelurahan']; ?></td>
            </tr>
            <tr>
              <td>Kecamatan</td>
              <td><?php echo $d['kecamatan']; ?></td>
            </tr>
            <tr>
              <td>Kota</td>
              <td><?php echo $d['kota']; ?></td>
            </tr>
            <tr>
              <td>NIK</td>
              <td><?php echo $d['nik']; ?></td>
            </tr>


            <?php if (!empty($d['pdf_pakta'])) { ?>
            <!-- <tr>
              <td>Kondisi Validasi</td>
              <td>
                <?php include 'val.php' ?>
              </td>
            </tr>

            <tr>
              <td>Kondisi Berkas Diberikan ke Sekolah</td>
              <td>
                <?= $d['kondisi_berkas'] ?>
                <p>Berkas diberikan jika kondisi validasi sudah hijau</p>
              </td>
            </tr> -->



            <?php }else{ ?>

            <tr>
              <td>Scan Pakta Integritas</td>
              <td>
                <p>File Harus PDF dan Maksimal 300kb</p>
                <input type="file" name="pdf_pakta" accept="application/pdf" class="form-control-file" id="pdf_fakta" required>
              </td>
            </tr>
            <tr>
              <td>Swa Photo Pakta Integritas</td>
              <td>
                <p>File Harus PDF dan Maksimal 500kb</p>
                <input type="hidden" name="nisn_siswa" value="<?php echo $d['nisn_siswa']; ?>">
                <input type="hidden" name="kode_jur" value="<?= $kode_jur; ?>">
                <input type="hidden" name="nik" value="<?php echo $d['nik']; ?>">
                <input type="file" name="pdf_swa_pakta" accept="application/pdf" class="form-control-file" id="pdf_swa_fakta" required>
              </td>
            </tr>
            <tr>
              <td>Fomulir Dapodik</td>
              <td>
                <p>File Harus PDF dan Maksimal 500kb</p>
                <input type="file" name="pdf_dapodik" accept="application/pdf" class="form-control-file" id="pdf_fakta" required>
              </td>
            </tr>


              </table>
              <center><input type="submit" style="margin-top: 10px; margin-bottom: 60px" class="btn btn-default" name="upload" value="Submit"></center>

            </form>

          <?php } ?>




      <?php
      }
      include 'footer.php'
      ?>



</body>

</html>
