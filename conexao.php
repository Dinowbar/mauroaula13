<?php
$servidor = 'localhost';
$banco = 'sch';
$usuario = 'root';
$senha = '';

$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
?>