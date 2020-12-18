<?php
//This file is where you can make changes to customize your contact form
class Owner_settings {
    //Enter your settings here
    protected $recipient_email = "example_email@domain.com"; //enter the email address where you want to receive your emails
    protected $full_email_subject = "Website contact form: "; //Change this to change the default subject of the emails
    //default is "Website contact form: "
    //The subject that the user enters in the form is added after the default subject part
    protected $website_name = "Sample Website"; //Change this to the name of your website
}
$base_color="#FFFFFF"; //change this to change the base color. default is #FFFFFF aka white. 
//this color is used for the background

$highlight_color="#000080"; //change this to change the highlight color. default is #000080 aka dark blue. 
//this color is used for the borders around the fields and buttons

$main_color="#ccccff"; //change this to change the base color. default is #ccccff aka pale blue. 
//this color is used for the background of the submit button and fields in focus