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

    public function index()
    {
        $data['title'] = 'Home';

        $new = $this->_obct->getWhatsNew();
        $data['new'] = $new;

        view::rendertemplate('header', $data);
        view::rendertemplate('home', $data);
        view::rendertemplate('footer', $data);
    }

    public function aboutus()
    {
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

    public function auditions()
    {
        $data['title'] = 'Auditions';

        $faq = $this->_obct->getFaq();
        $data['faq'] = $faq;

        

        View::rendertemplate('header', $data);
        View::rendertemplate('auditions', $data);
        View::rendertemplate('footer');
    }

    public function classes()
    {
        $data['title'] = 'About OBCT';
    }

    public function troupe()
    {
        $data['title'] = 'About OBCT';
    }

    public function juniorTroupe()
    {
        $data['title'] = 'About OBCT';
    }

    public function gallery()
    {
        $data['title'] = 'About OBCT';
    }

    public function currentProd()
    {
        $data['title'] = 'Current Show';

        $currentProd = $this->_obct->getCurrentShow();
        $data['currentShow'] = $currentProd;

        $upcomingShows = $this->_obct->getUpcomingShows();
        $data['upcomingShows'] = $upcomingShows;

        View::rendertemplate('header', $data);
        View::rendertemplate('currentprod', $data);
        View::rendertemplate('footer');
    }

    public function questions()
    {
        $data['title'] = 'Questions';
    }

    public function boxOffice()
    {
        $data['title'] = 'Box Office';
    }

    public function contact()
    {
        $data['title'] = 'Contact';


        view::rendertemplate('header', $data);
        view::rendertemplate('contact');
        view::rendertemplate('footer');
    }

    public function postContact()
    {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $cleanName = filter_var($name, FILTER_SANITIZE_STRING);
        $cleanEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
        $cleanPhone = filter_var($phone, FILTER_SANITIZE_STRING);
        $cleanMsg = filter_var($message, FILTER_SANITIZE_STRING);


        $mail = new \Helpers\PhpMailer\Mail();


        $mail->From = $cleanEmail;
        $mail->FromName = $cleanName;
        $mail->setFrom($cleanEmail);
        $mail->addAddress('mjftrask@gmail.com');
        $mail->addReplyTo($cleanEmail, $cleanName);

        $mail->Subject = 'A message for OBCT from ' . $cleanName;
        $mail->Body = $cleanMsg . "<br>This message is from $cleanName ($cleanEmail)";
        $mail->send();

        $this->insertContact($cleanName, $cleanPhone, $cleanEmail, $cleanMsg);

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