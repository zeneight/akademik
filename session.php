<?php session_start(); ?>

<head>
<link rel="stylesheet" type="text/css" href="css/desain.css" />
</head>

<?php
if (!isset($_SESSION['user']) || empty($_SESSION['user'])) {
	header('Location:login.php');
	exit();
}

if (!isset($_SESSION['CREATED']) || empty($_SESSION['CREATED'])) {
    $_SESSION['CREATED'] = time();
} else if (time() - $_SESSION['CREATED'] > 300) {
    // session started more than 5 minutes ago
    session_regenerate_id(true);    // change session ID for the current session and invalidate old session ID
    //$_SESSION['CREATED'] = time();  // update creation time
 	
 	session_destroy();
 	header('Location:index.php');
}
?>