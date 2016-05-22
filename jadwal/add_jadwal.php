<?php
include('../Connections/koneksi.php');
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/desain.css">
<title>Input Data Jadwal</title>
</head>

<body id="bg3">
<h2 align="center">> Data Jadwal <</h2>

<center>
<div id="logo">
<table width="398" height="401" align="center">
<tr>
	<td width="390" height="395">

<form id="form6" name="form6" method="post" action="save_jadwal.php">

  <table width="259" border="0" align="center" cellpadding="3">
    <tr>
      <td align="center" colspan="4"><h3>^_^</h3></td>
    </tr>
    <tr>
      <td width="80">Kode</td>
      <td width="4">:</td>
      <td colspan="2">
      <div id="inputwrapper">
      	<label for="kd_jadwal">
        <input class="inputbox" type="text" size="8" width="80" name="kd_jadwal" maxlength="3" />
       	</label> 
      </div>
      </td>
    </tr>
    <tr>
      <td>Waktu</td>
      <td>:</td>
      <td width="92"><label for="Waktu"></label>
      M<input class="font2" type="text" size="4" width="80" name="waktu_in" maxlength="5" /></td>
      <td width="80"><label for="Waktu"></label>
        S<input class="font2" type="text" size="4"width="80" name="waktu_out" maxlength="5"/></td>
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
          <?php echo "<option value='$data[kd_mk]'>$data[kd_mk]</option>"; ?>
<?php } ?> 
        </select></td>
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
          <?php echo "<option value='$data[nidn]'>$data[nidn]</option>"; ?>
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
          <?php echo "<option value='$data[kd_kelas]'>$data[kd_kelas]</option>"; ?>
<?php } ?> 
        </select>
        </td>
    </tr>

    <tr>
      <td height="56" colspan="4" align="center">
       <input type="reset" id="reset" style="display:none;">
       <img 
   		onclick="document.getElementById('reset').click()" 
   		src="../image/reset.jpg" 
   		width="50" 
   		height="46" 
   		title="Click untuk reset form.">
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

</br>
		<center><a href="show_jadwal.php"><< Tabel Data</a>
| <a href="../index.php">Menu Admin >></a></center>

<br>
<br>
<div id="footer">
<p>copyright by <i>zeneight</i> <b>(<a href="http://173.252.110.27/zeneight" target="_blank">Agung Priambada</a>)</b> | Created on <i>2014</i> | Politeknik Telkom Bali</p>
</div>

</body>
</html>
