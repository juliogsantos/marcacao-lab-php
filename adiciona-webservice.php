<?php
include("conecta.php"); 
include("marcacao-crud.php");
?>

<?php

$requisitante    = $_GET['requisitante'];
$dia             = $_GET['dia'];
$id_hora         = $_GET['id_hora'];
$id_hora_termino = $_GET['id_hora_termino'];
$lab_01          = $_GET['lab_01'];
$lab_02          = $_GET['lab_02'];
$obs             = $_GET['obs'];

if($lab_01 != 1){
$lab_01 = 0;
}

if($lab_02 != 1){
$lab_02 = 0;
}



insereMarcacao($conexao, $requisitante, $dia, $id_hora, $id_hora_termino, $lab_01, $lab_02, $obs);
?>