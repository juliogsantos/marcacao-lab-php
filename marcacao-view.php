<?php include("cabecalho.php");
include("menu.php");
require_once("model/conecta.php");
include("hora-crud.php");
$horarios = listaHora($conexao);
$horarios_termino = listaHoraTermino($conexao);
?>
	
	<?php if(array_key_exists("agendado", $_GET) && $_GET['agendado']==true) { ?>
<center>
	<h2 class="alert alert-success" role="alert">Marcacao efetuada com sucesso!</h2>
</br>
</br>
</br>


	</center>
<?php } ?>
	
		<form action="adiciona-marcacao.php" method="post">
				<div class="form-group">
					 
					<label for="requisitante">
						Requisitante:
					</label>
					<input type="text" class="form-control" name="requisitante">
				</div>
				<div class="form-group">
					 
					<label for="dia">
						Dia:
					</label>
					<input type="text" class="form-control" id="dia"  name="dia">
				</div>
				<div class="form-group">
					 
					<label for="hora">
						Hora:
					</label>
					<div class="inline">
					<select class= "form-control" name= "id_hora" required>
					<option value="">escolha...</option>
					<?php foreach($horarios as $hora) : ?>
        <option value="<?=$hora['id_hora']?>"><?=$hora['hora']?> </option>
        <?php endforeach ?>
		</select>
					</div>
				</div>
				<div class="form-group">
					 
					<label for="hora_termino">
						Hora termino:
					</label>
					<div class="inline">
					<select class= "form-control" name= "id_hora_termino" required>
					<option value="">escolha...</option>
					<?php foreach($horarios_termino as $hora2) : ?>
        <option value="<?=$hora2['id_hora_termino']?>"><?=$hora2['hora_termino']?> </option>
        <?php endforeach ?>
		</select>
					</div>
				</div>
					<div class="form-group">
					 
					<label class="control-label" for="laboratorio">
						Labs:
					</label>
                                 </div>
                  <div>
            
					<label><input type="checkbox" id="lab_01"  name="lab_01" value="1"> Lab 01</label>
                     </br>
	                <label><input type="checkbox" id="lab_02"  name="lab_02" value="1"> Lab 02</label>

                  </div>
				</br>
				<div class="form-group">
					 
					<label for="obs">
						Obs.:
					</label>
					<textarea class="form-control"  name="obs" placeholder="obs..."></textarea>
				</div>
		
				
				<button type="submit" class="btn btn-default">
					Salvar
				</button>
			</form>
			
			
<?php include("rodape.php"); ?>
		