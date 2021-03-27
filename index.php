<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require_once("config.php");

/*$sql = new sql();

$livros = $sql->select("SELECT *FROM livros");

echo json_encode($livros);*/


    $livros = new livros();

    $livros->loadByid(8);

    echo $livros;

?>