<?php
include('../Connections/koneksi.php');

//tangkap data dari form
$kd_mk = $_POST['kd_mk'];
$nama = $_POST['nama'];
$sks = $_POST['sks'];
$semester = $_POST['semester'];

//update data di database sesuai user_id
$query = mysql_query("update data_dosen set nama='$nama', sks='$sks', semester='$semester' where kd_mk='$kd_mk'") or die(mysql_error());

if ($query) {
	header('location:show_dosen.php?message=dirubah');
}
?>