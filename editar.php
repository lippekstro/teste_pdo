<?php

require_once 'pessoas.php';
require_once 'conexao.php';

try {
    $id_pessoa = $_GET['id_pessoa'];
    $pessoa = new Pessoas($id_pessoa);
} catch (Exception $e) {
    echo $e->getMessage();
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="editar_controller.php" method="post">
        <label for="id_pessoa">ID</label>
        <input type="number" name="id_pessoa" id="id_pessoa" value="<?= $pessoa->id_pessoa ?>" readonly>

        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" value="<?= $pessoa->nome ?>">

        <label for="idade">Idade</label>
        <input type="numbe" name="idade" id="idade" value="<?= $pessoa->idade ?>">

        <input type="submit" value="Atualizar">
    </form>
</body>

</html>