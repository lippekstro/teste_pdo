<?php
require_once 'pessoas.php';
require_once 'conexao.php';

if (isset($_GET['busca'])) {
    $palavra = $_GET['busca'];
    try {
        $pessoa = new Pessoas();
        $lista = $pessoa->listarPorNome($palavra);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
} else {
    try {
        $pessoa = new Pessoas();
        $lista = $pessoa->listar();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/toast.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <div>
        <p id="exibe"></p>
    </div>
    <div class="flex-container space-between">
        <div>
            <button id="btn_adicionar"><a href="inserir.php"><span class="material-symbols-outlined">add</span></a></button>
        </div>
        <div id="form_busca">
            <form action="index.php" id="">
                <div class="flex-container">
                    <label for="busca"><span class="material-symbols-outlined">search</span></label>
                    <input type="search" name="busca" id="busca">
                    <input type="submit" value="Buscar">
                </div>
            </form>
        </div>

    </div>

    <?php if (count($lista) > 0) : ?>
        <div class="flex-container">
            <table>
                <tr>
                    <th>id</th>
                    <th>nome</th>
                    <th>idade</th>
                    <th>data de registro/atualizacao</th>
                </tr>
                <?php foreach ($lista as $item) : ?>
                    <tr>
                        <td><?= $item['id_pessoa'] ?></td>
                        <td><?= $item['nome'] ?></td>
                        <td><?= $item['idade'] ?></td>
                        <td><?= $item['data_registro'] ?></td>
                        <td><button id="editar"><a href="editar.php?id_pessoa=<?= $item['id_pessoa'] ?>"><span class="material-symbols-outlined">edit</span></a></button></td>
                        <td><button id="apagar"><a href="apagar_controller.php?id_pessoa=<?= $item['id_pessoa'] ?>"><span class="material-symbols-outlined">delete</span></a></button></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    <?php else : ?>
        <div>
            <p>NADA CADASTRADO</p>
        </div>
    <?php endif ?>

    <script src="js/toast.js"></script>
</body>

</html>