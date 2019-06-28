<?php
    require 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
            <div class="shadow p-3 bg-white rounded">
                <form action="registro.php" method="post">
                    <h4 class="h4 text-center">Login</h4>
                    <div class="form-group mt-3">
                        <input type="email" name="nome" class="form-control" placeholder="Digite seu Email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="senha" class="form-control" placeholder="Digite sua Senha">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-block btn-outline-success">
                    </div>
                    <div class="form-group">
                        <a href="cadastro.php" class="text-primary">Registre-se</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
