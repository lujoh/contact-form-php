<div class="contact_form_container">
    <h3 class="contact_form_header">
        Contact form:
    </h3>
    <!--This form uses the method POST and when it is submitted it reloads the same page. If you want to load the results on a different page add that page in the action tag-->
    <form name="contact" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        
        <label for="subject">Subject:</label>
        <input type="text" name="subject" id="jubject" required>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" id="message"></textarea>
        
        <input type="submit" name="send" value="send">
    </form>
</div>