<?php
include('../Connections/koneksi.php');

//tangkap data dari form
$kd_jadwal = $_POST['kd_jadwal'];
$waktu_in = $_POST['waktu_in'];
$waktu_out = $_POST['waktu_out'];
$kd_mk = $_POST['kd_mk'];
$nidn = $_POST['nidn'];
$kd_kelas = $_POST['kd_kelas'];

//update data di database sesuai user_id
$query = mysql_query("update data_jadwal set waktu_in='$waktu_in', waktu_out='$waktu_out', kd_mk='$kd_mk', nidn='$nidn', kd_kelas='$kd_kelas' where kd_jadwal='$kd_jadwal'") or die(mysql_error());

if ($query) {
	header('location:show_jadwal.php?message=dirubah');
}
?>