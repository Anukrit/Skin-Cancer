<?php
	session_start();
	unset($_SESSION["valid_user"]);
	session_destroy();
	echo 'Logged out successfully';
	header("Location:login.php");
?>
