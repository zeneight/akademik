<?php
include('../Connections/koneksi.php');

$kd_kelas =$_POST['kd_kelas'];
$nama =$_POST['nama'];
$kapasitas =$_POST['kapasitas'];

$query="insert into data_kelas
values('$kd_kelas','$nama','$kapasitas')";

$proses=mysql_query($query,$koneksi) or die ("Error"); 

if ($proses) {
	header('location:show_kelas.php?message=disimpan');
}
?>
