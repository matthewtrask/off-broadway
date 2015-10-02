<?php

namespace Controllers;

use Core\View;
use Core\Controller;
use helpers\form;
use helpers\phpmailer\mail;


class OBD extends Controller{

  public function index() {
    $data['title'] = 'Home';

    View::rendertemplate('header', $data);
    View::rendertemplate('home');
    View::rendertemplate('footer');
  }

  public function happenings() {
    $data['title'] = 'What\'s New';

    View::rendertemplate('header', $data);
    View::rendertemplate('happenings');
    View::rendertemplate('footer');

  }

  public function Schools() {
    $data['title'] = 'Schools';

    View::rendertemplate('header', $data);
    View::rendertemplate('schools');
    View::rendertemplate('footer');
  }

  public function AboutUs () {
    $data['title'] = 'About OBCT';

    View::rendertemplate('header', $data);
    View::rendertemplate('aboutus');
    View::rendertemplate('footer');
  }

  public function Teachers() {
    $data['title'] = 'Teachers';

    View::rendertemplate('header', $data);
    View::rendertemplate('teachers');
    View::rendertemplate('footer');

  }

  public function Gallery() {

  }

  public function Troupe() {
    $data['title'] = 'Troupe';

    View::rendertemplate('header', $data);
    View::rendertemplate('troupe');
    View::rendertemplate('footer');
  }

  public function Classes() {
    $data['title'] = 'Classes';

    View::rendertemplate('header', $data);
    View::rendertemplate('classes');
    View::rendertemplate('footer');
  }

  public function Questions() {
    $data['title'] = 'Questions';

    View::rendertemplate('header', $data);
    View::rendertemplate('questions');
    View::rendertemplate('footer');
  }

  public function CurrentProd() {
    $data['title'] = "Current Production";

    View::rendertemplate('header', $data);
    View::rendertemplate('currentprod');
    View::rendertemplate('footer');
  }

  public function Upcoming() {
    $data['title'] = 'Upcoming Shows';

    View::rendertemplate('header', $data);
    view::rendertemplate('upcoming');
    View::rendertemplate('footer');
  }

  public function Auditions() {
    $data['title'] = 'Auditions';

    View::rendertemplate('header', $data);
    view::rendertemplate('auditions');
    View::rendertemplate('footer');
  }

  public function Register() {
    $data['title'] = 'Register';

    View::rendertemplate('header', $data);
    View::rendertemplate('register');
    View::rendertemplate('footer');
  }

  public function BoxOffice() {
    $data['title'] = 'Box Office';

    View::rendertemplate('header', $data);
    View::rendertemplate('boxoffice');
    View::rendertemplate('footer');
  }

  public function Contact(){
    $data['title'] = 'Contact';


    $data['form_start'] = form::open($params = array('method'=>'POST', 'class'=>'form'));
    $data['form_close'] = form::close();

    $data['form_name'] = form::input($params = array('name' => 'name', 'type' => 'text', 'id' => 'formName', 'class' => 'form-control', 'placeholder' => 'Name'));
    $data['form_email'] = form::input($params = array('name' => 'email', 'type' => 'email', 'id' => 'formEmail', 'class' => 'form-control', 'placeholder' => 'Email Address'));
    $data['form_message'] = Form::textbox($params = array('id'=>'message', 'class'=>'form-control', 'cols'=>'85', 'rows'=>'5', 'placeholder'=>'Ask a question, or leave a comment'));
    $data['form_submit']   = Form::input($params = array('type'=>'submit', 'name'=>'submit', 'id'=>'submit', 'value'=>'Submit', 'class'=>'btn btn-lg btn-block btn-info pull-right'));
 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $cleanName = filter_var($name, FILTER_SANTIZE_STRING);
    $cleanEmail = filter_var($email, FILTER_SANTIZE_EMAIL);
    $cleanMessage = filter_var($message, FILTER_SANTIZE_STRING);

    $mail = new \helpers\phpmailer\mail();

    if(!empty($cleanName) && !empty($cleanEmail) && !empty($cleanMessage)){
        $mail->setFrom($cleanEmail);
        $mail->addAddress('offbroadway@msn.com');
        $mail->subject("A message for Off Broadway Children's Theatre");
        $mail->body("Name: ".$cleanName ."<br>Email: ".$cleanEmail."<br>Message: ".$cleanMessagenNumOfPpl."<br>Message: ".$cleanApptMsg."<br>Review Message: ".$cleanReview."<br>Question: ".$cleanQuestion);
        $mail->send();
    }

    

    

    View::rendertemplate('header', $data);
    View::rendertemplate('contact', $data);
    View::rendertemplate('footer');
  }
}
?>
