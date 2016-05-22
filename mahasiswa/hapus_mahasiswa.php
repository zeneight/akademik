<?php  
include('../Connections/koneksi.php');

$nim =$_GET['nim'];    
$del="delete from data_mahasiswa where nim = '$nim' ";  
 
$query=mysql_query($del) or die (mysql_error());  
 

if ($query) {
	header('location:show_mahasiswa.php?message=dihapus');
}
?>
