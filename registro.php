<?php 
    include 'funcoes.php';
    session_start();
    $_SESSION['nome'] = $_REQUEST["nome"];
    $_SESSION['senha'] = $_REQUEST["senha"];
    Login($_SESSION['nome'],$_SESSION['senha']);
    