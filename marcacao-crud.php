<?php 
require_once("model/conecta.php");
 

function insereMarcacao($conexao, $requisitante, $dia, $id_hora, $id_hora_termino, $lab_01, $lab_02, $obs){
$finalizado = 0;
    $query = "insert into marcacoes(requisitante, dia, id_hora, id_hora_termino, lab_01, lab_02, finalizado, obs) 
                         values('{$requisitante}', '{$dia}', {$id_hora}, {$id_hora_termino}, {$lab_01}, {$lab_02}, {$finalizado}, '{$obs}')";
 
 $resultado = mysqli_query($conexao, $query);

}


function buscaMarcacaoPorId($conexao, $id) {
    $query = "select * from marcacoes where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}



function finalizaMarcacao($conexao, $id, $finalizado) {
    $query = "update marcacoes set finalizado = {$finalizado} where id = {$id}";
    return mysqli_query($conexao, $query);
}




function listaMarcacoes($conexao) {
    $marcacoes = array();
    $query = "select m.id, m.requisitante, m.dia, h.hora, h_t.hora_termino, m.lab_01, m.lab_02, m.obs
from marcacoes m
inner join hora h on m.id_hora = h.id_hora
inner join hora_termino h_t on m.id_hora_termino = h_t.id_hora_termino where finalizado = 0 order by m.dia asc";
    $resultado = mysqli_query($conexao, $query);

    while($marcacao = mysqli_fetch_assoc($resultado)) {
        $marcacoes[]= $marcacao;
    }

    mysqli_close($conexao);

    return $marcacoes;

}


function alteraMarcacao($conexao, $id, $requisitante, $dia, $id_hora, $id_hora_termino, $lab_01, $lab_02, $obs){

    

    $query = "update marcacoes set requisitante = '{$requisitante}', dia = '{$dia}', id_hora = {$id_hora}, id_hora_termino = {$id_hora_termino}, lab_01 = {$lab_01}, lab_02 = {$lab_02}, obs = '{$obs}' where id = {$id}"; 
     



 mysqli_query($conexao, $query);
                 
  
 
}
?>