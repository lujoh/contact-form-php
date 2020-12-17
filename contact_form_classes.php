<?php
//This file is where I set the classes for the contact form
class Owner_settings {
    //Enter your settings here
    private $recipient_email = "example-email@address.com"; //enter the email address where you want to receive your emails
}

class Input {
    public $input_field;
    public $input_value;
    public $input_error_set;
    public $input_error_message;
    
    //method to create a new Input object
    function __construct($input_field) {
        $this->input_field = $input_field;
        set_value();
        check_input();
    }
    
    //method to clean the input value
    function clean_input($input) {
        return trim(htmlspecialchars($input));
    }
    
    //method to get the input value
    function set_value() {
        $this->input_value = clean_input($_POST[$this->input_field]);
    }
    
    //method to check if the input is set and in the right format
    function check_input() {
        if(empty($this->input_value)) {
            $this->input_error_set = true;
            $this->input_error_message = "Please fill out the " . $this->input_field . "field";
        } else {
            if($this->input_field == "email") {
                check_email_format($this->input_value);
            } else {
                $this->input_error_set = false;
            }
        }
    }
    
    //method to check if emails are in the right format
    function check_email_format() {
        if(!filter_var($this->input_value, FILTER_VALIDATE_EMAIL)) {
            $this->input_error_set = true;
            $this->input_error_message = "Please enter your email in the format user@domain.com";
        }
    }
}
class Contact_Message extends Owner_settings{
    //the information that you get from the form
    private $sender_name;
    private $sender_email;
    private $sender_subject;
    private $sender_message;
    
    //the standard information for the message
    private $full_email_subject;
    private $full_email_message;
    private $ready_to_send;
    public $sent;
    public $result_message;
    
    //method to create and send a new message
    function __construct($name, $email, $subject, $message) {
        $this->sender_name = $name;
        $this->sender_email = $email;
        $this->sender_subject = $subject;
        $this->sender_message = $message;
    }
}