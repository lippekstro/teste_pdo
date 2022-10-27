<?php
require_once 'config.php';

class Conexao
{
    public static function conectar()
    {
        // criar uma nova conexao com o banco
        $conn = new PDO(DB_DRIVE . ':host=' . DB_NOME_HOST . ';dbname=' . DB_NOME_BANCO, DB_USUARIO, DB_SENHA);
        // colocar o modo de erros do PDO para exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
        // devolve a conexao
    }
}
