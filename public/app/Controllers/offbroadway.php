<?php
/**
 * Created by PhpStorm.
 * User: matthewtrask
 * Date: 10/11/15
 * Time: 12:07 PM
 */

namespace controllers;

use core\view;
use helpers\form;
use helpers\url;
use helpers\phpmailer\mail;

class offbroadway extends \core\controller {

    private $_obct;

    public function __construct(){
            parent::__construct();

            $this->_obct = new \models\obct();

    }

    public function index(){
        $data['title'] = 'Home';

        view::rendertemplate('header', $data);
        view::rendertemplate('home', $data);
        view::rendertemplate('footer', $data);
    }

    public function aboutus(){
        $data['title'] = 'About OBCT';

        // Gets the 5 bullet points
        $points = $this->_obct->getAbout();
        $data['points'] = $points;

        // Gets the bigger text section by ID
        $summary = $this->_obct->getSummary();
        $data['summary'] = $summary;

        View::rendertemplate('header', $data);
        View::rendertemplate('aboutus', $data);
        View::rendertemplate('footer');

    }

    public function classes(){
        $data['title'] = 'About OBCT';
    }

    public function troupe(){
        $data['title'] = 'About OBCT';
    }

    public function juniorTroupe(){
        $data['title'] = 'About OBCT';
    }

    public function gallery(){
        $data['title'] = 'About OBCT';
    }

    public function currentProd(){
        $data['title'] = 'About OBCT';
    }

    public function questions(){
        $data['title'] = 'Questions';
    }

    public function boxOffice(){
        $data['title'] = 'Box Office';
    }

    public function contact(){
        $data['title'] = 'Contact';


        view::rendertemplate('header', $data);
        view::rendertemplate('contact');
        view::rendertemplate('footer');
    }

    public function postContact(){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $cleanName = filter_var($name, FILTER_SANITIZE_STRING);
        $cleanEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
        $cleanPhone = filer_var($phone, FILTER_SANITIZE_STRING);
        $cleanMsg = filter_var($message, FILTER_SANITIZE_STRING);


        $mail = new \PHPMailer(true);


        $mail->From = $cleanEmail;
        $mail->FromName = $cleanName;
        $mail->addAddress('mjftrask@gmail.com');
        $mail->addReplyTo($cleanEmail, $cleanName);

        $mail->Subject = 'A message for OBCT from ' . $cleanName;
        $mail->Body = $cleanMsg . "<br>This message is from $cleanName ($cleanEmail)";

        if(!empty($cleanName) && !empty($cleanEmail) && !empty($cleanPhone) && !empty($cleanMsg)){
            if (!$mail->send()) {
                ?><div data-alert class="alert-box alert round" style="margin-top: 20px;">
                    Something went wrong when sending your contact email. Please check your spelling and try again.
                    <a href="#" class="close">&times;</a>
                </div><?php
            }
            else {
                ?><div data-alert class="alert-box success radius" style="margin-top: 20px;">
                    Your message has been successfully sent. We will be in contact with you soon.
                    <a href="#" class="close">&times;</a>
                </div><?php
            }
        }
        else {
            ?><div data-alert class="alert-box alert round" style="margin-top: 20px;">
                Something went wrong when sending your contact email. Please check your spelling and try again.
                <a href="#" class="close">&times;</a>
            </div><?php
        }

        $this->insertContact($name, $phone, $email, $message);

    }

    public function insertContact($name, $phone, $email, $message)
    {
        $contactMessage = array(
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message
        );

        $this->_obct->insertContact($contactMessage);
    }
}