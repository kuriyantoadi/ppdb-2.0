<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include '../../koneksi.php';

// menangkap data yang dikirim dari form
// belum mengunakan MD5
$username = addslashes(trim($_POST['username']));
// $username = $_POST['username'];
$password = md5($_POST['password']);

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "select * from f_login where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);


if ($cek > 0) {
    $login = mysqli_fetch_assoc($data);

    if ($login['level']=="admin") {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "admin";
        header("location:a/index.php");

    } elseif ($login['level']=="tkj") {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "op";
        $_SESSION['jur'] = "Teknik Komputer dan Jaringan";
        $_SESSION['kode_jur'] = "tkj";
        header("location:dashboard.php");

    } elseif ($login['level']=="rpl") {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "op";
        $_SESSION['jur'] = "Rekayasa Perangkat Lunak";
        $_SESSION['kode_jur'] = "rpl";
        header("location:dashboard.php");

    } elseif ($login['level']=="otkp") {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "op";
        $_SESSION['jur'] = "Otomatisasi dan Tata Kelola Perkantoran";
        $_SESSION['kode_jur'] = "otkp";
        header("location:dashboard.php");

    } elseif ($login['level']=="akl") {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "op";
        $_SESSION['jur'] = "Akuntansi dan Keuangan Lembaga";
        $_SESSION['kode_jur'] = "akl";
        header("location:dashboard.php");

    } elseif ($login['level']=="tkr") {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "op";
        $_SESSION['jur'] = "Teknik Kendaraan Ringan Otomotif";
        $_SESSION['kode_jur'] = "tkr";
        header("location:dashboard.php");

    } elseif ($login['level']=="tpm") {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "op";
        $_SESSION['jur'] = "Teknik Pemesinan";
        $_SESSION['kode_jur'] = "tpm";
        header("location:dashboard.php");

    } elseif ($login['level']=="pos3") {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "pos3";
        header("location:r/index.php");

    } else {
        // echo "gagal1";
        header("location:index.php?pesan=gagal1");
    }
} else {
    // echo "gagal2";

    header("location:index.php?pesan=gagal");
}