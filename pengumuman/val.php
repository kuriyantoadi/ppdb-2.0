<?php


$kondisi_validasi = $d['kondisi_validasi'];
if ($kondisi_validasi == "Berkas Sesuai") {
 echo "<span class='label label-success'>Berkas Sesuai</span>";
} elseif ($kondisi_validasi == "Berkas Tidak Sesuai") {
 echo "<span class='label label-danger'>Berkas Tidak Sesuai</span>";
} else {
 echo "<span class='label label-warning'>Tahap Pengecekan Operator</span>";
}

 ?>
