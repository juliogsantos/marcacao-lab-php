<?php include("cabecalho.php"); 
include ("conecta.php");
include ("marcacao-crud.php");
include("menu.php");?>

<?php if(array_key_exists("removido", $_GET) && $_GET['removido']==true) { ?>
<center>
<h2 class="alert alert-success" role="alert">Marcacao efetuada com sucesso!</h2>
</center>
</br>
</br>
</br>
<?php } ?>


<?php 
$marcacoes = listaMarcacoes($conexao);
?>
<div>
<table class="table table-striped">

<?php 
foreach($marcacoes as $marcacao) : ?>
<tr class="row">
<td><?= $marcacao['requisitante']?></td>
<td><?= $marcacao['dia']?></td>
<td><?= $marcacao['hora']?></td>
<td><?= $marcacao['hora_termino']?></td>
 <td colspan="2"><?php
      if($marcacao['lab_01'] == 1){
     echo "<b>Lab 01</b>  ";
     }
     ?>
     <?php
      if($marcacao['lab_02'] == 1){
     echo "  <b>Lab 02</b>";
     }
     ?></td>
<td colspan="2"><?= $marcacao['obs']?></td>
<td><a class="btn btn-warning form-control" href="marcacao-altera.php?id=<?=$marcacao['id']?>">Alterar</a></td>
<td><form method="post" action="remove-marcacao.php">
	
	<button  class="btn btn-danger form-control" >Remover</button>
<input type="hidden" name="id" value="<?=$marcacao['id']?>"/>
	</form>
</td>
</tr>
<?php
endforeach
?>

</table>
</div>

<?php include("rodape.php"); ?>

