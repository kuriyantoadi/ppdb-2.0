<?php


$kondisi_validasi = $d['kondisi_validasi'];
if ($kondisi_validasi == "Data Sesuai") {
 echo "<span class='label label-success'>Data Sesuai</span>";
} elseif ($kondisi_validasi == "Data Tidak Sesuai") {
 echo "<span class='label label-danger'>Data Tidak Sesuai</span>";
} else {
 echo "<span class='label label-warning'>Tahap Pengecekan Operator</span>";
}


 ?>
