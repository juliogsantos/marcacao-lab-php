<?php
session_start();
?>
<?php
include("../model/conecta.php");
include("../controller/Control_Login.php");

$user = $_POST["user"];
$pass = $_POST["pass"];


if(logar($conexao, $user, $pass)){
	
	
	$_SESSION['user'] = $user;
	
	header("Location: ../main.php");
	die();

} else {
	session_destroy();
header("Location: ../index.php?erro=1");}	

?>	