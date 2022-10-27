<?php
require_once 'pessoas.php';
require_once 'conexao.php';

try{
    $pessoa = new Pessoas();
    //cria um objeto do tipo pessoa
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    //acima recebe o que vem na solicitacao POST e guarda na variavel

    $pessoa->nome = $nome;
    $pessoa->idade = $idade;
    // atribui os valores das variaveis para as propriedades da classe pessoas
    
    $pessoa->inserir();
    // chama o metodo inserir da classe pessoas para inserir o novo registro

    header('Location: index.php');
    // depois de tudo redireciona o usuario para a pagina index
}catch(Exception $e){
    echo $e->getMessage();
}





?>