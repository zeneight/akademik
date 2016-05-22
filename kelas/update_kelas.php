<?php
include('../Connections/koneksi.php');

//tangkap data dari form
$kd_kelas = $_POST['kd_kelas'];
$nama = $_POST['nama'];
$kapasitas = $_POST['kapasitas'];

//update data di database sesuai user_id
$query = mysql_query("update data_kelas set nama='$nama', kapasitas='$kapasitas' where kd_kelas='$kd_kelas'") or die(mysql_error());

if ($query) {
	header('location:show_kelas.php?message=dirubah');
}
?>