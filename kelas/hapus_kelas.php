<?php  
include('../Connections/koneksi.php');

$kd_kelas =$_GET['id'];    
$del="delete from data_kelas where kd_kelas = '$kd_kelas' ";  
 
$query=mysql_query($del) or die (mysql_error());  
 

if ($query) {
	header('location:show_kelas.php?message=dihapus');
}
?>
