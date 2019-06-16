<?php
	if(!isset($_SESSION)){ session_start(); }

	require_once 'conexao.php';

	if(isset($_GET['item_id']) && !empty($_GET['item_name'])){
		$sql = "UPDATE item SET nm_item = '{$_GET['item_name']}'
				WHERE id_item = {$_GET['item_id']}";

		$query = mysqli_query($conn,$sql);
	}
	header('Location: usuario.php');