<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

class Email
{
    private $mailer;

    function __construct()
    {


        //Create an instance; passing `true` enables exceptions
        $this->mailer = new PHPMailer(true);

        //Server settings
        //$this->mailer->SMTPDebug = SMTP::DEBUG_SERVER; //ver debug do envio
        $this->mailer->CharSet = 'UTF-8';
        $this->mailer->isSMTP();
        $this->mailer->Host = 'smtp.mailtrap.io';
        $this->mailer->SMTPAuth = true;
        $this->mailer->Port = 2525;
        $this->mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->mailer->Username = '721cf1bd58b1f7';
        $this->mailer->Password = 'c3c04aa27e7e5f';

        //Recipients
        $this->mailer->setFrom('atendimendo@tayouza.com', 'atendimento');

        //Attachments
        /*$this->mailer->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            $this->mailer->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name*/        
    }

    function addEndereco($email, $nome){
        $this->mailer->addAddress($email, $nome);
    }

    function formatarEmail($infos){
        $this->mailer->Subject = $infos['assunto'];
        $this->mailer->Body    = $infos['corpo'];
        //$this->mailer->AltBody = $infos['texto'];
        //Content
        $this->mailer->isHTML(true);     //Set email format to HTML
    }

    function enviarEmail()
    {
        try{
            if ($this->mailer->send()) {
                return true;
                } else {
                return false;
                }
        }catch(Exception $e){
            #echo '<script> alert('.$e.')</script>';
        }finally{
            
        }
    }
}
