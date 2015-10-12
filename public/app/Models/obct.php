<?php
namespace models;

class Obct extends \core\model {

    public function __construct(){
            parent::__construct();
    }

    // INSERT METHODS    
    public function insertContact($message) {
        $this->_db->insert(PREFIX."contact", $message);
    }

    public function insertAbout($about) {
        $this->_db->insert(PREFIX."about", $about);
    }

    // GET METHODS
    public function getContact() {
        return $this->_db->select('SELECT name, email, phone, message FROM '.PREFIX.'contact');
    }

    public function getAbout() {
        return $this->_db->select('select id, title, content, updateDate from '.PREFIX.'about where id in (1, 2, 3, 4, 5)');
    }

    public function getSummary() {
        return $this->_db->select('select id, title, content, updateDate from '.PREFIX.'about where id = 6');
    }

    // UPDATE METHODS


}
