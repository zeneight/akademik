<?php
include('../Connections/koneksi.php');
?>

<html>
<head>
<title>Edit Data Mata Kuliah</title>
<link rel="stylesheet" type="text/css" href="../css/desain.css">
</head>

<body id="bg4">
<h2 align="center">> Data Mata Kuliah <</h2>

<?php
$kd_mk = $_GET['id'];
$query = mysql_query("select * from data_mk where kd_mk='$kd_mk'") or die(mysql_error());
$data = mysql_fetch_array($query);
?>

<table width="400" height="400" align="center" background="../image/logo.jpg">
<tr>
	<td width="361" height="394">

<form name="update_data" action="update_mk.php" method="post">
<input type="hidden" name="kd_mk" value="<?php echo $kd_mk; ?>" />

  <table width="251" border="0" align="center" cellpadding="3">
    <tr>
      <td align="center" colspan="3"><h3><i>Edit</i> Data</h3></td>
    </tr>
    <tr>
      <td width="51">Kode M.K</td>
      <td width="7">:</td>
      <td width="182"><label for="kd_mk"></label>
        <?php echo $data['kd_mk']; ?></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><label for="nama"></label>
        <input class="font" type="text" width="180" name="nama" id="nama" maxlength="30" value="<?php echo $data['nama']; ?>"/></td>
    </tr>
    <tr>
      <td>SKS</td>
      <td>:</td>
      <td><label for="sks"></label>
        <input class="font" type="text" width="180" name="sks" maxlength="2" value="<?php echo $data['sks']; ?>"/></td>
    </tr>
    <tr>
      <td>Semester</td>
      <td>:</td>
      <td><label for="semester"></label>
        <input class="font" type="text" width="180" name="semester" maxlength="2" value="<?php echo $data['semester']; ?>"/></td>
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

<br>
<center><a href="show_mk.php"><< Tabel Data</a> | <a href="../index.php">Menu Admin >></a></center>

<br>
<br>
<div id="footer">
<p>copyright by <i>zeneight</i> <b>(<a href="http://173.252.110.27/zeneight" target="_blank">Agung Priambada</a>)</b> | Created on <i>2014</i> | Politeknik Telkom Bali</p>
</div>

</body>
</html> 