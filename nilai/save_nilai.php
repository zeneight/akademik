<?php
include('../Connections/koneksi.php');

$kd_nilai =$_POST['kd_nilai'];
$nim =$_POST['nim'];
$kd_mk =$_POST['kd_mk'];
$nilai =$_POST['nilai'];

$query="insert into data_nilai
values('$kd_nilai','$nim','$kd_mk','$nilai')";

$proses=mysql_query($q,$koneksi) or die ("Error"); 

if ($proses) {
	header('location:show_nilai.php?message=disimpan');
}
?>
