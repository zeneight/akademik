<?php
include('../Connections/koneksi.php');

$kd_jadwal =$_POST['kd_jadwal'];
$waktu_in =$_POST['waktu_in'];
$waktu_out =$_POST['waktu_out'];
$kd_mk =$_POST['kd_mk'];
$nidn =$_POST['nidn'];
$kd_kelas =$_POST['kd_kelas'];

$query="insert into data_jadwal
values('$kd_jadwal','$waktu_in','$waktu_out','$kd_mk','$nidn','$kd_kelas')";

$proses=mysql_query($query,$koneksi) or die ("Error"); 

if ($proses) {
	header('location:show_jadwal.php?message=disimpan');
}
?>
