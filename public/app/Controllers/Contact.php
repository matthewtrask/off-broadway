<?php

namespace controllers;
use Dotenv\Dotenv;
use Carbon\Carbon;

class contact
{
    private $contact;

    public function __construct()
    {
        $this->contact = new contact();
    }

    public function contact()
    {
        $dotEnv = new Dotenv('/var/www/public/');
        $dotEnv->load();

        $mail = new \Helpers\PhpMailer\Mail();

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $msg = $_POST['message'];

        $cleanName = filter_var($name, FILTER_SANITIZE_STRING);
        $cleanPhone = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
        $cleanEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
        $cleanMsg = filter_var($msg, FILTER_SANITIZE_STRING);


        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'mailtrap.io';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = '5590563566d147ef1';                 // SMTP username
        $mail->Password = 'd8c99bcfc8a43d';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 2525;

        $mail->setFrom($cleanEmail, $cleanName);
        $mail->addAddress('offbroadway@msn.com');
        $mail->subject('A message from Offbroadwaykids.net' );
        $mail->body("<b>Name</b>: " . $cleanName .
                    "<br><b>Phone</b>: " .$cleanPhone .
                    "<br><b>Message</b>: " . $cleanMsg);
        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo '<p>Message has been sent</p>';
        }

        $message = array(
            'name' => $cleanMsg,
            'phone' => $cleanPhone,
            'email' => $cleanEmail,
            'msg' => $cleanMsg
        );
    }

}