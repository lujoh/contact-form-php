<?php
require_once 'contact_form_classes';

if(isset($_POST['send'])){
    $name = new Input('name');
    $email = new Input('email');
    $subject = new Input('subject');
    $message = new Input('message');
    $new_contact_form = new Contact_Message($name, $email, $subject, $message);
    $result_message = $new_contact_form->result_message;
}


