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
        var_dump($_POST);
    }
}