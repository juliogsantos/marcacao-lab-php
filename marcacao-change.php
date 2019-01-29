<?php include("cabecalho.php");
include("model/conecta.php");
include("hora-crud.php");
include("marcacao-crud.php");

$horas = listaHora($conexao);
$horas_termino = listaHoraTermino($conexao);
$id = $_GET['id'];
$marcacao = buscaMarcacaoPorId($conexao, $id);
?>

<center>
<h1>Alterar</h1>
</center>	
<form action="altera-marcacao.php" method="post">
				<div class="form-group">
					 <input type="hidden" name="id" value="<?=$marcacao['id']?>">
					<label for="requisitante">
						Requisitante:
					</label>
					<input type="text" class="form-control" name="requisitante" value="<?=$marcacao['requisitante']?>">
				</div>
				<div class="form-group">
					 
					<label for="dia">
						Dia:
					</label>
					<input type="text" class="form-control" id="dia"  name="dia" value="<?=$marcacao['dia']?>">
				</div>
				<div class="form-group">
					 
					<label for="hora">
						Hora:
					</label>
					<div class="inline">
					<select class= "form-control" name="id_hora" required>
					<option value="">escolha...</option>
					<?php foreach($horas as $hora) : 
					$essaEhAHora = $marcacao['id_hora'] == $hora['id_hora'];
                $selecao = $essaEhAHora ? "selected='selected'" : "";
					
					?>
        <option value="<?=$hora['id_hora']?>"<?=$selecao?>><?=$hora['hora']?> </option>
        <?php endforeach ?>
		</select>
					</div>
				</div>
				<div class="form-group">
					 
					<label for="hora_termino">
						Hora fim:
					</label>
					<div class="inline">
					<select class= "form-control" name="id_hora_termino" required>
					
					
					<?php foreach($horas_termino as $hora2) : 
					$essaEhAHora_termimo = $marcacao['id_hora_termino'] == $hora2['id_hora_termino'];
                $selecao = $essaEhAHora_termimo ? "selected='selected'" : "";
?>
        <option value="<?=$hora2['id_hora_termino']?>"<?=$selecao?>><?=$hora2['hora_termino']?> </option>
        <?php endforeach ?>
		</select>
					</div>
				</div>
				
				
				
				<!------------------------------------------------------------------------------------>
		
					<!------------------------------------------------------------------------------------>
					
					
					
					<div class="form-group">
					 
					<label class="control-label" for="laboratorio">
						Labs:
					</label>
                                 </div>
                 <div>
            
					<label><input type="checkbox" id="lab_01"  name="lab_01" value="0" <?php if($marcacao['lab_01'] == 1){echo 'checked="checked"';}?>> Lab 01</label>
                     </br>
	                                <label><input type="checkbox" id="lab_02"  name="lab_02" value="0" <?php if($marcacao['lab_02'] == 1){echo 'checked="checked"';}?>> Lab 02</label>

                  </div>
				</br>
				<div class="form-group">
					 
					<label for="obs">
						Obs.:
					</label>
					<textarea class="form-control"  name="obs"><?=$marcacao['obs']?></textarea>
				</div>
				<button type="submit"   class="btn-lg btn-default">
					Alterar
				</button>

			</form>


<?php
include("rodape.php");
?>






	
