<head>
<link rel="stylesheet" type="text/css" href="css/desain.css" />
</head>

<?php
if (!isset($_SESSION['user']) || empty($_SESSION['user'])) {
	header('Location: login.php');
	exit();
}
?>