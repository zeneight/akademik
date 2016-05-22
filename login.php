<?php
session_start();
 
if (!empty($_SESSION['user'])) {
        header('location:index.php');
}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/desain.css">
<title>Halaman Login</title>
</head>

<body>
<?php 
$msg=isset($_GET['message']) ? $_GET['message']: '';
if ($msg=="success"){echo"<br><center><h3>>> "
?><z>
<?php	
echo"[PERHATIAN!]";
?></z>
<?php
echo" Anda telah Logout <<</h3></center>";
} ?>

<table width="400" height="400" align="center">
<tr>
	<td width="361" height="394">
    <img src="image/dollars_logo.jpg">

<?php
if (!empty($_GET['error'])) {
    if ($_GET['error'] == 1) {
        echo '<h3 align="center"><z>!! Isi Username dan Password Koe, geblek !!</z></h3>';
    } else if ($_GET['error'] == 2) {
        echo '<h3 align="center"><z>Username Koe belum diisi!</z></h3>';
    } else if ($_GET['error'] == 3) {
        echo '<h3 align="center"><z>Password Koe belum diisi!</z></h3>';
    } else if ($_GET['error'] == 4) {
        echo '<h3 align="center"><z>User/Pass Koe tidak terdaftar!</z></h3>';
    }
}
?>

<form id="form6" name="form6" method="post" action="save_login.php">

  <table width="251" border="0" align="center" cellpadding="3">
    <tr>
      <td width="51" align="right">Username</td>
      <td width="7"></td>
      <td width="182"><label for="user">
      	<div id="inputwrapper">
			<input type="text" class="inputbox" name="user" maxlength="25"/>
		</div></label>
      </td>
      
    </tr>
    <tr>
      <td width="51" align="right">Password</td>
      <td width="7"></td>
      <td width="182"><label for="pass">
      	<div id="inputwrapper">      
			<input type="password" class="inputbox" name="pass" maxlength="25"/>
		</div></label>
      </td>
    </tr>
    <tr>
      <td height="30" colspan="3" align="center">
       <input type="image" src="image/enter.png" class="input_submit" title="Klik untuk Masuk"/>

      </td>
    </tr>
  </table>
</form>
	</td>
</tr>
</table>

</body>
</html>