<?php  
include('../Connections/koneksi.php');

$kd_nilai =$_GET['id'];    
$del="delete from data_nilai where kd_nilai = '$kd_nilai' ";  
 
$query=mysql_query($del) or die (mysql_error());  
 

if ($query) {
	header('location:show_nilai.php?message=dihapus');
}
?>
