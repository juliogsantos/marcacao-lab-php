<?php
$destinatario = "ruds.devel@gmail.com";
$assunto = "Esta mensagem é um teste";
$corpo = '<html>
<head>
  <title>Teste de correio</title>
</head>
<body>
<h1>Testando.. Um, dois...</h1>
<p>
<b>testes</b>
</p>
</body>
</html>';
 
//para o envio em formato HTML
$headers = "MIME-Version: 1.0";
$headers .= "Content-type: text/html;
charset=iso-8859-1";
 
//endereço do remetente
$headers .= "From: julio<julio.santos@cambauba.org.br>";
 
//endereço de resposta, se quisermos que seja diferente a do remetente
$headers .= "Reply-To: julio.santos@cambauba.org.br";
 
//endereços que receberão uma copia 
$headers .= "Cc: julio.santos@cambauba.org.br";

//endereços que receberão uma copia oculta
$headers .= "Bcc: vinnie@criarweb.com,joao@criarweb.com";

mail($destinatario,$assunto,$corpo,$headers);
?>