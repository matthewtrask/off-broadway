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

    public function insertChangelog($changeLog)
    {
        $this->_db->insert(PREFIX.'changelog', $changeLog);
    }


    public function insertTeacher($teacher)
    {
        //
    }

    public function insertNewClass($newClass)
    {
        $this->_db->insert(PREFIX.'classes', $newClass);
    }

    public function insertFaq($faq)
    {
        $this->_db->insert(PREFIX.'faq', $faq);
    }

    public function insertAuditions($audition)
    {
        $this->_db->insert(PREFIX.'auditions', $audition);
    }

    public function insertUrl()
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
        return $this->_db->select('select id, content from '.PREFIX.'about');
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
        return $this->_db->select('select id, show_title, description, dates, price, tickets, image from '.PREFIX.'current_show');
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
        return $this->_db->select('select id, content from .'.PREFIX.'about_troupe');
    }

    public function getTroupeAddtInfo()
    {
        return $this->_db->select('select id, title, point from .'.PREFIX.'troupe_points');
    }

    public function getJrTroupeInfo()
    {
        return $this->_db->select('select id, content from .'.PREFIX.'about_jr_troupe');
    }

    public function getJrTroupeImages()
    {
        return $this->_db->select('select id, troupe_member, image from '.PREFIX.'junior_troupe');
    }

    public function getSchoolPoints()
    {
      return $this->_db->select('select id, point, answer from '.PREFIX.'school_points');
    }

    public function getSchools()
    {
      return $this->_db->select('select id, school, location, details, current_show from '.PREFIX.'schools');
    }

    public function getPages()
    {
      return $this->_db->select('select id, url, value, description from '.PREFIX.'pages where active = 1');
    }

    public function getAuditions()
    {
        return $this->_db->select('SELECT id, show_title, show_teaser, show_dates, show_image, show_audition_dates, show_audition_times, show_info_one, show_info_two from '.PREFIX.'auditions');
    }

    public function getSummerSession()
    {
        return $this->_db->select('SELECT id, show_title, ages, dates, time, cost, show_dates, about_show, show_image from '.PREFIX.'summer_sessions');
    }

    public function getSummerInfo()
    {
        return $this->_db->select('SELECT id, summer_info from '.PREFIX.'summer_info');
    }

    public function getAlerts()
    {
        return $this->_db->select('SELECT id, alert, link from '.PREFIX.'alert WHERE active = 1');
    }
    // UPDATE METHODS
    public function updateClasses($updatedInfo, $where)
    {
        $this->_db->update(PREFIX.'classes', $updatedInfo, $where);
    }

    public function updateFaq($editFaq, $where)
    {
        $this->_db->update(PREFIX.'faq', $editFaq, $where);
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

    public function updateUrls()
    {
      //
    }

    public function updateAuditions()
    {
        //
    }

    // DELETE METHODS

    public function deleteFaq($faqId)
    {
        $this->_db->delete(PREFIX.'faq', $faqId);
    }

    public function removeClass($classId)
    {
        $this->_db->delete(PREFIX.'classes', $classId);
    }
}
