<?php
//koneksi ke database
include('../Connections/koneksi.php');
?>

<html>
<head>
<title>Tabel Data Mahasiswa</title>
<link rel="stylesheet" type="text/css" href="../css/desain.css">
</head>

<body id="bg0">
<h2 align="center">> Tabel Data Mahasiswa <</h2>


<?php 
//ambil search

$n_cari=isset($_POST['n_cari']) ? $_POST['n_cari'] : '';
$id_cari=isset($_POST['id_cari']) ? $_POST['id_cari'] : '';


//--akhir search--

$msg=isset($_GET['message']) ? $_GET['message']:'';
if ($msg=="dihapus"){echo"<br><center><h3>>> "
?><z>
<?php	
echo"[PERHATIAN!]";
?></z>
<?php
echo" Data berhasil di Hapus <<</h3></center>"; 
} ?>

<?php 
if ($msg=="disimpan"){echo"<br><center><h3>>> "
?><z>
<?php	
echo"[PERHATIAN!]";
?></z>
<?php
echo" Data berhasil di Tambahkan <<</h3></center>"; 
} ?>

<?php 
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

<table border="0" align="center">
  <tr>
  	<td>
  

<form method="post" action="">  
  <div id="searchwrapper">
      <input type="text" class="searchbox" name="id_cari" placeholder="Cari ID.."/>
  </div>
  <div id="searchwrapper">
      <input type="text" class="searchbox" name="n_cari" placeholder="Cari Nama.."/>
      <input type="image" src="../image/submit_form.png" class="searchbox_submit" hidden="hidden" />
  </div>
</form>


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

if (isset($n_cari) && empty($id_cari)) {
    $sql = "SELECT * FROM data_mahasiswa WHERE nama LIKE '%$n_cari%'";
} else if (isset($id_cari) && empty($n_cari)) {
    $sql = "SELECT * FROM data_mahasiswa WHERE nim LIKE '%$id_cari%'";
} else if (isset($id_cari) && isset($n_cari)) {
    $sql = "SELECT * FROM data_mahasiswa WHERE nim LIKE '%$id_cari%' AND nama LIKE '%$n_cari%'";
} else {
    $sql = "SELECT * FROM data_mahasiswa ORDER BY nim ASC";    
}

//eksekusi query
$result=mysqli_query($koneksi,$sql);
$no = 1 ;

if (mysqli_num_rows($result) == 0) {
      echo "
      <tr>
        <td align='center' colspan='6'> - Tidak Ada Data - </td> 
      </tr>
      "; 
}
//memasukkan data ke array
while ($data=mysqli_fetch_array($result)){
?>

 <tr>
  <td align="center"><?php echo $no++; ?></td>
  <td><?php echo $data['nim'] ?></td>
  <td><?php echo $data['nama'] ?></td>
  <td><?php echo $data['prodi'] ?></td>
  <td align="center"><?php echo $data['status'] ?></td>
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