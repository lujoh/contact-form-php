<?php
//This file is where I set the classes for the contact form
class Owner_settings {
    //Enter your settings here
    private $recipient_email = "example-email@address.com"; //enter the email address where you want to receive your emails
    private $full_email_subject = "Website contact form: "; //Change this to change the default subject of the emails
    //default is "Website contact form: "
    //The subject that the user enters in the form is added after the default subject part
    private $website_name = "Sample Website"; //Change this to the name of your website
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
    private $full_email_message;
    private $ready_to_send = true;
    public $sent = false;
    public $result_message;
    
    //method to create and send a new object
    function __construct($name, $email, $subject, $message) {
        $this->sender_name = $name;
        $this->sender_email = $email;
        $this->sender_subject = $subject;
        $this->sender_message = $message;
        $this->process_message
    }
    
    //method to check for errors in the input
    function check_for_input_errors($input) {
        if($input->input_error_set) {
            $this->ready_to_send = false;
            $this->result_message .= "\r\n" . $input->input_error_message;
        }
    }
    
    //method to check if message is ready to send
    function check_readiness() {
        $this->check_for_input_errors($this->sender_name);
        $this->check_for_input_errors($this->sender_email);
        $this->check_for_input_errors($this->sender_subject);
        $this->check_for_input_errors($this->sender_message);
    }
    
    //method to put together the email subject
    function build_email_subject() {
        $this->full_email_subject .= $this->sender_subject->input_value;
    }
    
    //method to put together the full message that gets sent to you
    function build_email_message() {
        $this->full_email_message = "New contact message from " . $this->website_name->input_value . "\r\n Sender name: " . $this->sender_name->input_value "\r\n Sender email:" . $this->sender_email->input_value . "\r\n Subject: " . $this->sender_subject->input_value . "\r\n Message: ". $this->sender_message->input_value;
    }
    
    //function to process and send the message if ready
    function process_message() {
        $this->check_readiness();
        if ($this->ready_to_send == true) {
            $this->build_email_subject();
            $this->build_email_message();
            if (mail($this->recipient_email, $this->full_email_subject, $this->full_email_message, $this->sender_email->input_value))
            {
                $this->sent = true;
                $this->result_message = "Thank you for your message!";
            } else {
                $this->result_message = "Something went wrong. Please try again later.";
            }
        }
        return $this->result_message;
    }
}