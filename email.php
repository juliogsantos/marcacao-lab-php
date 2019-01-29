<?php
 
require_once('email/class.phpmailer.php');
 
$mailer = new PHPMailer();
$mailer->IsSMTP();
$mailer->SMTPDebug = 1;
$mailer->Port = 587; //Indica a porta de conexão para a saída de e-mails. Utilize obrigatoriamente a porta 587.
 
$mailer->Host = 'localhost'; //Onde em 'servidor_de_saida' deve ser alterado por um dos hosts abaixo:
//Para cPanel: 'localhost';
//Para Plesk 11 / 11.5: 'smtp.dominio.com.br';
 
//Descomente a linha abaixo caso revenda seja 'Plesk 11.5 Linux'
//$mailer->SMTPSecure = 'tls';
 
$mailer->SMTPAuth = true; //Define se haverá ou não autenticação no SMTP
$mailer->Username = 'suporte@marcacao.96.lt'; //Informe o e-mai o completo
$mailer->Password = 'localhost'; //Senha da caixa postal
$mailer->FromName = 'Marcação'; //Nome que será exibido para o destinatário
$mailer->From = 'suporte@marcacao.96.lt'; //Obrigatório ser a mesma caixa postal indicada em "username"
$mailer->AddAddress('julio.santos@cambauba.org.br'); //Destinatários
$mailer->Subject = 'Teste enviado atraves do PHP Mailer - '.date("H:i").'-'.date("d/m/Y");
$mailer->Body = 'Este é um teste realizado com o PHP Mailer';
if(!$mailer->Send())
{
echo "Mensagem nao enviada";
echo "Erro: " . $mailer->ErrorInfo; exit; }
print "E-mail enviado!";
 
?>
