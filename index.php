<?php
require_once 'pessoas.php';
require_once 'conexao.php';

try {
    $pessoa = new Pessoas();
    $lista = $pessoa->listar();
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
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/toast.css">
</head>

<body>
    <div>
        <p id="exibe"></p>
    </div>
    <div>
        <button><a href="inserir.php">Adicionar</a></button>
    </div>
    <?php if (count($lista) > 0) : ?>
        <div>
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
                        <td><a href="editar.php?id_pessoa=<?=$item['id_pessoa']?>">EDITAR</a></td>
                        <td><a href="apagar_controller.php?id_pessoa=<?=$item['id_pessoa']?>">APAGAR</a></td>
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