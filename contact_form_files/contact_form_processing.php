<?php
require_once 'contact_form_files\contact_form_classes.php';

//Creates objects for each input field if the form was submitted
//then creates and sends a new message and displays the result

if(isset($_POST['send'])){
    $name = new Input('name');
    $email = new Input('email');
    $subject = new Input('subject');
    $message = new Input('message');
    $new_contact_form = new Contact_Message($name, $email, $subject, $message);
    $result_message = $new_contact_form->result_message;
}


