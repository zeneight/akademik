<?php
include('Connections/koneksi.php');

$user=$_POST['user'];
$pass=$_POST['pass'];

if (empty($user) && empty($pass)) {
    header('location:login.php?error=1');
    break;	
} else if (empty($user)) {
    header('location:login.php?error=2');
    break;
} else if (empty($pass)) {
    header('location:login.php?error=3');
    break;
}

$q = mysqli_query($koneksi,"SELECT * FROM tb_admin WHERE user='$user' AND pass='$pass'");

if (mysqli_num_rows($q) == 1) {
	session_start();
    $_SESSION['user']=$user;
	header('location:index.php');
}

else {
    header('location:login.php?error='.$user.'');
}

?>