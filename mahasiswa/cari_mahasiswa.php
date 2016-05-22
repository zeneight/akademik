<?php
include('../Connections/koneksi.php');

$cari = trim($_POST['cari']);
?>
<html>
<head>
<title>Tabel Data Mahasiswa</title>
<link rel="stylesheet" type="text/css" href="../css/desain.css">
</head>

<body>
<h2 align="center">> Tabel Data Mahasiswa <</h2>


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
<div><center><a href="add_mahasiswa.php"><< Input Data</a> | <a href="../index.php">Menu Admin >></a>

</center>
<br />

<table align="center" border="0">
  <tr>
  	<td>
	   <div id="searchwrapper">
      <form method="post" action="cari_mahasiswa.php">
		 <input type="text" class="searchbox" name="cari" value="Cari Nama.." />
		 <input type="image" src="../image/submit_form.png" class="searchbox_submit" value="" />
		</form>
       </div>

<table align="center" width="800" cellpadding="4" bordercolordark="#FFFFFF" border="1">

  <tr align="center" bgcolor="#333333">
  	<td>NO</td>
    <td>NIM</td>
    <td>NAMA</td>
    <td>PRODI</td>
    <td>STATUS</td>
    <td>AKSI</td>
  </tr>

<?php
$q = mysql_query("select * from data_mahasiswa where nama like '%$cari%'");
$no = 1 ;

while($data = mysql_fetch_array($q)){
?>

 <tr>
  <td align="center"><?php echo $no++; ?></td>
  <td><?php echo $data[nim] ?></td>
  <td><?php echo $data[nama] ?></td>
  <td><?php echo $data[prodi] ?></td>
  <td align="center"><?php echo $data[status] ?></td>
  <td>
  	<div align="center">
  		<a href="hapus_mahasiswa.php?nim=<?php echo $data['nim']; ?>"
        onclick="return confirm('Apakah anda yakin akan menghapus data?' + '\n\n' + 
        '<?php echo "Nama Mahasiswa: $data[nama]";?>' + '\n\n' + 
        'Jika YA silahkan klik OK, jika TIDAK silahkan klik CANCEL.')">Delete</a> | 
        <a href="edit_mahasiswa.php?nim=<?php echo $data['nim']; ?>">Edit</a> 
    </div>
  </td>


 </tr>
 
<?php } ?>
</table>

	</td>
  </tr>
</table>


</br>
<center><a href="add_mahasiswa.php"><< Input Data</a>
 | <a href="../index.php">Menu Admin >></a></center>

<br>
<br>
<div id="footer">
<p>copyright by <i>zeneight</i> <b>(<a href="http://173.252.110.27/zeneight" target="_blank">Agung Priambada</a>)</b> | Created on <i>2014</i> | Politeknik Telkom Bali</p>
</div>

</body>
</html>