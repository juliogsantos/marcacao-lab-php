<?php
session_start();
?>

<?php include("cabecalho.php"); 
require_once("model/conecta.php");
include ("marcacao-crud.php");
include("menu.php");?>

<?php if(array_key_exists("removido", $_GET) && $_GET['removido']==true) { ?>
<center>
<h2 class="alert alert-success" role="alert">Marcacao efetuada com sucesso!</h2>
</center>
</br>
</br>
<meta http-equiv="refresh" content="7">
</br>
<?php } ?>
<div style="text-align:center" class="alert alert-info">
<h3>Bem-vindo(a), <?=$_SESSION['user']?>!</h3>
</div>

<?php 
$marcacoes = listaMarcacoes($conexao);
?>

<table class="table table-striped">
<!--<tr class="row">
<th>Requisitante</th>
<th>Data</th>
<th>Hora</th>
<th>Hora Termino</th>
<th colspan="2">Laboratorios</th>
<th>Observacoes</th>
</tr>-->

<?php 
foreach($marcacoes as $marcacao) : ?>
<tr>
<td><?= $marcacao['requisitante']?> </td>

<td><?= $marcacao['dia']?></td>

<td><?= $marcacao['hora']?></td>

<td><?= $marcacao['hora_termino']?></td>
 <td><?php
      if($marcacao['lab_01'] == 1){
     echo "<b>Lab 01</b>  ";
     }
     ?>
     <?php
      if($marcacao['lab_02'] == 1){
     echo "  <b>Lab 02</b>";
     }
else{
echo "<b>nenhum lab informado</b>";
}
     ?></td>

<td><?= $marcacao['obs']?></td>
<td><a href="marcacao-change.php?id=<?=$marcacao['id']?>" class="btn btn-warning form-control">Alterar</a></td>
<td><a class="btn btn-warning form-control" href="finaliza-marcacao.php?id=<?=$marcacao['id']?>">Finalizar</a></td>

</tr>
<?php
endforeach
?>

</table>


<?php include("rodape.php"); ?>