<?php
	session_start();
	session_destroy();
	header('location:W_login.php');
?>
