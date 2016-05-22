<?php
include('../Connections/koneksi.php');
?>

<html>
<head>
<title>Edit Data Jadwal</title>
<link rel="stylesheet" type="text/css" href="../css/desain.css">
</head>

<body id="bg3">
<h2 align="center">> Data Jadwal <</h2>

<?php
$kd_jadwal = $_GET['id'];
$kd_mk = $_GET['kd_mk'];
$nidn = $_GET['nidn'];
$kd_kelas = $_GET['kd_kelas'];
$query = mysql_query("select * from data_jadwal where kd_jadwal='$kd_jadwal'") or die(mysql_error());
$row = mysql_fetch_array($query);
?>

<center>
<div id="logo">
<table width="400" height="400" align="center">
<tr>
	<td width="361" height="394">

<form name="update_data" action="update_jadwal.php" method="post">
<input type="hidden" name="kd_jadwal" value="<?php echo $kd_jadwal; ?>" />

  <table width="259" border="0" align="center" cellpadding="3">
    <tr>
      <td align="center" colspan="4"><h3>Edit Data</h3></td>
    </tr>
    <tr>
      <td width="80">Kode</td>
      <td width="4">:</td>
      <td colspan="2"><label for="kd_jadwal"></label>
        <a><?php echo $kd_jadwal; ?></a></td>
    </tr>
    <tr>
      <td>Waktu</td>
      <td>:</td>
      <td width="92"><label for="Waktu"></label>
      M<input class="font2" type="text" size="4" width="80" name="waktu_in" maxlength="5" value="<?php echo $row['waktu_in']; ?>" />
      </td>
      <td width="80"><label for="Waktu"></label>
        S<input class="font2" type="text" size="4"width="80" name="waktu_out" maxlength="5"/ value="<?php echo $row['waktu_out']; ?>">
      </td>
    </tr>
    <tr>
      <td>Kd M.K</td>
      <td>:</td>
      <td colspan="2"><label for="select"></label>
        <select class="select" name="kd_mk" >
          <option>...</option> 
<?php
	$sql_mk = "select * from data_mk";
	$hasil_mk=mysql_query($sql_mk,$koneksi);
	
	while ($data=mysql_fetch_array($hasil_mk)){		
?>
		  <option value="<?php echo $data['kd_mk']; ?>" <?php if ($row['kd_mk']==$data['kd_mk']){echo'selected="selected"';} ?>><?php echo $data['kd_mk']; ?></option>
<?php } ?>
        </select>
      </td>
    </tr>
    
    <tr>
      <td>NIDN</td>
      <td>:</td>
      <td colspan="2"><label for="select"></label>
        <select class="select" name="nidn">
          <option>...</option>
<?php
	$sql_dosen = "select * from data_dosen";
	$hasil_dosen=mysql_query($sql_dosen,$koneksi);
	
	while ($data=mysql_fetch_array($hasil_dosen)){
?>
		  <option value="<?php echo $data['nidn']; ?>" <?php if ($row['nidn']==$data['nidn']){echo'selected="selected"';} ?>><?php echo $data['nidn']; ?></option>
<?php } ?>
        </select></td>
    </tr>
	
    <tr>
      <td>Kd Kelas</td>
      <td>:</td>
      <td colspan="2"><label for="select"></label>
        <select class="select" name="kd_kelas">
          <option>...</option>
<?php
	$sql_k = "select * from data_kelas";
	$hasil_k=mysql_query($sql_k,$koneksi);
	
	while ($data=mysql_fetch_array($hasil_k)){
?>
          <option value="<?php echo $data['kd_kelas']; ?>" <?php if ($row['kd_kelas']==$data['kd_kelas']){echo'selected="selected"';} ?>><?php echo $data['kd_kelas']; ?></option>
<?php } ?>
        </select></td>
    </tr>

    <tr>
      <td height="56" colspan="4" align="center">
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
<center><a href="show_jadwal.php"><< Tabel Data</a> | <a href="../index.php">Menu Admin >></a></center>

<br>
<br>
<div id="footer">
<p>copyright by <i>zeneight</i> <b>(<a href="http://173.252.110.27/zeneight" target="_blank">Agung Priambada</a>)</b> | Created on <i>2014</i> | Politeknik Telkom Bali</p>
</div>

</body>
</html> 