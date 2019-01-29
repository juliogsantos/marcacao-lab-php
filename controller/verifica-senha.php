<?php
require_once("../helpers/adiciona-usuario.php");
require_once("../model/conecta.php");

$user = $_POST["user"];
$pass = $_POST["pass"];
$REpass = $_POST["REpass"];

if($pass = $REpass){
	cadastrar($conexao, $user, $pass);
	header("Location: ../index.php");
}
?>	