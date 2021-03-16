<?php
header('Content-Type: application/json');

$debug = false;

require ('PHPMailerAutoload.php');

// csrf protection
session_start();

if ($_POST['token'] === $_SESSION['token']) {

    // validate fields
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (! empty($name) && ! empty($phone) && ! empty($email) && ! empty($message) ) {

            $username   = 'contato@mundialcomunicacao.com.br';
            $password   = 'NuX*5TyfaMtG@xWD';
            $host       = 'smtp.mundialcomunicacao.com.br';

            $fromName   = 'Mundial Comunicação Visual';
            $subject    = '[MUNDIAL] Contato';
            $replyTo    = 'andre@mundialcomunicacao.com.br';
            $address    = $debug ? 'marianazorzo@gmail.com' : 'andre@mundialcomunicacao.com.br';
            $bcc        = 'marianazorzo@gmail.com';

            $body = file_get_contents('mail-content.php');
            $body = str_replace('$subject', $subject, $body);
            $body = str_replace('$name', $name, $body);
            $body = str_replace('$phone', $phone, $body);
            $body = str_replace('$email', $email, $body);
            $body = str_replace('$message', $message, $body);

            $mail = new PHPMailer();
            $mail->CharSet = 'UTF-8';
            $mail->IsSMTP();
            $mail->SMTPAuth = true;       // Habilita autenticação SMTP
            //$mail->SMTPSecure = "ssl";    // Habilita SSL
            $mail->Host = $host;
            $mail->Port = 587;

            $mail->Username = $username;
            $mail->Password = $password;
            $mail->From = $username;
            $mail->FromName = $fromName;
            $mail->Subject = $subject;
            $mail->MsgHTML($body);

            //$mail->AddAttachment("/caminho/para/arquivo.zip");
            //$mail->AddAttachment("/caminho/para/imagem.jpg", "new.jpg");

            $mail->AddReplyTo($replyTo);

            $mail->AddAddress($address);
            //$mail->AddAddress("destinatario@dominio.com", "Nome Destinatário");

            $mail->addBCC($bcc);

            $mail->IsHTML(true);    // Enviar como HTML

            if (! $mail->send()) {
                echo json_encode(array(
                    'error'        => true,
                    'userMessage'  => 'Erro ao enviar a mensagem. Tente novamente mais tarde.',
                    'errorMessage' => $mail->ErrorInfo,
                ));

            } else {
                echo json_encode(array(
                    'error'       => false,
                    'userMessage' => 'Mensagem enviada com sucesso! Em breve entraremos em contato.',
                ));
            }

    } else {
        echo json_encode(array(
            'error'        => true,
            'userMessage'  => 'Verifique os campos obrigatórios.',
            'errorMessage' => 'Validation error',
        ));
    }

} else {
    echo json_encode(array(
        'error'        => true,
        'userMessage'  => 'Erro ao enviar. Tente novamente mais tarde.',
        'errorMessage' => 'Invalid token',
    ));
}