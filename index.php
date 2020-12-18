<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Contact form index file
        </title>
        <link rel="stylesheet" type="text/css" href="contact_form_files\contact_form_style.php">
        <meta charset="UTF-8">
        <meta name="author" content="lujoh">
        <style>
            .example_div {
                width:80%;
                margin:auto;
            }
        </style>
    </head>
    <body>
        <div class="example_div">
            <h1>
                Example page with contact form
            </h1>
            <p>
                Contact form will be displayed below this paragraph.
            </p>
            <?php 
            require_once "contact_form_files\contact_form.php";
                ?>
        </div>
    </body>
</html>