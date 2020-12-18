<?php
header("Content-type: text/css; charset: UTF-8"); //sets the file as a css file
require_once '_owner_settings_contact_form.php';
?>
.contact_form_container {
    width:100%;
    background-color:<?php echo $base_color; ?>;
}
.contact_form_container input[type=text], .contact_form_container input[type=email], .contact_form_container textarea{
    width:70%;
    border:solid 2px <?php echo $highlight_color; ?>;
}
.contact_form_container input[type=submit]{
    border:solid 2px <?php echo $highlight_color; ?>;
    color:<?php echo $highlight_color; ?>;
    background-color:<?php echo $main_color; ?>;
    font-weight:bolder;
}
.contact_form_container input, .contact_form_container textarea{
    padding:1%;
    border-radius:4px;
    margin-bottom:1%;
}
input:focus, textarea:focus{
    background-color:<?php echo $main_color; ?>;
}