<?php

  $no=1;

  function tampil_diterima($nama_jur){
    include '../../koneksi.php';
    $data = mysqli_query($koneksi, "SELECT *  from f_pengumuman where kompetensi_keahlian='$nama_jur' AND kondisi='DITERIMA' ");
    $rekap_diterima = mysqli_num_rows($data);
    // result($rekap_diterima);
    echo $rekap_diterima;
  }

  function tampil_upload($nama_jur){
    include '../../koneksi.php';
    $data = mysqli_query($koneksi, "SELECT *  from f_pengumuman where kompetensi_keahlian='$nama_jur'
      AND kondisi='DITERIMA' AND kondisi_upload_berkas='DATA SESUAI'");
    $rekap_upload = mysqli_num_rows($data);
    // result($rekap_diterima);
    echo $rekap_upload;
  }

  function tampil_val($nama_jur){
    include '../../koneksi.php';
    $data = mysqli_query($koneksi, "SELECT *  from f_pengumuman where kompetensi_keahlian='$nama_jur'
      AND kondisi='DITERIMA' AND kondisi_upload_berkas IS NOT NULL ");
    $rekap_val = mysqli_num_rows($data);
    // result($rekap_diterima);
    echo $rekap_val;
  }

  function tampil_daftarulang($nama_jur){
    include '../../koneksi.php';
    $data = mysqli_query($koneksi, "SELECT *  from f_pengumuman where kompetensi_keahlian='$nama_jur'
      AND kondisi='DITERIMA' AND kondisi_upload_berkas='Data Sesuai' AND kondisi_daftarulang='Sudah Daftar Ulang'");
    $rekap_daftarulang = mysqli_num_rows($data);
    // result($rekap_diterima);
    echo $rekap_daftarulang;
  }

?>
