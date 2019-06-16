<?php
	require 'logout.php';

	echo $_SESSION['nome'];
	echo $_SESSION['email'];
?>

<a href="?logout=1">Deslogar</a>