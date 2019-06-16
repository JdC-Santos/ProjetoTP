<?php
	session_start();
	
	require 'conexao.php';
	

	if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['password'])){

		$validaNome = "/^[a-zA-Z]{2,}$/";
		$validaEmail = "/^[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}$/";
		//valida nome
		if( !preg_match($validaNome,$_POST['nome']) ){ 
			header('Location: cadastro.php?error=1'); 
		}

		if( !preg_match($validaEmail,$_POST['email']) ){
			header('Location: cadastro.php?error=2'); 
		}

		if(strlen($_POST['password']) < 3){
			header('Location: cadastro.php?error=3'); 
		}

		$sql = "INSERT INTO 
					usuario (id_usuario, nm_usuario,nm_email,cd_senha )
				VALUES
					(null,'{$_POST['nome']}','{$_POST['email']}','{$_POST['password']}')";
    	$query = mysqli_query($conn, $sql);
    	if($query){
    		$_SESSION['nome'] = $_POST['nome'];
    		$_SESSION['email'] = $_POST['email'];
    		
    		header('Location: usuario.php');
    	}else{
    		header('Location: cadastro.php?error=4'); 
    	}

	}else{
		header('Location: cadastro.php?error=5'); 
	}