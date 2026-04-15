<?php

$host = 'localhost';
$dbname = 'projeto_site';
$usuario = 'root';
$senha = '';

try {
    $conexao = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8" $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOExcepiton $e) {
    die("Erro ao conectar com o banco de dados: " . $e->getMessage());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_recebido = $_POST ['nome'];
    $email_recebido = $_POST['email'];
    $mensagem_recebida = $_POST{'mensagem'};

    $sql
}
