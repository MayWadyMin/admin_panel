<?php
	session_start();
	require_once('admin/function/login.php');
	session_destroy();	
	header('location:login.php');
?>