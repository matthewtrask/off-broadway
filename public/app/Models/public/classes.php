<?php

namespace models;

class Classes extends \core\model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getClasses()
    {
        return $this->_db->select('select id, class_title, teaser, description, ages, day, time, price, link from '.PREFIX.'classes');
    }
}