<?php
//This file is where I set the classes for the contact form

class Input {
    protected $input_type;
    protected $input_field;
    protected $input_value;
    public $input_error_set;
    public $input_error_message;
    
    //function to clean the input value
    function clean_input($input) {
        return trim(htmlspecialchars($input));
    }
    
    //function to get the input value
    function set_value() {
        $this->input_value = clean_input($_POST[$this->input_field]);
    }
    
    //function to check if the input is set and in the right format
    function check_input() {
        if(empty($this->input_value)) {
            $this->input_error_set = true;
            $this->input_error_message = "Please fill out the " . $this->input_field . "field";
        } else {
            if($this->input_type == "email") {
                check_email_format($this->input_value);
            } else {
                $this->input_error_set = false;
            }
        }
    }
    
    //function to check if emails are in the right format
    function check_email_format() {
        if(!filter_var($this->input_value, FILTER_VALIDATE_EMAIL)) {
            $this->input_error_set = true;
            $this->input_error_message = "Please enter your email in the format user@domain.com";
        }
    }
}

class Contact_Message {
    
}