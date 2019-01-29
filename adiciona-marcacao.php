<?php
require_once("model/conecta.php"); 
include("marcacao-crud.php");
?>

<?php
$id              = $_POST['id'];
$requisitante    = $_POST['requisitante'];
$dia             = $_POST['dia'];
$id_hora         = $_POST['id_hora'];
$id_hora_termino = $_POST['id_hora_termino'];
$lab_01          = $_POST['lab_01'];
$lab_02          = $_POST['lab_02'];
$obs             = $_POST['obs'];

if($lab_01 != 1){
$lab_01 = 0;
}

if($lab_02 != 1){
$lab_02 = 0;
}




insereMarcacao($conexao, $requisitante, $dia, $id_hora, $id_hora_termino, $lab_01, $lab_02, $obs);
header("Location: main.php");
die();
?>


