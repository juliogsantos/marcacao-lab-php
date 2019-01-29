<?php 
require_once("model/conecta.php");



function listaHora($conexao) {
    $horarios = array();
    $query = "select * from hora";
    $resultado = mysqli_query($conexao, $query);
    while($horario = mysqli_fetch_assoc($resultado)) {
        array_push($horarios, $horario);
    }
    return $horarios;
}

function listaHoraTermino($conexao) {
    $horarios = array();
    $query = "select * from hora_termino";
    $resultado = mysqli_query($conexao, $query);
    while($horario = mysqli_fetch_assoc($resultado)) {
        array_push($horarios, $horario);
    }
    return $horarios;
}

function removeHora($conexao, $id) {
	$query = "delete from horario where id_hora = {$id}";
	return mysqli_query($conexao, $query);
}


function buscaHoraPorId ($conexao, $id) {
	$query = "select * from horario where id_hora = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return $resultado; 
}

function buscaPorHora($conexao, $hora) {
	$query = "select * from horario where hora = {$hora}";
	$resultado = mysqli_query ($conexao, $query);
	return $resultado; 
}

?>