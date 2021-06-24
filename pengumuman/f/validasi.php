<?php
// koneksi database
include '../../koneksi.php';


session_start();
if ($_SESSION['status']!="admin" && $_SESSION['status']!="op") {
    header("location:../index.php?pesan=belum_login");
} else {
    $id = $_POST['id'];
    $val_dapodik = $_POST['val_dapodik'];
    $val_pakta = $_POST['val_pakta'];
    $val_swa_pakta = $_POST['val_swa_pakta'];

    $catatan_operator = $_POST['catatan_operator'];
    $kondisi_validasi = $_POST['kondisi_validasi'];

    mysqli_query($koneksi, "UPDATE f_pengumuman SET
               id='$id',
               val_dapodik='$val_dapodik',
               val_pakta='$val_pakta',
               val_swa_pakta='$val_swa_pakta',
               catatan_operator='$catatan_operator',
               kondisi_validasi='$kondisi_validasi'

               where id='$id'
               ") or die(mysqli_error($koneksi));

    header("location:dashboard.php?id=$id&pesan=val_berhasil");
}
