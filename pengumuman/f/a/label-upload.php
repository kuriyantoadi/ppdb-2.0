<?php

$kondisi_validasi = $d['kondisi_validasi'];
if ($kondisi_validasi == "Data Sesuai") {
 echo "<span class='label label-success'>Data Sesuai</span>";

} elseif ($kondisi_validasi == "Data Tidak Sesuai") {
 echo "<span class='label label-danger'>Data Tidak Sesuai</span>";

} elseif ($d['pdf_pakta'] == "") {
 echo "<span class='label label-default'>Data Belum Di upload</span>";

} elseif ($d['pdf_pakta'] =! "" && $kondisi_validasi == "" ){
 echo "<span class='label label-warning'>Tahap Pengecekan Operator</span>";

} else {
 echo "<span class='label label-warning'></span>";
}



 ?>
