<?php

namespace controllers;

use core\view;

class Classes extends \core\Controller
{
    /**
     * @var \models\Classes
     */
    private $classes;

    /**
     * @var \models\Obct
     */
    private $obct;

    public function __construct()
    {
        parent::__construct();

        $this->classes = new \models\Classes();

        $this->obct = new \models\Obct();
    }

    public function classes()
    {
        $data['title'] = 'Classes';

        $classes = $this->classes->getClasses();

        $data['classes'] = $classes;

        $alert = $this->obct->getAlerts();
        $data['alert'] = $alert;

        View::rendertemplate('header', $data);
        View::rendertemplate('classes', $data);
        View::rendertemplate('footer');

    }
}