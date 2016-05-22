<?php
include('../Connections/koneksi.php');
?>

<html>
<head>
<title>Edit Data Mahasiswa</title>
<link rel="stylesheet" type="text/css" href="../css/desain.css">
</head>

<body id="bg">
<h2 align="center">> Data Mahasiswa <</h2>

<?php
$nim = $_GET['nim'];
$query = mysql_query("select * from data_mahasiswa where nim='$nim'") or die(mysql_error());
$data = mysql_fetch_array($query);
?>

<table width="400" height="400" align="center" background="../image/logo.jpg">
<tr>
	<td width="361" height="394">

<form name="update_data" action="update_mahasiswa.php" method="post">
<input type="hidden" name="nim" value="<?php echo $nim; ?>" />

  <table width="251" border="0" align="center" cellpadding="3">
    <tr>
      <td align="center" colspan="3"><h3><i>Edit</i> Data</h3></td>
    </tr>
    <tr>
      <td width="51">NIM</td>
      <td width="7">:</td>
      <td width="182">
        <?php echo $data['nim']; ?>
      </td>
    </tr>
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td>
      	<div id="inputwrapper">
        <label for="nama">
        <input class="inputbox" type="text" width="180" name="nama" id="nama" maxlength="30" value="<?php echo $data['nama']; ?>"/></label>
        </div>
      </td>
    </tr>
    <tr>
      <td>Prodi</td>
      <td>:</td>
      <td><label for="select">
        <select name="prodi" class="select">
          <option value="Teknik Informatika" <?php if ($data['prodi']=="Teknik Informatika"){echo'selected="selected"';} ?>>T. Informatika</option>
          <option value="Teknik Telekomunikasi" <?php if ($data['prodi']=="Teknik Telekomunikasi"){echo'selected="selected"';} ?>>T. Telekom</option>
          <option value="Komputer Akutansi" <?php if ($data['prodi']=="Komputer Akutansi"){echo'selected="selected"';} ?>>K. Akutansi</option>
        </select></label>
      </td>
    </tr>
    <tr>
      <td>Status</td>
      <td>:</td>
      <td><label for="select2"></label>
        <select name="status" class="select">
          <option value="Aktif" <?php if ($data['status']=="Aktif"){echo'selected="selected"';} ?>>Aktif</option>
          <option value="Cuti" <?php if ($data['status']=="Cuti"){echo'selected="selected"';} ?>>Cuti</option>
        </select></td>
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
<center><a href="show_mahasiswa.php"><< Tabel Data</a> | <a href="../index.php">Menu Admin >></a></center>

<br>
<br>
<div id="footer">
<p>copyright by <i>zeneight</i> <b>(<a href="http://173.252.110.27/zeneight" target="_blank">Agung Priambada</a>)</b> | Created on <i>2014</i> | Politeknik Telkom Bali</p>
</div>

</body>
</html>