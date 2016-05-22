<?php
#koneksi ke mysql
$h_koneksi = "localhost";
$d_koneksi = "db_akademik";
$u_koneksi = "root";
$p_koneksi = "";

$koneksi = new mysqli($h_koneksi, $u_koneksi, $p_koneksi, $d_koneksi);
if($koneksi->connect_errno > 0){
    die("Connection failed: " . mysqli_connect_error());
}


#session
//session_start();

//if (!isset($_SESSION['user']) || empty($_SESSION['user'])) {
   
    //header('location:login.php');
//}
?>