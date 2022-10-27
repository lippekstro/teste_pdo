<?php
require_once 'pessoas.php';
require_once 'conexao.php';

try{
    $id_pessoa = $_GET['id_pessoa'];

    $pessoa = new Pessoas($id_pessoa);

    $pessoa->deletar();

    header('Location: index.php');
}catch(Exception $e){
    echo $e->getMessage();
}
