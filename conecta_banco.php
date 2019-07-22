<?php

function conectabd(){
    $host = "localhost";
    $banco = "menu";
    $user = "root";
    $pwd = "";
    try {
        //instanciando a classe PDO com os parametros host, nome do banco, usuario e senha
	$conexao = new PDO("mysql:host=".$host.";dbname=".$banco, $user,$pwd);
    } catch (Exception $e) {
        echo("Erro ao conectar com o MySQL: " . $e->getMessage());
    }

    return $conexao;
}

