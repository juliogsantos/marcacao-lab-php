<?php

$host     = "localhost";
$username = "root";
$password = "";
$database = "newphp";

// Create connection
$connection = mysqli_connect($host, $username, $password, $database);

// Check connection
if (mysqli_connect_error())
{
	die("Erro na conexão com o banco de dados");
}

function database_read($query)
{
	global $connection;
	
	$result = mysqli_query($connection, $query) or die("database_read: erro na query");

	$array = Array();
	while ($row = mysqli_fetch_array($result))
	{
		$array[] = $row;
	}
	
	return $array;
}

function database_execute($query)
{
	global $connection;
	
	mysqli_query($connection, $query) or die("database_execute: erro na query");
}

?>
