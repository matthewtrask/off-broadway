<?php

namespace controllers;

use core\view;

class teachers extends \core\Controller
{
    private $teacher;

    private $obct;

    public function __construct()
    {
        parent::__construct();

        $this->teacher = new \models\teachers();

        $this->obct = new \models\Obct();
    }

    public function teachers()
    {
        $data['title'] = 'Teachers';

        $show = $this->obct->getCurrentShow();
        $data['show'] = $show;

        $teachers = $this->teacher->getTeachers();
        $data['teachers'] = $teachers;

        $alert = $this->obct->getAlerts();
        $data['alert'] = $alert;

        View::rendertemplate('header', $data);
        View::rendertemplate('teachers', $data);
        View::rendertemplate('footer');
    }
}