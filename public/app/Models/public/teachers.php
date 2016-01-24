<?php

namespace models;

class teachers extends \core\Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getTeachers(){
        return $this->_db->select('select id, name, about, image from '.PREFIX.'teachers');
    }
}