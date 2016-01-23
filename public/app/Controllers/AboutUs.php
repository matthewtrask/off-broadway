<?php

namespace controllers;
use core\view;

class AboutUs extends \core\controller
{
    /**
     * @var \models\aboutus
     */
    private $about;

    /**
     * @var \models\Obct
     */
    private $_obct;

    public function __contruct()
    {
        parent::__construct();

        $this->about = new \models\aboutus();

        $this->_obct = new \models\obct();
    }

    /**
     *
     */
    public function aboutus()
    {
        $data['title'] = 'About OBCT';

        $about = $this->about->getAboutUs();
        $data['about'] = $about;

        $alert = $this->_obct->getAlerts();
        $data['alert'] = $alert;

        View::rendertemplate('header', $data);
        View::rendertemplate('aboutus', $data);
        View::rendertemplate('footer');

    }
}