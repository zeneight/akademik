<?php
include('../Connections/koneksi.php');

$nidn =$_POST['nidn'];
$nama =$_POST['nama'];
$email =$_POST['email'];
$status =$_POST['status'];

$query="insert into data_dosen
values('$nidn','$nama','$email','$status')";

$proses=mysql_query($query,$koneksi) or die ("Error"); 

if ($proses) {
	header('location:show_dosen.php?message=disimpan');
}
?>
