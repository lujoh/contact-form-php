<?php
require_once "contact_form_files\contact_form_processing.php"
?>
<div class="contact_form_container">
    <h3 class="contact_form_header">
        Contact form:
    </h3>
    <!--This form uses the method POST and when it is submitted it reloads the same page. If you want to load the results on a different page add that page in the action tag-->
    <form name="contact" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" required><br>
        
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" required><br>
        
        <label for="subject">Subject:</label><br>
        <input type="text" name="subject" id="subject" required><br>
        
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" id="message" required></textarea><br>
        
        <input type="submit" name="send" value="send">
    </form>
    <!--paragraph to display the result after submitting the contact form-->
    <p class="contact_form_result">
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            echo $result_message;
        }
        ?>
    </p>

</div>