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

      /**
       *
       */
      public function postContact()
      {

          $name = $_POST['name'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $message = $_POST['message'];

          $cleanName = filter_var($name, FILTER_SANITIZE_STRING);
          $cleanEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
          $cleanPhone = filter_var($phone, FILTER_SANITIZE_STRING);
          $cleanMsg = filter_var($message, FILTER_SANITIZE_STRING);

          $contact = array(
            'name'  => $cleanName,
            'email' => $cleanEmail,
            'phone' => $cleanPhone,
            'message' => $cleanMsg
          );

          $this->_adminObct->insertContact($contact);

          $mail = new \Helpers\PhpMailer\Mail();


          $mail->From = $cleanEmail;
          $mail->FromName = $cleanName;
          $mail->setFrom($cleanEmail);
          $mail->addAddress('mjftrask@gmail.com');
          $mail->addReplyTo($cleanEmail, $cleanName);

          $mail->Subject = 'A message for OBCT from ' . $cleanName;
          $mail->Body = "This message is from " . $cleanName ."<br>Phone Number: ". $cleanPhone ."<br>Message: ".$cleanMsg;
          $mail->send();

      }

      public function postCurrentShow()
      {

      }

      public function newFaq()
      {
          $question = $_POST['question'];
          $answer   = $_POST['answer'];

          $faq = array(
              'question' => $question,
              'answer'   => $answer
          );

          $this->_adminObct->insertFaq($faq);
      }

      public function updateFaq()
      {
        
      }

      public function deleteFaq()
      {
          $faqId = $_POST['id'];
          $id = array(
              'id' => $faqId
          );

          $this->_adminObct->deleteFaq($id);
      }

    public function postPageMessages()
    {
        $pageTitle = $_POST['pageTitle'];
        $pageDescription = $_POST['pageDescription'];

        $message = array(
            'page_change' => $pageTitle,
            'description' => $pageDescription
        );

        $this->_adminObct->insertChangelog($message);
    }
}
