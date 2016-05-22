<?php
include('../Connections/koneksi.php');

//tangkap data dari form
$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$status = $_POST['status'];

//update data di database sesuai user_id
$query = mysql_query("update data_dosen set nama='$nama', email='$email', status='$status' where nidn='$nidn'") or die(mysql_error());

if ($query) {
	header('location:show_dosen.php?message=dirubah');
}
?>