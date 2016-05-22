<?php
include('../Connections/koneksi.php');
?>

<html>
<head>
<title>Edit Data Kelas</title>
<link rel="stylesheet" type="text/css" href="../css/desain.css">
</head>

<body id="bg6">
<h2 align="center">> Data Kelas <</h2>

<?php
$kd_kelas = $_GET['id'];
$query = mysql_query("select * from data_kelas where kd_kelas='$kd_kelas'") or die(mysql_error());
$data = mysql_fetch_array($query);
?>

<center>
<div id="logo">
<table width="400" height="400" align="center">
<tr>
	<td width="361" height="394">

<form name="update_data" action="update_kelas.php" method="post">
<input type="hidden" name="kd_kelas" value="<?php echo $kd_kelas; ?>" />

  <table width="251" border="0" align="center" cellpadding="3">
    <tr>
      <td align="center" colspan="3"><h3><i>Edit</i> Data</h3></td>
    </tr>
    <tr>
      <td width="51">Kode</td>
      <td width="7">:</td>
      <td width="182"><label for="kd_kelas"></label>
        <?php echo $kd_kelas; ?></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><label for="nama"></label>
        <input class="font" type="text" width="180" name="nama" id="nama" maxlength="25" value="<?php echo $data['nama']; ?>"/></td>
    </tr>
    <tr>
      <td>Kapasitas</td>
      <td>:</td>
      <td><label for="kapasitas"></label>
        <input class="font" type="text" width="180" name="kapasitas" maxlength="3" value="<?php echo $data['kapasitas']; ?>"/></td>
    </tr>
    <tr>
      <td height="56" colspan="3" align="center">
  	   <input type="submit" id="submit" style="display:none;">
       <img 
   onclick="document.getElementById('submit').click()" 
   src="../image/submit.jpg" 
   width="50" 
   height="46"  
   title="Click untuk submit form.">
      </td>
    </tr>
  </table>
</form>
	</td>
</tr>
</table>
</div>
</center>

<br>
<center><a href="show_kelas.php"><< Tabel Data</a> | <a href="../index.php">Menu Admin >></a></center>

<br>
<br>
<div id="footer">
<p>copyright by <i>zeneight</i> <b>(<a href="http://173.252.110.27/zeneight" target="_blank">Agung Priambada</a>)</b> | Created on <i>2014</i> | Politeknik Telkom Bali</p>
</div>

</body>
</html> 