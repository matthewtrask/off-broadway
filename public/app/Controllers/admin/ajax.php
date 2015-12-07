<?php namespace controllers\admin;

use \helpers\session;
use	\helpers\url;
use	\core\view;

class Ajax extends \core\controller
{
    private $_adminObct;

    public function __construct()
  	{

  		$this->_adminObct = new \models\obct();
    }

    public function addWhatsNew()
    {
      $title = $_POST['whatsNewHeadline'];
      $content = $_POST['whatsNewContent'];
      $link = $_POST['urlSelect'];

      $whatsNew = array(
        'title'   => $title,
        'content' => $content,
        'button'  => $link
      );

      $this->_adminObct->insertWhatsNew($whatsNew);
    }

  	public function postMessage()
  	{
  		var_dump($_POST);
  	}

    public function addClasses()
  	{
      var_dump($_POST);
  	}

    public function updateClasses()
    {
      $updatedClassId = $_POST['updatedClassId'];
      $updatedClassName = $_POST['updatedClassName'];
      $updatedClassTeaser = $_POST['updatedTeaster'];
      $updatedClassDesc = $_POST['updatedClassDescription'];
      $updatedClassDay = $_POST['updatedClassDay'];
      $updatedClassTime = $_POST['updatedClassTime'];
      $updatedClassPrice = $_POST['updatedClassPrice'];
      $updatedClassLink = $_POST['updatedClassLink'];

      $updatedInfo = array(
        'class_title' => $updatedClassName,
        'teaser'      => $updatedClassTeaser,
        'description' => $updatedClassDesc,
        'day' 		  => $updatedClassDay,
        'time'		  => $updatedClassTime,
        'price'       => $updatedClassPrice,
        'link'        => $updatedClassLink
      );

      $where = array('id' => $updatedClassId);

      $this->_adminObct->updateClasses($updatedInfo, $where);

    }


    	public function removeClasses()
    	{
    		var_dump($_POST);
    	}
}
