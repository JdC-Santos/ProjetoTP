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
        <div class="col-md-8 offset-md-2">
            <div class="shadow p-3">
                <form action="registro.php" method="post">
                    <div class="form-group">
                        <input type="email" name="nome" class="form-control" placeholder="Digite seu Email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="senha" class="form-control" placeholder="Digite sua Senha">
                    </div>
                    <div class="form-group">
                        <input type="submin" class="btn btn-outline-sucess">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
