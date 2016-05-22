<?php  
include('../Connections/koneksi.php');

$nidn =$_GET['nid'];    
$del="delete from data_dosen where nidn = '$nidn' ";  
 
$query=mysql_query($del) or die (mysql_error());  
 

if ($query) {
	header('location:show_dosen.php?message=dihapus');
}
?>
