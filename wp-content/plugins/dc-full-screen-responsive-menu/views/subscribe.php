<?php
include_once 'mailchimp.php';
 
if (isset($_POST['Submit'])) {
	if (empty($_POST['email'])) {
		echo 'Please enter an email address.';
	} else {
		$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		/*
		 * Place here your validation and other code you're using to process your contact form.
		 * For example: mail('your@mail.com', 'Subject: contact form', $_POST['message']);
		 * Don't forget to validate all your form input fields!
		 */

		if (!empty($_POST['email'])) {
			$mc = new \Drewm\MailChimp('9be060065ba208a49d8695378aaa6bef-us12');//API KEY
			$mvars = array('optin_ip'=> $_SERVER['REMOTE_ADDR'], 'FNAME' => $email, 'MMERGE3' => 'VALUE_FOR_OPT_MERGEFIELD');
			$result = $mc->call('lists/subscribe', array(
					'id'                => 'UNIQUE_LIST_ID',
					'email'             => array('email'=>$email),
					'merge_vars'        => $mvars,
					'double_optin'      => true,
					'update_existing'   => false,
					'replace_interests' => false,
					'send_welcome'      => false
				)
			);
			if (!empty($result['euid'])) {
				echo 'Thanks, please check your mailbox and confirm the subscription.';
			} else {
				if (isset($result['status'])) {
					switch ($result['code']) {
						case 214:
						echo 'You\'re already a member of this list.';
						break;
						// check the MailChimp API docs for more codes
						default:
						echo 'An unknown error occurred.';
						break;
					}
				}
			}
		}
	}
}