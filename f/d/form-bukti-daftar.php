<br><br><br>
<a style="margin-right: 10px;" type="button" class="btn btn-danger btn-md" href="akl-tampil.php?id=<?= $id ?>">Kembali</a>
<!-- <a style="margin-right: 25px;" type="button" class="btn btn-warning btn-md" href="../../../siswa/akl/cetak-akl.php?nik=<?php echo $d['nik']; ?>">Cetak PDF</a> -->


<table class="table table-bordered">
  <form class="" action="akl-proses.php" method="post">
    <tr>
      <td>Nomor Pendaftaran</td>
      <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
      <td><?php echo $d['no_p']; ?></td>
    </tr>
    <tr>
      <td>Tanggal Pendaftaran</td>
      <td><?php echo $d['tgl_pendaftaran']; ?></td>
    </tr>
    <tr>
      <td>Kompetensi Keahlian</td>
      <td><?php echo $d['kompetensi_keahlian']; ?></td>
    </tr>
    <tr>
      <td>Nama Asal Sekolah</td>
      <td><?php echo $d['asal_sekolah']; ?></td>
    </tr>
    <tr>
      <td>NPSN Sekolah Asal</td>
      <td><?php echo $d['npsn_sekolah']; ?></td>
    </tr>
    <tr>
      <td>NISN</td>
      <td><?php echo $d['nisn']; ?></td>
    </tr>
    <tr>
      <td>Nama Calon Peserta Didik</td>
      <td><?php echo $d['nama_siswa']; ?></td>
    </tr>
    <tr>
      <td>Upload Bukti Pendaftaran dari Operator</td>
      <td>
        <?php if (empty($d['bukti-daftar'])): ?>
          <input type="file" name="bukti-daftar" accept="application/pdf" class="form-control-file" id="" required>
        <?php endif; ?>
        <embed src="../../../bukti-daftar/akl/<?= $d['bukti-daftar']; ?>" type="application/pdf" width="100%" height="500px">
      </td>
    </tr>
    <tr>
      <td>Upload Bukti Pendaftaran dari Calon Siswa</td>
      <td>
        <?php if (empty($d['bukti-upload'])): ?>
          <input type="file" name="bukti-upload" accept="application/pdf" class="form-control-file" id="" required>
        <?php endif; ?>
        <embed src="../../../bukti-upload/akl/<?= $d['bukti-upload']; ?>" type="application/pdf" width="100%" height="500px">
      </td>
    </tr>
    <tr>
      <td colspan="2"><center>
        <?php if( (empty($d['bukti-upload'])) && (empty($d['bukti-daftar'])) ): ?>
          <input style="margin-top: 10px; margin-bottom: 50px;" type="submit" name="submit" value="submit" class="btn btn-success">
        <?php endif; ?>
      </td>
    </tr>
  </table>



  </form>
