<?php
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();                                    
    $mail->Host = 'smtp.gmail.com';                     
    $mail->SMTPAuth = true;                             
    $mail->Username = 'email.com';            
    $mail->Password = '123';      
    $mail->SMTPSecure = 'tls';                         
    $mail->Port = 587;                                  

    $mail->setFrom('email.com', 'Formulário de Contato');
    $mail->addAddress($_POST['email']);

    $mail->isHTML(true);
    $mail->Subject = $_POST['assunto'];
    $mail->Body    = '<b>Nome:</b> '.$_POST['nome'].'<br><b>Mensagem:</b><br>'.$_POST['mensagem'];

    if($mail->send()){
        echo 'Mensagem enviada com sucesso!';
    }
        echo 'Mensagem não enviada';
} catch (Exception $e) {
    echo "Erro ao enviar: {$mail->ErrorInfo}";
}
?>