<?php
namespace models;

class Obct extends \core\model {

    public function __construct(){
            parent::__construct();
    }

    // INSERT METHODS    
    public function insertContact($contactMessage) 
    {
        $this->_db->insert(PREFIX."contact", $contactMessage);
    }

    public function insertAbout($about) 
    {
        $this->_db->insert(PREFIX."about", $about);
    }

    public function insertWhatsNew($whatsNew)
    {
        $this->_db->insert(PREFIX.'whats_new', $whatsNew);
    }

    public function insertTeacher($teacher)
    {
        //
    }

    // GET METHODS
    public function getContact() 
    {
        return $this->_db->select('SELECT name, email, phone, message FROM '.PREFIX.'contact');
    }

    public function getAbout() 
    {
        return $this->_db->select('select id, title, content, updateDate from '.PREFIX.'about where id in (1, 2, 3, 4, 5)');
    }

    public function getSummary() 
    {
        return $this->_db->select('select id, title, content, updateDate from '.PREFIX.'about where id = 6');
    }

    public function getClasses() 
    {
        return $this->_db->select('select id, class_title, teaser, description, ages, day, time, price, link from '.PREFIX.'classes');
    }

    public function getMessageQueue()
    {
        return $this->_db->select('select page_change, description, time from '.PREFIX.'changelog');
    }

    public function getFaq()
    {
        return $this->_db->select('select id, question, answer from '.PREFIX.'faq');
    }

    public function getHints()
    {
        return $this->_db->select('select id, hints from '.PREFIX.'hints');
    }

    public function getWhatsNew()
    {
        return $this->_db->select('select id, title, content, button from '.PREFIX.'whats_new');
    }

    public function getCurrentShow()
    {
        return $this->_db->select('select id, show_title, description, dates, price, box_office_link, image from '.PREFIX.'current_show');
    }

    public function getUpcomingShows()
    {
        return $this->_db->select('select id, title, dates, price, image from '.PREFIX.'upcoming');
    }

    public function getTeachers(){
        return $this->_db->select('select id, name, about, image from '.PREFIX.'teachers');
    }

    public function getTroupeInfo()
    {
        return $this->_db->select('select id, content from .'.PREFIX.'about_troupe where id in (1, 2, 3)');
    }

    public function getTroupeAddtInfo()
    {
        return $this->_db->select('select id, content from .'.PREFIX.'about_troupe where id in (4, 5, 6, 7, 8, 9)');
    }

    public function getJrTroupeInfo()
    {
        return $this->_db->select('select id, content from .'.PREFIX.'about_jr_troupe');
    }

    public function getJrTroupeImages()
    {
        return $this->_db->select('select id, troupe_member, image from '.PREFIX.'junior_troupe');
    }

    // UPDATE METHODS
    public function updateClasses($updatedInfo, $where)
    {
        $this->_db->update(PREFIX.'classes', $updatedInfo, $where);
    }

    public function updateCurrentShow()
    {
        //
    }

    public function updateUpcomingShows()
    {
        //
    }

    public function updateTeachers()
    {
        //
    }

    // DELETE METHODS


}
