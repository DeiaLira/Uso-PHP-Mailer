<?php

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


function envia_gmail($string, $nome){

$mail = new PHPMailer(true);
 
try {
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'osegredodeop.binarias@gmail.com';
	$mail->Password = 'segredo2020';
	$mail->Port = 587;
 
	$mail->setFrom('osegredodeop.binarias@gmail.com');
	$mail->addAddress($string);
	$mail->addAddress('endereco2@provedor.com.br');
 
	$mail->isHTML(true);
	$mail->Subject = 'Teste de email via gmail';
	$mail->Body = ($nome);
	$mail->AltBody ='Chegou o email teste do Op';
 
	if($mail->send()) {
		echo 'Email enviado com sucesso';
		?><br /><?php
	} else {
		echo 'Email nao enviado';
		?><br /><?php
	}
} catch (Exception $e) {
	echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
	?><br /><?php
}
}



function envia_hotmail($string, $nome){

$mail = new PHPMailer(true);
 
try {
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'osegredodeop.binarias@gmail.com';
	$mail->Password = 'segredo2020';
	$mail->Port = 587;
 
	$mail->setFrom('osegredodeop.binarias@gmail.com');
	$mail->addAddress($string);
	$mail->addAddress('endereco2@provedor.com.br');
 
	$mail->isHTML(true);
	$mail->Subject = 'Teste de email via gmail';
	$mail->Body = ($nome);
	$mail->AltBody = 'Chegou o email teste do Op';
 
	if($mail->send()) {
		echo 'Email enviado com sucesso';
		?><br /><?php
	} else {
		echo 'Email nao enviado';
		?><br /><?php
	}
} catch (Exception $e) {
	echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
	?><br /><?php
}
}


function envia_outlook($string, $nome){

$mail = new PHPMailer(true);
 
try {
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'osegredodeop.binarias@gmail.com';
	$mail->Password = 'segredo2020';
	$mail->Port = 587;
 
	$mail->setFrom('osegredodeop.binarias@gmail.com');
	$mail->addAddress($string);
	$mail->addAddress('endereco2@provedor.com.br');
 
	$mail->isHTML(true);
	$mail->Subject = 'Teste de email via gmail';
	$mail->Body = ($nome);
	$mail->AltBody = 'Chegou o email teste do Op';
 
	if($mail->send()) {
		echo 'Email enviado com sucesso';
		?><br /><?php
	} else {
		echo 'Email nao enviado';
		?><br /><?php
	}
} catch (Exception $e) {
	echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
	?><br /><?php
}
}

?>
<form action="../index.html" method="get"><button type="submit" href="../index.html"> Voltar </button></form><?php
?><br /><?php

?>