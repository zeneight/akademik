<?php
include('../Connections/koneksi.php');

$kd_nilai =$_POST['kd_nilai'];
$nim =$_POST['nim'];
$kd_mk =$_POST['kd_mk'];
$nilai =$_POST['nilai'];

//update data di database sesuai user_id
$query = mysql_query("update data_nilai set nim='$nim', kd_mk='$kd_mk', nilai='$nilai' where kd_nilai='$kd_nilai'") or die(mysql_error());

if ($query) {
	header('location:show_nilai.php?message=dirubah');
}
?>