<?php
session_start();
unset($_SESSION['id']);

	header('location:./home-test.php');
?>