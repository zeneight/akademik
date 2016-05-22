<?php  
include('../Connections/koneksi.php');

$kd_mk =$_GET['id'];    
$del="delete from data_mk where kd_mk = '$kd_mk' ";  
 
$query=mysql_query($del) or die (mysql_error());  
 

if ($query) {
	header('location:show_mk.php?message=dihapus');
}
?>
