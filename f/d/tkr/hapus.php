<?php
// koneksi database
include '../../../koneksi.php';


session_start();
if ($_SESSION['status']!="tkr" && $_SESSION['status']!="admin") {
    header("location:../../index.php?pesan=belum_login");
} else {


$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * from f_siswa_tkr where id='$id'");
while ($d = mysqli_fetch_array($data)) {

  //hapus file siswa
  unlink("../../../assets/file_upload/tkr/$d[pdf_kk]");
  unlink("../../../assets/file_upload/tkr/$d[pdf_kip]");
  unlink("../../../assets/file_upload/tkr/$d[pdf_akta]");
  unlink("../../../assets/file_upload/tkr/$d[pdf_photo]");
  unlink("../../../assets/file_upload/tkr/$d[pdf_skhun]");
  unlink("../../../assets/file_upload/tkr/$d[pdf_surat_dokter]");
  unlink("../../../assets/file_upload/tkr/$d[pdf_swa_kk]");

  unlink("../../../assets/file_upload/tkr/$d[pdf_piagam1]");
  unlink("../../../assets/file_upload/tkr/$d[pdf_piagam2]");
  unlink("../../../assets/file_upload/tkr/$d[pdf_piagam3]");

  unlink("../../../assets/file_upload/tkr/$d[pdf_rapor_2]");
  unlink("../../../assets/file_upload/tkr/$d[pdf_rapor_3]");
  unlink("../../../assets/file_upload/tkr/$d[pdf_rapor_4]");
  unlink("../../../assets/file_upload/tkr/$d[pdf_rapor_5]");
  unlink("../../../assets/file_upload/tkr/$d[pdf_rapor_6]");
}

mysqli_query($koneksi, "delete from f_siswa_tkr where id='$id' ");


header("location:index.php");
}
