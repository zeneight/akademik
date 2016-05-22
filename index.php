<?php
include('session.php');
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/desain.css">
<title>Menu Admin</title>
</head>

<body id="bg7">

<table border="0" width="400" align="center">
<tr align="center">
	<td width="50"><b>>></b> </td><td width="300"><marquee direction="left">Welcome into my site! | The Awesome site in the world | Please click the link in the menu to start</marquee></td><td width="50"><b><<</b></td>
</tr>
</table>

<center>
  <div id="logo">
<table width="396" height="403" align="center">
<tr>
	<td width="384" height="397">

<center>
  <h3><font color="#FFFFFF" face="Tahoma, Geneva, sans-serif">> Menu Admin < </font></h3></center>

<table width="283" border="0" align="center" cellpadding="3" cellspacing="2" bordercolor="#FFFFFF">

 

  <tr align="center">
    <td width="87">Mahasiswa</td><td width="61">Dosen</td><td width="95">Mata Kuliah</td>
  </tr>
  
  
  <tr align="center">
    <td>-> <a href="mahasiswa/add_mahasiswa.php">add</a>
    <br />
    -> <a href="mahasiswa/show_mahasiswa.php?message=">view</a>
    <br />
    -> <a href="mahasiswa/print_mahasiswa.php">print</a>
    </td>
    <td>
    -> <a href="dosen/add_dosen.html">add</a>
    <br />-> <a href="dosen/show_dosen.php?message=">view</a>
    </td>
    <td>
    -> <a href="mk/add_mk.html">add</a>
    <br />-> <a href="mk/show_mk.php?message=">view</a>
    </td>
  </tr>
  <tr align="center">
  	<td>Kelas</td><td>Jadwal</td><td>Nilai</td>
  </tr>
  <tr align="center">  
    <td>-> <a href="kelas/add_kelas.html">add</a>
    <br />-> <a href="kelas/show_kelas.php?message=">view</a>
    </td>
    <td>-> <a href="jadwal/add_jadwal.php">add</a>
    <br />-> <a href="jadwal/show_jadwal.php?message=">view</a>
    </td>
    <td>-> <a href="nilai/add_nilai.php">add</a>
    <br />-> <a href="nilai/show_nilai.php?message=">view</a>
    </td>
    
   </tr>
   
</table>
<center>
	<form id="logout" name="logout" method="post" action="logout.php">
	<input type="image" src="image/logout.png" class="input_submit" title="Klik untuk Logout"
	onclick="return confirm('Apakah anda yakin mau Keluar?' + '\n\n' + '\n\n' + 
    'Jika YA silahkan klik OK, jika TIDAK silahkan klik CANCEL.')" />
    </form>
</center>

	</td>
</tr>
</table>
</div></center>

<br>
<br>
<div id="footer">
<p>copyright by <i>zeneight</i> <b>(<a href="http://173.252.110.27/zeneight" target="_blank">Agung Priambada</a>)</b> | Created on <i>2014</i> | Politeknik Telkom Bali</p>
</div>

</body>
</html>