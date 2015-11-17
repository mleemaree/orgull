<?php

 // My modifications to mailer script from:
    // http://blog.teamtreehouse.com/create-ajax-contact-form
    // Added input sanitizing to prevent injection
    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        require_once 'library/inc/MCAPI.class.php';
        $api = new MCAPI('9be060065ba208a49d8695378aaa6bef-us12');
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["nom"]));
            $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $city = strip_tags(trim($_POST["poblacio"]));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $tel = preg_replace('/[^0-9]/', '', $_POST['tel']);
        $message = trim($_POST["comentari"]);
        $merge_vars = array('FNAME'=>$name, 'LNAME'=>'', 'TEL' => $tel, 'POBL' => $city);
        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }
        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "lee@mleemaree.com";
        // Set the email subject.
        $subject = "New contact from $name";
        // Build the email content.
        $email_content = "Name: $name\n";
        $email_content .= "Poblaciò: $city\n\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Telefòn:\n$tel\n";
        $email_content .= "Message:\n$message\n";
        // Build the email headers.
        $email_headers = "From: $name <$email>";

        $mailer = mail($recipient, $subject, $email_content, $email_headers);

        $retval = $api->listSubscribe( 
        'c3ad951a26', 
        $email, 
        $merge_vars, 
        'html', 
        false, 
        true,
        true 
        );

        // Send the email.
        if ($mailer && $api->errorCode) {

            // Set a 200 (okay) response code.
            http_response_code(200);
        } if ($api ->errorCode) {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo '500';
        }
    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }


    

?>