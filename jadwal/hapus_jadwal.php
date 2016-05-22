<?php  
include('../Connections/koneksi.php');

$kd_jadwal =$_GET['id'];    
$del="delete from data_jadwal where kd_jadwal = '$kd_jadwal' ";  
 
$query=mysql_query($del) or die (mysql_error());  
 

if ($query) {
	header('location:show_jadwal.php?message=dihapus');
}
?>