<?php
include('../Connections/koneksi.php');
?>

<html>
<head>
<title>Edit Data Dosen</title>
<link rel="stylesheet" type="text/css" href="../css/desain.css">
</head>

<body id="bg2">
<h2 align="center">> Data Dosen <</h2>

<?php
$nidn = $_GET['nidn'];
$query = mysql_query("select * from data_Dosen where nidn='$nidn'") or die(mysql_error());
$data = mysql_fetch_array($query);
?>

<table width="400" height="400" align="center" background="../image/logo.jpg">
<tr>
	<td width="361" height="394">

<form name="update_data" action="update_dosen.php" method="post">
<input type="hidden" name="nid" value="<?php echo $nid; ?>" />

  <table width="251" border="0" align="center" cellpadding="3">
    <tr>
      <td align="center" colspan="3"><h3><i>Edit</i> Data</h3></td>
    </tr>
    <tr>
      <td width="51" align="right">NIDN</td>
      <td width="7">:</td>
      <td width="182">
        <label for="nidn"><?php echo $data['nidn']; ?></label></td>
    </tr>
    <tr>
      <td align="right">Nama</td>
      <td></td>
      <td>
      	<div id="inputwrapper">
        <label for="nama">
        <input class="inputbox" type="text" width="180" name="nama" maxlength="30" value="<?php echo $data['nama']; ?>"/>
      	</label>
        </div>
      </td>
    </tr>
    <tr>
      <td align="right">e-mail</td>
      <td></td>
      <td>
      	<div id="inputwrapper">
        <label for="email">
        <input class="inputbox" type="text" width="180" name="email" maxlength="25" value="<?php echo $data['email']; ?>"/>
      	</label>
        </div>
      </td>
    </tr>
    <tr>
      <td align="right">Status</td>
      <td></td>
      <td><label for="select2"></label>
        <select name="status" id="status" class="select">
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
<center><a href="show_dosen.php"><< Tabel Data</a> | <a href="../index.php">Menu Admin >></a></center>

<br>
<br>
<div id="footer">
<p>copyright by <i>zeneight</i> <b>(<a href="http://173.252.110.27/zeneight" target="_blank">Agung Priambada</a>)</b> | Created on <i>2014</i> | Politeknik Telkom Bali</p>
</div>

</body>
</html> 