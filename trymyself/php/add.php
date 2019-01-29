<?php
include("conecta.php");
include("inserir.php");

$nome = $_POST["nome"];

if(insere($conexao, $nome)){

header("Location: ../index.php?adicionado=1");
    }
 if{
    header("Location: ../index.php?adicionado=0");
}
?>