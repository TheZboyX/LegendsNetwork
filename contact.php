<?php
	$fname = $_POST ['nombre'];
	$mail = $_POST ['correo'];
	$subject = $_POST ['asunto'];
	$message = $_POST ['mensaje'];
	
	
	
	//cuerpo del mensaje
	$message = "Este correo ha sido enviado por: " . $fname . ", \r\n";
	$message .= "Desde el correo es: " . $mail . ", \r\n";
	$message .= "Asunto: " . $subject . ", \r\n";
	$message .= "Mensaje: " . $_POST['mensaje'] . ", \r\n";
	$message .= "Enviado el: " . date('d/m/Y', time());
	
	//a quien enviamos
	$para = 'algenis_0654@hotmail.com';
	$asunto = 'Este correo fue enviado desde www.legendsnetwork.com';
	
	//funcion mail
	mail($para, $asunto, utf8_decode($mensaje), $header);
	
	header('Location:exito.html')
	
	
?>
