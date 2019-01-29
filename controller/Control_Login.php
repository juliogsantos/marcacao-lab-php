<?php
require_once("../model/conecta.php");

function logar($conexao, $user, $pass){
        $crip = md5($pass);
	$crip2 = sha1($crip);	

	$query = "SELECT user, pass FROM user WHERE user='{$user}' and pass='{$crip2}'";
	
	$resultado = mysqli_query($conexao, $query);
	
	if(mysqli_num_rows($resultado) == 1){
	return true;
	}else{
	return false;
}
}
?>		