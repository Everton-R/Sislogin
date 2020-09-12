<?php
	
	$to = 'erocham10@gmail.com';
	$assunto = $_POST["assunto"];
	$mensagem = $_POST["mensagem"];
	$email = $_POST["email"];

	
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: $email' . "\r\n" .
    			'Reply-To: $email' . "\r\n" .
    			'X-Mailer: PHP/' . phpversion();
	
	$status = mail($to, $assunto, $mensagem, $headers);

	if($status==true){
		print "email enviado";
	}else{
		print "nao enviado";
	}

?>