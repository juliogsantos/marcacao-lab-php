<?php
require_once("cabecalho.php");
require_once("menu.php");
?>
<form action="controller/verifica-senha.php" method="post">
				<div class="form-group">
					 
					<label for="user">
						Login:
					</label>
					</br>
					<input type="text" class="form-control" name="user" placehoder="Ex.: JohnDoe1957"/>
				</div>
				<div class="form-group">
					 
					<label for="pass">
						Senha:
					</label>
					<input type="password"  class="form-control" id="pass"  name="pass"/>
				</div>
				</br>
				<label for="REpass">
						Confirme senha:
					</label>
					<input type="password"  class="form-control" id="REpass"  name="REpass"/>
</br></br>
<button type="submit" style="float:right;" class="btn btn-default">
					Salvar
				</button>
				
				</div>
				
				
				
			</form>
<?php
require_once("rodape.php");
?>