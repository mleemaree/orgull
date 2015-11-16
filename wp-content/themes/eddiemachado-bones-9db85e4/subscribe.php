<?php
    require_once 'library/inc/MCAPI.class.php';
    $api = new MCAPI('9be060065ba208a49d8695378aaa6bef-us12');
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    // Submit subscriber data to MailChimp
    // For parameters doc, refer to: http://apidocs.mailchimp.com/api/1.3/listsubscribe.func.php
    $retval = $api->listSubscribe( 
    	'c3ad951a26', 
    	$email, 
    	'', 
    	'html', 
    	false, 
    	true 
    	);
    if ($api->errorCode){
    } else {
    }
?>