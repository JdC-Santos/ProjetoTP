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
?>
