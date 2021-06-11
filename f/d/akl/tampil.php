<br><br><br>
<a style="margin-right: 10px;" type="button" class="btn btn-danger btn-md" href="index.php">Kembali</a>
<a style="margin-right: 10px;" type="button" class="btn btn-warning btn-md" href="upload-bukti.php?id=<?= $d['id'] ?>">Upload Bukti Pendaftaran</a>


<table class="table table-bordered">
  <form class="" action="akl-proses.php" method="post">
    
    <tr>
      <td>
        SKHUN
        <br>Nama Siswa : <b> <?php echo $d['nama_siswa']; ?> </b>
        <br>Nilai Bahasa Indonesia : <b><?php echo $d['un_bind']; ?></b>
        <br>Nilai Bahasa Inggris : <b><?php echo $d['un_bing']; ?></b>
        <br>Nilai Matematika : <b><?php echo $d['un_mtk']; ?></b>
        <br>Nilai IPA : <b><?php echo $d['un_ipa']; ?></b>
        <br>
        <select name="val_skhun" class="form-control" required>
          <option value="<?php echo $d['val_skhun']; ?>">(Kondisi Awal) <?php echo $d['val_skhun']; ?></option>
          <option value="Data Sesuai">Data Sesuai</option>
          <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
        </select>
      </td>
      <td>
        <embed src="../../../siswa/akl/file/<?php echo $d['pdf_skhun']; ?>" type="application/pdf" width="100%" height="500px">
      </td>
    </tr>
    <tr>
      <td>Surat Sehat dari Dokter
        <select name="val_surat_dokter" class="form-control" required>
          <option value="<?php echo $d['val_surat_dokter']; ?>">(Kondisi Awal) <?php echo $d['val_surat_dokter']; ?></option>
          <option value="Data Sesuai">Data Sesuai</option>
          <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
        </select>
      </td>
      <td>
        <embed src="../../../siswa/akl/file/<?php echo $d['pdf_surat_dokter']; ?>" type="application/pdf" width="100%" height="500px">
      </td>
    </tr>
    <tr>
      <td>Kartu Keluarga
        <br>NIK : <b> <?php echo $d['nik']; ?> </b>
        <br>Nomor KK : <b><?php echo $d['no_kk']; ?></b>
        <br>Tanggal KK Terbit : <b><?php echo $d['tgl_kk']; ?></b>
        <br>
        <select name="val_kk" class="form-control" required>
          <option value="<?php echo $d['val_kk']; ?>">(Kondisi Awal) <?php echo $d['val_kk']; ?></option>
          <option value="Data Sesuai">Data Sesuai</option>
          <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
        </select>
      </td>
      <td>
        <embed src="../../../siswa/akl/file/<?php echo $d['pdf_kk']; ?>" type="application/pdf" width="100%" height="500px">
      </td>
    </tr>
    <tr>
      <td>Akta Kelahiran
        <select name="val_akta" class="form-control" required>
          <option value="<?php echo $d['val_akta']; ?>">(Kondisi Awal) <?php echo $d['val_akta']; ?></option>
          <option value="Data Sesuai">Data Sesuai</option>
          <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
        </select>
      </td>

      <td>
        <embed src="../../../siswa/akl/file/<?php echo $d['pdf_akta']; ?>" type="application/pdf" width="100%" height="500px">
      </td>
    </tr>
    <tr>
      <td>Photo
        <select name="val_photo" class="form-control" required>
          <option value="<?php echo $d['val_photo']; ?>">(Kondisi Awal) <?php echo $d['val_photo']; ?></option>
          <option value="Data Sesuai">Data Sesuai</option>
          <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
        </select>
      </td>
      <td>
        <embed src="../../../siswa/akl/file/<?php echo $d['pdf_photo']; ?>" type="application/pdf" width="100%" height="500px">
      </td>
    </tr>
    <tr>
      <td>SwaPhoto
        <select name="val_swaphoto" class="form-control" required>
          <option value="<?php echo $d['val_swaphoto']; ?>">(Kondisi Awal) <?php echo $d['val_swaphoto']; ?></option>
          <option value="Data Sesuai">Data Sesuai</option>
          <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
        </select>
      </td>
      <td>
        <embed src="../../../siswa/akl/file/<?php echo $d['pdf_swa_kk']; ?>" type="application/pdf" width="100%" height="500px">
      </td>
    </tr>
    <tr>
      <td>Piagam 1
        <select name="val_piagam1" class="form-control" required>
          <option value="<?php echo $d['val_piagam1']; ?>">(Kondisi Awal) <?php echo $d['val_piagam1']; ?></option>
          <option value="Data Sesuai">Data Sesuai</option>
          <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
        </select>
      </td>
      <td>
        <embed src="../../../siswa/akl/file/<?php echo $d['pdf_piagam1']; ?>" type="application/pdf" width="100%" height="500px">
      </td>
    </tr>
    <tr>
      <td>Piagam 2
        <select name="val_piagam2" class="form-control" required>
          <option value="<?php echo $d['val_piagam2']; ?>">(Kondisi Awal) <?php echo $d['val_piagam2']; ?></option>
          <option value="Data Sesuai">Data Sesuai</option>
          <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
        </select>
      </td>
      <td>
        <embed src="../../../siswa/akl/file/<?php echo $d['pdf_piagam2']; ?>" type="application/pdf" width="100%" height="500px">
      </td>
    </tr>
    <tr>
      <td>Piagam 3
        <select name="val_piagam3" class="form-control" required>
          <option value="<?php echo $d['val_piagam3']; ?>">(Kondisi Awal) <?php echo $d['val_piagam3']; ?></option>
          <option value="Data Sesuai">Data Sesuai</option>
          <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
        </select>
      </td>
      <td>
        <embed src="../../../siswa/akl/file/<?php echo $d['pdf_piagam3']; ?>" type="application/pdf" width="100%" height="500px">
      </td>
    </tr>
  </table>

        <center>
          <select style="margin-top: 25px;  width: 30%;" name="kondisi" class="form-control" required>
            <option value="<?php echo $d['kondisi']; ?>">(Kondisi Awal) <?php echo $d['kondisi']; ?></option>
            <option value="Siswa Lolos Seleksi">Siswa Lolos Seleksi</option>
            <option value="Siswa Tidak Lolos Seleksi">Siswa Tidak Lolos Seleksi</option>
          </select>

      <input style="margin-top: 25px; margin-bottom: 80px;" type="submit" name="submit" value="submit" class="btn btn-success">
  </form>
