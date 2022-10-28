<?php
require_once 'pessoas.php';
require_once 'conexao.php';

try{
    $id_pessoa = $_POST['id_pessoa'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    $pessoa = new Pessoas($id_pessoa);
    $pessoa->nome = $nome;
    $pessoa->idade = $idade;

    $pessoa->atualizar();


    setcookie('atualizado', true);
    header('Location: index.php');
}catch(Exception $e){
    echo $e->getMessage();
}