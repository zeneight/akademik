<?php
include('../Connections/koneksi.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/desain.css">
<title>Input Data Nilai</title>
</head>

<body id="bg5">
<h2 align="center">> Data Nilai <</h2>

<center>
<div id="logo">
<table width="400" height="400" align="center">
<tr>
	<td width="361" height="394">

<form id="form6" name="form6" method="post" action="save_nilai.php">

  <table width="251" border="0" align="center" cellpadding="3">
    <tr>
      <td align="center" colspan="3"><h3><i>Input</i>-kan Nilai</h3></td>
    </tr>
    <tr>
      <td width="51">Kode</td>
      <td width="7">:</td>
      <td width="182">
      	<div id="inputwrapper">
        <label for="kd_nilai">
        <input class="inputbox" type="text" width="180" name="kd_nilai" maxlength="5" />
		</label>       
        </div></td>
    </tr>
    <tr>
      <td>NIM</td>
      <td>:</td>
      <td colspan="2"><label for="select"></label>
        <select class="select" name="nim">
          <option>...</option>
<?php
	$sql_mhs = "select * from data_mahasiswa";
	$hasil_mhs=mysql_query($sql_mhs,$koneksi);
	
	while ($data=mysql_fetch_array($hasil_mhs)){
?>
		  <option value="<?php echo $data['nim']; ?>"><?php echo $data['nim']; ?></option>
<?php } ?>
        </select></td>
    </tr>
    <tr>
      <td>Kode M.K</td>
      <td>:</td>
      <td><label for="select"></label>
        <select class="select" name="kd_mk">
          <option>...</option>
<?php
	$sql_mk = "select * from data_mk";
	$hasil_mk=mysql_query($sql_mk,$koneksi);
	
	while ($data=mysql_fetch_array($hasil_mk)){
?>
		  <option value="<?php echo $data['kd_mk']; ?>"><?php echo $data['kd_mk']; ?></option>
<?php } ?>
        </select></td>
    </tr>
    <tr>
      <td>Nilai</td>
      <td>:</td>
      <td><div id="inputwrapper">
        <label for="nilai">
        <input class="inputbox" type="text" width="180" name="nilai" maxlength="5" />
		</label>       
        </div></td>
    </tr>
    <tr>
      <td height="56" colspan="3" align="center">
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
		<center><a href="show_nilai.php"><< Tabel Data</a>
| <a href="../index.php">Menu Admin >></a></center>

<br>
<br>
<div id="footer">
<p>copyright by <i>zeneight</i> <b>(<a href="http://173.252.110.27/zeneight" target="_blank">Agung Priambada</a>)</b> | Created on <i>2014</i> | Politeknik Telkom Bali</p>
</div>

</body>
</html>
