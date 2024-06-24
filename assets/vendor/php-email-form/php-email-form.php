<?php
class PHP_Email_Form {
    public $to;
    public $from_name;
    public $from_email;
    public $subject;
    public $message;
    public $smtp;
    
    public function send() {
        $headers = 'From: ' . $this->from_name . ' <' . $this->from_email . '>' . "\r\n";
        $headers .= 'Reply-To: ' . $this->from_email . "\r\n";
        $headers .= 'X-Mailer: PHP/' . phpversion();
        
        if(mail($this->to, $this->subject, $this->message, $headers)) {
            return true;
        } else {
            return false;
        }
    }
}
?>
