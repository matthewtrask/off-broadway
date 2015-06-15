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
    $data['title'] = 'About OBD';

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

  }
}
?>
