<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<div class="row">
		<div class="col-md-8">
			<form action="validarcadastro.php" method="post">
				<div class="form-group">
					<input type="text" name="nome" class="form-control" placeholder="Digite seu nome" required>
				</div>
				<div class="form-group">
					<input type="email" name="email" class="form-control" placeholder="Digite seu email" required>
				</div>
				<div class="form-group">
					<input type="password" name="password" class="form-control" placeholder="Digite sua senha" required>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-outline-sucess"
					>
				</div>
				<?php if(isset($_GET['error'])){ 
					if($_GET['error'] == 1){
						$error = "Nome Inválido";
					}else if($_GET['error'] == 2){
						$error = "Email Inválido";
					}else if($_GET['error'] == 3){
						$error = "Senha fraca";
					}else if($_GET['error'] == 4){
						$error ="Não foi possivel concluir o seu cadastro";
					}else{
						$error = "Preencha todos os campos";
					}
				?>
				<div class="alert alert-danger">
				  <strong>Atenção!</strong> <?= $error; ?>
				</div>
				<?php } ?>
			</form>
		</div>
	</div>
</body>
</html>