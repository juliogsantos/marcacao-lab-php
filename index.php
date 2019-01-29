<?php include("cabecalho.php"); 
?>


<?php if(array_key_exists("erro", $_GET) && $_GET['erro']==true) { ?>
<center>
<h2 class="alert alert-danger" role="alert">Erro ao efetuar o login, tente novamente!</h2>
</center>
</br>
<?php } ?>
 
 <center>
 <fieldset style="width:300px; display:block; background-color:white;">
	<h1 style="color:#AABBCC;">Faça o login</h1>
	<br>
	<br>
	<br>
	<br>
	<div style="width:300px;">
	<form action="helpers/login-helper.php" method="post">
	<input style="width:300px; height:25px; margin-bottom:5px;" type="text" name="user" placeholder=" Ex.: John_Doe1957"></input><br>
	<input style="width:100%; height:25px; margin-top:5px;" type="password" name="pass" placeholder=" Sua senha"></input><br>
	<ul style="display:inline; display:block; width:100%;">
	<button style="width:100px; float:left; margin-top:25px; margin-left:45px;" class="btn btn-default" type"submit"> Entrar</button>
	<button style="width:100px; float:right; margin-top:25px;" class="btn btn-default" type="reset">Cancelar</button>
	</ul>
	
	</form>
	</div>
 </fieldset>
 </center>
<?php include("rodape.php"); ?>

