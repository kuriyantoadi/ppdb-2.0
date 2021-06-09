<?php
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "login-gagal") {
        echo "
        <div class='alert alert-danger alert-dismissible' role='alert'>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'></button>
          <div class='alert-message'>
            Username dan Password Salah
          </div>
        </div>

        ";

    }elseif ($_GET['pesan'] == "nisn-gagal") {
       echo "
       <div class='alert alert-danger alert-dismissible' role='alert'>
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
         <div class='alert-message'>
          <strong>Daftar Gagal</strong>, NISN yang anda daftarkan sama dengan Data kami
         </div>
       </div>
       ";
   }
}
?>
