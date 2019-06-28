<?php include 'conexao.php';
//função de lista item
function ListarItem(){
	$sql = 'SELECT * FROM item';
	$res = $GLOBALS['conn']->query($sql);
	return $res;
}
// função para excluir id_item

function ExcluirItem($cd){
	$sql = 'DELETE FROM item WHERE id_item ='.$cd;
	$res = $GLOBALS['conn']->query($sql);
	if($res){
		alert("Excluido com sucesso");
	}else{
		alert("Erro ao excluir");
	}
}


// função de alerta

function alert($msg){
	echo '<script>alert("'.$msg.'");</script>';
}

function NomeUsuario($id){
	$sql = "SELECT * FROM usuario WHERE id_usuario=".$id;
	$res = $GLOBALS['conn']->query($sql);
	$reserva = $res->fetch_array();
	return $reserva['nm_usuario'];
}
// função de login 

function Login($email,$senha){
	$sql = 'SELECT * FROM usuario WHERE nm_email ="'.$email.'" AND cd_senha ='.$senha;
	include 'conexao.php';
	if ($conn->query($sql) != FALSE) {
		header('Location: usuario.php');
	} else {
		echo "Erro ao Logar:" . $conn->error;
		echo $sql;
	}
}

// função de cadastro

function Cadastro($nome,$email,$senha){
	$sql ='INSERT INTO usuario (nm_usuario,nm_email,cd_senha) VALUES ("'.$nome.'","'.$email.'","'.$senha.'")';
	include 'conexao.php';
	if ($conn->query($sql) === TRUE) {
		header('Location: usuario.php');
	} else {
		echo "Erro ao Cadastrar:" . $conn->error;
	}
	
}
?>
