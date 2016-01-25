<?php namespace helpers\phpmailer;
class mail extends phpmailer {
    // Set default variables for all new objects
    public $From     = 'noreply@domain.com';
    public $FromName = SITETITLE;
    //client $Host     = 'smtp.gmail.com';
    //client $Mailer   = 'smtp';
    //client $SMTPAuth = true;
    //client $Username = 'email';
    //client $Password = 'password';
    //client $SMTPSecure = 'tls';
    public $WordWrap = 75;

    public function subject($subject) {
        $this->Subject = $subject;
    }

    public function body($body) {
        $this->Body = $body;
    }
                         
    public function send() {
        $this->AltBody = strip_tags(stripslashes($this->Body))."\n\n";
        $this->AltBody = str_replace("&nbsp;","\n\n",$this->AltBody);
        return parent::send();
    }


}