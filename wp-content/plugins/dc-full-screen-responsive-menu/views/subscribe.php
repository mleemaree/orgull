<?php

    require_once '<?php echo get_template_directory_uri(); ?>/library/inc/MCAPI.class.php';
    $api = new MCAPI('9be060065ba208a49d8695378aaa6bef-us12');
    $merge_vars = '';
    // Submit subscriber data to MailChimp
    // For parameters doc, refer to: http://apidocs.mailchimp.com/api/1.3/listsubscribe.func.php
    $retval = $api->listSubscribe( 'c3ad951a26', filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL), $merge_vars, 'html', false, true );

    if ($api->errorCode){
    	echo'reoor'
    } else {
    	echo 'done'
    }

?>