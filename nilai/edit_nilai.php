<?php
include('../Connections/koneksi.php');
?>

<html>
<head>
<title>Edit Data Nilai</title>
<link rel="stylesheet" type="text/css" href="../css/desain.css">
</head>

<body id="bg5">
<h2 align="center">> Data Nilai <</h2>

<?php
$kd_nilai = $_GET['id'];
$query = mysql_query("select * from data_nilai where kd_nilai='$kd_nilai'") or die(mysql_error());
$row = mysql_fetch_array($query);
?>

<table width="400" height="400" align="center" background="../image/logo.jpg">
<tr>
	<td width="361" height="394">

<form name="update_data" action="update_nilai.php" method="post">
<input type="hidden" name="kd_nilai" value="<?php echo $kd_nilai; ?>" />

  <table width="251" border="0" align="center" cellpadding="3">
    <tr>
      <td align="center" colspan="3"><h3><i>Edit</i> Data</h3></td>
    </tr>
    <tr>
      <td width="51">Kode</td>
      <td width="7">:</td>
      <td width="182">
         <?php echo $kd_nilai; ?>      
        </td>
    </tr>
    <tr>
      <td>NIM</td>
      <td>:</td>
      <td><label for="select"></label>
        <select class="select" name="nim">
          <option>...</option>
<?php
	$sql_mhs = "select * from data_mahasiswa";
	$hasil_mhs=mysql_query($sql_mhs,$koneksi);
	
	while ($data=mysql_fetch_array($hasil_mhs)){
?>
		  <option value="<?php echo $data['nim']; ?>" <?php if ($row['nim']==$data['nim']){echo'selected="selected"';} ?>><?php echo $data['nim']; ?></option>
<?php } ?>
        </select></td>
    </tr>
    <tr>
      <td>Prodi</td>
      <td>:</td>
      <td><label for="select"></label>
        <select class="select" name="kd_mk" >
          <option>...</option> 
<?php
	$sql_mk = "select * from data_mk";
	$hasil_mk=mysql_query($sql_mk,$koneksi);
	
	while ($data=mysql_fetch_array($hasil_mk)){		
?>
		  <option value="<?php echo $data['kd_mk']; ?>" <?php if ($row['kd_mk']==$data['kd_mk']){echo'selected="selected"';} ?>><?php echo $data['kd_mk']; ?></option>
<?php } ?>
        </select></td>
    </tr>
    <tr>
      <td>Nilai</td>
      <td>:</td>
      <td><div id="inputwrapper">
        <label for="nilai">
        <input class="inputbox" type="text" width="180" name="nilai" maxlength="5" value="<?php echo $row['nilai']; ?>">
		</label>       
        </div></td>
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
<center><a href="show_nilai.php"><< Tabel Data</a> | <a href="../index.nilai">Menu Admin >></a></center>

<br>
<br>
<div id="footer">
<p>copyright by <i>zeneight</i> <b>(<a href="http://173.252.110.27/zeneight" target="_blank">Agung Priambada</a>)</b> | Created on <i>2014</i> | Politeknik Telkom Bali</p>
</div>

</body>
</html> 