<?php


  $nome= addcslashes($_POST['name'])
  $email= addcslashes($_POST['email']) 
  $assunto= addcslashes($_POST['subject'])
  $mensagem= addcslashes($_POST['message'])
  
  
  $to = "osmarcalado@gmail.com";
  $subject  = "Contato do Site";
  
$body = "Nome: ".$nome.  "\r\n".
		"email: ".$email. "\r\n".
		"Assunto: ".$assunto. "\r\n".
		"Mensagem: ".$mensagem;
		
$header = "From:osmarcalado@gmail.com"."\r\n".
			"Reply-to:".$email. "\e\n".
			"X=mailer:php/".phpversion();		
  

if (mail($to,$subject,$body,$header)){
echo("Email Enviado com Sucesso")

}else
	echo("Email não pode ser enviado");

}
}
  
  ?>