<?php

	require_once("../model/database.php");
	
	$id = $_GET['id'];
	
	$valid_id = database_read("SELECT id FROM nomes WHERE id = ". $id);
	
	if (count($valid_id) == 1)
	{
		database_execute("DELETE FROM nomes WHERE id=". $id);
		
		echo "Registro apagado com sucesso!";
	}
	else
	{
		echo "Registro nao pode ser encontrado.";
	}

?>