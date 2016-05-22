<?php
include('../Connections/koneksi.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/desain.css">
<title>Input Data Mahasiswa</title>
</head>

<body id="bg">
<h2 align="center">> Data Mahasiswa <</h2>

<center><div id="logo">
<table width="400" height="400" align="center">
<tr>
	<td width="361" height="394">

<form id="form6" name="form6" method="post" action="save_mahasiswa.php">

  <table width="226" border="0" align="center" cellpadding="3">
    <tr>
      <td align="center" colspan="3"><h3><i>Input</i>-kan Data</h3></td>
    </tr>
    <tr>
      <td width="49" align="right">NIM</td>
      <td width="4"></td>
      <td width="150">
      <label for="nim">
      	<div id="inputwrapper">
			<input type="text" class="inputbox" name="nim" maxlength="5"/>
		</div></label>
      </td>
    </tr>
    <tr>
      <td align="right">Nama</td>
      <td></td>
      <td><label for="nama">
      	<div id="inputwrapper">
			<input type="text" class="inputbox" name="nama" maxlength="30"/>
		</div></label>
      </td>
    </tr>
    <tr>
      <td align="right">Prodi</td>
      <td></td>
      <td><label for="select">
        <div>
        <select class="select" name="prodi">
          <option>...</option>
          <option value="Teknik Informatika">T. Informatika</option>
          <option value="Teknik Telekomunikasi">T. Telekom</option>
          <option value="Komputer Akutansi">K. Akutansi</option>
        </select></label>
        </div>
        </td>
    </tr>
    <tr>
      <td align="right">Status</td>
      <td></td>
      <td><label for="select2">
        <select class="select" name="status">
          <option>...</option>
          <option value="Aktif">Aktif</option>
          <option value="Cuti">Cuti</option>
        </select></label></td>
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
</div></center>

</br>
		<center><a href="show_mahasiswa.php"><< Tabel Data</a>
| <a href="../index.php">Menu Admin >></a></center>

<br>
<br>
<div id="footer">
<p>copyright by <i>zeneight</i> <b>(<a href="http://173.252.110.27/zeneight" target="_blank">Agung Priambada</a>)</b> | Created on <i>2014</i> | Politeknik Telkom Bali</p>
</div>
</body>
</html>
