<?php

$servidor = "localhost";
$banc = "AulaBD";
$senha = "";
$usuario = "root";
$sql = "CREATE DATABASE IF NOT EXISTS AulaBD;";

//conexao sem escolher o banco
$conexao = mysqli_connect($servidor, $usuario, $senha);
//criacao automatica do banco de dados
$resultado = mysqli_query($conexao, $sql);
//selecione o banco rede criado
mysqli_select_db($conexao, "AulaBD");


?>

