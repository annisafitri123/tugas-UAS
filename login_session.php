<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['user'] === false) {
	# code...
	header("location:index.php");
	exit();
}
?>