<?php
include('../Connections/koneksi.php');

//tangkap data dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$status = $_POST['status'];

//update data di database sesuai user_id
$query = mysql_query("update data_mahasiswa set nama='$nama', prodi='$prodi', status='$status' where nim='$nim'") or die(mysql_error());

if ($query) {
	header('location:show_mahasiswa.php?message=dirubah');
}
?>