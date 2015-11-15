<?php

    require_once 'inc/MCAPI.class.php';
    $api = new MCAPI('9be060065ba208a49d8695378aaa6bef-us12');

    // Submit subscriber data to MailChimp
    // For parameters doc, refer to: http://apidocs.mailchimp.com/api/1.3/listsubscribe.func.php
    $retval = $api->listSubscribe( 'c3ad951a26', $_POST["email"], '', 'html', false, true );

    if ($api->errorCode){
    } else {
    }

?>