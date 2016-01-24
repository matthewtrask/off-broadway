<?php
namespace models;

class aboutus extends \core\model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAboutUs()
    {
        return $this->_db->select('select id, content from '.PREFIX.'about');
    }
}