<?php require_once("../model/conecta.php");

function cadastrar($conexao, $user, $pass){
	$crip = md5($pass);
        $crip2 = sha1($crip);
	
$query ="INSERT INTO user (user, pass) VALUES ('{$user}', '{$crip2}')";
	$resultado = mysqli_query($conexao, $query);
	
}
?>