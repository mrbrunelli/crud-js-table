<?php

if ($_POST) {
    include 'conexao.php';

    $nome = trim($_POST['nome']);
    $login = trim($_POST['login']);
    $senha = md5($_POST['senha']);

    $sql = $pdo->prepare("insert into usuario (nome, login, senha) values ('$nome','$login', '$senha')");

    if ($sql->execute()) {
        echo 1;
        exit;
    } else {
        echo 0;
        exit;
    }
} else {
    header('location: ./index.php');
}
