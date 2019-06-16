<?php
	session_start();

	if(isset($_GET['logout'])){
		unset($_SESSION['nome']);
		unset($_SESSION['email']);
		session_destroy();
	}

	header('Location: index.php');