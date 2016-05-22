<?php
include('../Connections/koneksi.php');

$nim =$_POST['nim'];
$nama =$_POST['nama'];
$prodi =$_POST['prodi'];
$status =$_POST['status'];



$sql = "select * from data_mahasiswa where nim=$nim";
$result=mysql_query($sql,$koneksi);
$data = mysql_fetch_array($result);

            $cekdata="select nim from data_mahasiswa where nim='$nim'";
          
            $ada=mysql_query($cekdata) or die(mysql_error());
            
            $ca1=mysql_num_rows($ada)>0;
            $ca2=$data['nama']=$nama;
           
            
            if($ca1 AND $ca2)
               {
                  die("Nim telah Terdaftar!");
               } 
                  else
                     {  
                        $query="insert into data_mahasiswa
                        values('$nim','$nama','$prodi','$status')";
                        $proses=mysql_query($query,$koneksi) or die ("Error"); 
                     }


if ($proses) {
	header('location:show_mahasiswa.php?message=disimpan');
}
?>