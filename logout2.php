<?php
if(isset($HTTP_POST_VARS['user'])){
	$query=get_magic_quotes_gpc() ? $HTTP_POST_VARS['user']
	:addslashes($HTTP_POST_VARS['user']);
}

header("location:login.php");
?>