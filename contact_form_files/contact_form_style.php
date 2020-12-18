<?php
header("Content-type: text/css; charset: UTF-8"); //sets the file as a css file
require_once '_owner_settings_contact_form.php';
?>
/*style of the main container*/
.contact_form_container {
    width:100%;
    background-color:<?php echo $base_color; ?>;
    padding:1%;
}
/*style of the input fields*/
.contact_form_container input[type=text], .contact_form_container input[type=email], .contact_form_container textarea{
    width:70%;
    border:solid 2px <?php echo $highlight_color; ?>;
}
/*style of the submit button*/
.contact_form_container input[type=submit]{
    border:solid 2px <?php echo $highlight_color; ?>;
    color:<?php echo $highlight_color; ?>;
    background-color:<?php echo $main_color; ?>;
    font-weight:bolder;
}
/*general style for all the input*/
.contact_form_container input, .contact_form_container textarea{
    padding:1%;
    border-radius:4px;
    margin-bottom:1%;
}
/*style for the input fields when they are in focus*/
input:focus, textarea:focus{
    background-color:<?php echo $main_color; ?>;
}