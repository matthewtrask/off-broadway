<?php

namespace Controllers;

use Core\View;
use Core\Controller;


class OBD extends Controller{

  public function index() {
    $data['title'] = 'Home';

    View::rendertemplate('header', $data);
    View::rendertemplate('home');
    View::rendertemplate('footer');
  }

  public function WhatsNew() {
    $data['title'] = 'What\'s New';

    View::rendertemplate('header', $data);
    View::rendertemplate('whatsnew');
    View::rendertemplate('')

  }

  public function Schools() {

  }

  public function AboutUs () {

  }

  public function Teachers() {

  }

  public function Troupe() {

  }

  public function Classes() {

  }

  public function Questions() {

  }

  public function CurrentProd() {

  }

  public function Upcoming() {

  }

  public function Auditions() {

  }

  public function Register() {

  }

  public function BoxOffice() {

  }

  public function Contact(){

  }
}
?>
