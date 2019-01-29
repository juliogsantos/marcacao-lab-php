<?php 
include("conecta.php"); 

function insere($conexao, $nome) {
    $query = "insert into NOME(nome) values('{$nome}')";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
}
?>