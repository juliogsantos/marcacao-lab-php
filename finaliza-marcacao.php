<?php
require_once("model/conecta.php"); 
include("marcacao-crud.php");


$id = $_GET['id'];
$finalizado = 1;


finalizaMarcacao($conexao, $id, $finalizado);
?>


<?php
header("Location: main.php");
die();
?>
