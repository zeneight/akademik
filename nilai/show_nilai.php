<?php
//koneksi ke database
include('../Connections/koneksi.php');
?>
<html>
<head>
<title>Tabel Data Nilai</title>
<link rel="stylesheet" type="text/css" href="../css/desain.css">
</head>

<body id="bg0">
<h2 align="center">> Tabel Data Nilai <</h2>


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
<center><a href="add_nilai.php"><< Input Data</a> | <a href="../index.php">Menu Admin >></a></center>
<br /> 
<table align="center" width="800" cellpadding="4" bordercolordark="#FFFFFF" border="1">

  <tr align="center" bgcolor="#333333">
  	<td>NO</td>
    <td>KODE</td>
    <td>NIM</td>
    <td>KODE M.K</td>
    <td>NILAI</td>
    <td>AKSI</td>
  </tr>

<?php
$sql = "select * from data_nilai order by kd_nilai asc";
//eksekusi query
$result=mysql_query($sql,$koneksi);
$no = 1 ;

//memasukkan data ke array
while ($data=mysql_fetch_array($result)){
?>

 <tr>
  <td align="center"><?php echo $no++; ?></td>
  <td><?php echo $data['kd_nilai'] ?></td>
  <td><?php echo $data['nim'] ?></td>
  <td align="center"><?php echo $data['kd_mk'] ?></td>
  <td align="center"><?php echo $data['nilai'] ?></td>
  <td>
  	<div align="center">
  		<a href="hapus_nilai.php?id=<?php echo $data['kd_nilai']; ?>"
        onclick="return confirm('Apakah anda yakin akan menghapus data?' + '\n\n' + 
        '<?php echo "NIM: $data[nim]";?>' + '\n\n' + 
        'Jika YA silahkan klik OK, jika TIDAK silahkan klik CANCEL.')">Delete</a> | 
        <a href="edit_nilai.php?id=<?php echo $data['kd_nilai']; ?>">Edit</a> 
    </div>
  </td>


 </tr>
 
<?php } ?>
</table>

</br>
<center><a href="add_nilai.php"><< Input Data</a>
 | <a href="../index.php">Menu Admin >></a></center>

<br>
<br>
<div id="footer">
<p>copyright by <i>zeneight</i> <b>(<a href="http://173.252.110.27/zeneight" target="_blank">Agung Priambada</a>)</b> | Created on <i>2014</i> | Politeknik Telkom Bali</p>
</div>

</body>
</html>