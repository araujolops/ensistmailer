<?php

/**
 * Email [ MODEL ]
 * Descrição: Classe para envio de email
 * @copyright (c) 2019, Alexandre - Ensist Sistemas
 * @link URL http://www.ensist.com.br
 * @email alexandre@ensist.com.br
 */

namespace Ensistmailer;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email {

    private $mail = \stdClass::class;

    public function __construct($smtpDebug, $host, $user, $pass, $smtpSecure, $port, $setFromEmail, $setFromName) {
        $this->mail = new PHPMailer;
        $this->mail->SMTPDebug = $smtpDebug;                 // Enable verbose debug output
        $this->mail->isSMTP();                               // Set mailer to use SMTP
        $this->mail->Host = $host;                           // Specify main and backup SMTP servers
        $this->mail->SMTPAuth = true;                        // Enable SMTP autentication
        $this->mail->Username = $user;                       // SMTP username
        $this->mail->Password = $pass;                       // SMTP password
        $this->mail->SMTPSecure = $smtpSecure;               // Enable TLS encryption, 'ssl' also accepted 
        $this->mail->Port = $port;                           // TCP port connect to
        $this->mail->Charset = 'utf-8';
        $this->mail->setLanguage('br');
        $this->mail->isHTML(true);
        $this->mail->setFrom($setFromEmail, $setFromName);
    }

    public function sendMail($subject, $body, $replyEmail, $replayName, $addressEmail, $addressName) {
        $this->mail->Subject = (string) $subject;
        $this->mail->Body = $body;
        $this->mail->addReplyTo($replyEmail, $replayName);
        $this->mail->addAddress($addressEmail, $addressName);

        try {
            $this->mail->send();
        } catch (Exception $e) {
            echo "Erro ao enviar o e-mail: {$this->mail->ErrorInfo} {$e->getMessage()}";
        }
    }

}
