<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';//Faz carregamento automatico dos pacotes

    // var_dump($_POST);

    $dados = [
    	'nome' => $_POST['nome'] ?? '',
    	'pais' => $_POST['pais'] ?? '',
    	'mensagem' => $_POST['mensagem']
    ];

    $mail = new PHPMailer(true);//Habilita as exceptions

    try{
    	$mail->SMTPDebug = SMTP::DEBUG_SERVER;//Para Debugar
    	$mail->isSMTP();//Usar smtp para enviar e-mail
    	$mail->Host = '';
    	$mail->SMTPAuth = true;//Email autenticado apara não cair no span
    	$mail->Username = '';
    	$mail->Password = '';
    	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    	$mail->Port = 587;
    	$mail->CharSet = 'UTF-8';

    	//DE
    	$mail->setFrom('email@email.com', 'Maycon');

    	//PARA
    	$mail->addAddress('email@email.com', 'Maria');

    	//Conteudo
    	$mail->isHTML(true);//Vou usar tags html
    	$mail->Subject = 'Assunto';

    	$corpo = "<b>NOME: </b> {$dados['nome']} <br />";
    	$corpo .= "<b>PAÍS: </b> {$dados['pais']} <br />";
    	$corpo .= "<b>MENSAGEM: </b> {$dados['mensagem']} <br />";

    	$mail->Body = $corpo;//Corpo do e-mail vai ser a variavel corpo

    	$mail->send();//Para enviar

    	echo "Mensagem enviada com sucesso!";
    } catch(Exception $e){
    	echo "a mensagem não pôde ser enviada. Erro: {$error->ErrorInfo}";
    }
?>