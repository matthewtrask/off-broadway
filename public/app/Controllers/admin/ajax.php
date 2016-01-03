<?php namespace controllers\admin;

use \helpers\session;
use Carbon\Carbon;
use	\helpers\url;
use \Core\Model;

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
            'title'     => $title,
            'content'   => $content,
            'button'    => $link,
        );

        $this->_adminObct->insertWhatsNew($whatsNew);
    }

    public function postChangelog()
    {
        $pageTitle = $_POST['pageTitle'];
        $pageChanges = $_POST['pageChanges'];

        $changeLog = array(
            'page_change' => $pageTitle,
            'description' => $pageChanges,
        );

        $this->_adminObct->insertChangelog($changeLog);
    }

    public function addClasses()
    {
        $newClassName = $_POST['className'];
        $newClassTeaser = $_POST['teaser'];
        $newClassDesc = $_POST['classDesc'];
        $newClassDay = $_POST['classDay'];
        $newClassTime = $_POST['classTime'];
        $newClassPrice = $_POST['classPrice'];
        $newRegLink = $_POST['regLink'];

        $newClass = array(
            'class_title'   => $newClassName,
            'teaser'        => $newClassTeaser,
            'description'   => $newClassDesc,
            'day' 		    => $newClassDay,
            'time'		    => $newClassTime,
            'price'         => $newClassPrice,
            'link'          => $newRegLink,
        );

        $this->_adminObct->insertNewClass($newClass);
    }

    public function editClasses()
    {
        $updatedClassId = $_POST['updateClassId'];
        $updatedClassName = $_POST['updateClassName'];
        $updatedClassTeaser = $_POST['updateTeaster'];
        $updatedClassDesc = $_POST['updateClassDescription'];
        $updatedClassDay = $_POST['updateClassDay'];
        $updatedClassTime = $_POST['updateClassTime'];
        $updatedClassPrice = $_POST['updateClassPrice'];
        $updatedClassLink = $_POST['updateClassLink'];

        $updatedInfo = array(
            'class_title'   => $updatedClassName,
            'teaser'        => $updatedClassTeaser,
            'description'   => $updatedClassDesc,
            'day' 		    => $updatedClassDay,
            'time'		    => $updatedClassTime,
            'price'         => $updatedClassPrice,
            'link'          => $updatedClassLink,
        );

        $where = array('id' => $updatedClassId);

        $this->_adminObct->updateClasses($updatedInfo, $where);

    }

    public function removeClasses()
    {
        foreach($_POST as $id){
            $classId = array('id' => $id);
            $this->_adminObct->removeClass($classId);
        }

    }

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
        die;
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
        $question = $_POST['faqQuestion'];
        $answer   = $_POST['faqAnswer'];

        $faq = array(
            'question'    => $question,
            'answer'      => $answer,
        );

        $this->_adminObct->insertFaq($faq);
    }

    public function editFaq()
    {
        $id = $_POST['editId'];
        $question = $_POST['editQuestion'];
        $answer   = $_POST['editAnswer'];

        $faq = array(
            'question'    => $question,
            'answer'      => $answer,
        );

        $where = array('id' => $id);

        $this->_adminObct->updateFaq($faq, $where);
    }

    public function deleteFaq()
    {
        foreach($_POST as $id){
            $faqId = array('id' => $id);
            $this->_adminObct->removeClass($faqId);
        }
    }

    public function postAuditions()
    {
        if($_FILES['auditionImage']['size'] > 0) {
            $allowed_filetypes = array('jpg', 'jpeg', 'png', 'gif');
            //        $max_filesize = 10485760;
            $upload_path = $_SERVER['DOCUMENT_ROOT'] . "/app/templates/admin/img_tmp";
            $imageName = $_FILES['auditionImage']['name'];
            $ext = pathinfo($imageName, PATHINFO_EXTENSION);
            if (!in_array($ext, $allowed_filetypes))
                die('The file you attempted to upload is not allowed.');
            //        if(filesize($_FILES['roasterImage']['tmp_name']) > $max_filesize)
            //            die('The file you attempted to upload is too large.');
            if (!is_writable($upload_path))
                die('You cannot upload to the specified directory, please CHMOD it to 777.');
            if (move_uploaded_file($_FILES['auditionImage']['tmp_name'], $upload_path . '/' . $imageName)) {
                $data = file_get_contents($upload_path . '/' . $imageName);
                $auditionImage = 'data:image/' . substr($ext, 1) . ';base64, ' . base64_encode($data);
                unlink($upload_path . '/' . $imageName);
            } else {
                echo 'There was an error during the file upload.  Please try again.';
            }
        }
        else {
            $auditionImage = NULL;
        }

        $showTitle     = $_POST['showTitle'];
        $showTeaser    = $_POST['showTeaser'];
        $showDates     = $_POST['showDates'];
        $auditionDates = $_POST['auditionDates'];
        $auditionTimes = $_POST['auditionTimes'];
        $newAuditionImage = $auditionImage;


        $audition = array(
            'show_title'          => $showTitle,
            'show_teaser'         => $showTeaser,
            'show_dates'          => $showDates,
            'show_image'          => $newAuditionImage,
            'show_audition_dates' => $auditionDates,
            'show_audition_times' => $auditionTimes
        );

        $this->_adminObct->insertAuditions($audition);
    }
}
