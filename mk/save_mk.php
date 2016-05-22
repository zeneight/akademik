<?php
include('../Connections/koneksi.php');

$kd_mk =$_POST['kd_mk'];
$nama =$_POST['nama'];
$sks =$_POST['sks'];
$semester =$_POST['semester'];

$query="insert into data_mk
values('$kd_mk','$nama','$sks','$semester')";

$proses=mysql_query($query,$koneksi) or die ("Error"); 

if ($proses) {
	header('location:show_mk.php?message=disimpan');
}
?>
