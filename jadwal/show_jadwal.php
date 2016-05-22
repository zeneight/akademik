<?php
//koneksi ke database
include('../Connections/koneksi.php');
?>
<html>
<head>
<title>Tabel Data Jadwal</title>
<link rel="stylesheet" type="text/css" href="../css/desain.css">
</head>

<body id="bg0">
<h2 align="center">> Tabel Data Jadwal <</h2>


<?php 
$msg=$_GET['message'];
if ($msg=="dihapus"){echo"<br><center><h3>>> "
?><z>
<?php	
echo"[PERHATIAN!]";
?></z>
<?php
echo" Data berhasil di Hapus <<</h3></center>"; 
} ?>

<?php 
$msg=$_GET['message'];
if ($msg=="disimpan"){echo"<br><center><h3>>> "
?><z>
<?php	
echo"[PERHATIAN!]";
?></z>
<?php
echo" Data berhasil di Tambahkan <<</h3></center>"; 
} ?>

<?php 
$msg=$_GET['message'];
if ($msg=="dirubah"){echo"<br><center><h3>>> "
?><z>
<?php	
echo"[PERHATIAN!]";
?></z>
<?php
echo" Data berhasil di Rubah <<</h3></center>"; 
} ?>

<br />
<center><a href="add_jadwal.php"><< Input Data</a> | <a href="../index.php">Menu Admin >></a></center>
<br /> 
<table align="center" width="800" cellpadding="4" bordercolordark="#FFFFFF" border="1">

  <tr align="center" bgcolor="#333333">
  	<td rowspan="2">NO</td>
    <td rowspan="2">KODE JADWAL</td>
    <td colspan="2">WAKTU</td>
    <td rowspan="2">KODE M.K</td>
    <td rowspan="2">NIDN</td>
    <td rowspan="2">KODE KELAS</td>
    <td rowspan="2">AKSI</td>
  </tr>
  
  <tr align="center" bgcolor="#333333">
    <td>Mulai</td>
    <td>Selesai</td>
  </tr>

<?php
$sql = "select * from data_jadwal order by kd_jadwal asc";
//eksekusi query
$result=mysql_query($sql,$koneksi);
$no = 1 ;

//memasukkan data ke array
while ($data=mysql_fetch_array($result)){
?>

 <tr>
  <td align="center"><?php echo $no++; ?></td>
  <td><?php echo $data['kd_jadwal'] ?></td>
  <td><?php echo $data['waktu_in'] ?></td>
  <td><?php echo $data['waktu_out'] ?></td>
  <td><?php echo $data['kd_mk'] ?></td>
  <td><?php echo $data['nidn'] ?></td>
  <td><?php echo $data['kd_kelas'] ?></td>
  <td>
  	<div align="center">
  		<a href="hapus_jadwal.php?id=<?php echo $data['kd_jadwal']; ?>"
        onclick="return confirm('Apakah anda yakin akan menghapus data?' + '\n\n' + 
        '<?php echo "Kode Jadwal: $data[kd_jadwal]";?>' + '\n\n' + 
        'Jika YA silahkan klik OK, jika TIDAK silahkan klik CANCEL.')">Delete</a> | 
        <a href="edit_jadwal.php?id=<?php echo $data['kd_jadwal']; ?>&kd_mk=<?php echo $data['kd_mk']; ?>&nidn=<?php echo $data['nidn']; ?>&kd_kelas=<?php echo $data['kd_kelas']; ?>">Edit</a> 
    </div>
  </td>


 </tr>
 
<?php } ?>
</table>

</br>
<center><a href="add_jadwal.php"><< Input Data</a>
 | <a href="../index.php">Menu Admin >></a></center>

<br>
<br>
<div id="footer">
<p>copyright by <i>zeneight</i> <b>(<a href="http://173.252.110.27/zeneight" target="_blank">Agung Priambada</a>)</b> | Created on <i>2014</i> | Politeknik Telkom Bali</p>
</div>

</body>
</html>