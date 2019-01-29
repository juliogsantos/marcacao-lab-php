<?php
require_once("model/conecta.php");
include ("marcacao-crud.php");

$marcacoes = listaMarcacoes($conexao);

$json = json_encode($marcacoes, JSON_UNESCAPED_UNICODE);

echo $json;
?>