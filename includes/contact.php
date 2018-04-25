<?php
if( $_POST ) {
	//phone
	$numbers = ['+1 (844) 740-8870'];
	$phone = $numbers[mt_rand(0, count($numbers) - 1)];
	//EDIT THE 3 LINES BELOW AS REQUIRED
	$to_email   	= "payments.ipc@gmail.com"; //Recipient email, Replace with own email here
	$subject        = "New Chat Notification"; //Add email subject
	$success_message = "Thanks for providing the details! We'll get back to you within 30 minutes. For immediate assistance call"; //Success Message
	

	//check if its an ajax request, exit if not
    if( !isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) AND strtolower( $_SERVER['HTTP_X_REQUESTED_WITH'] ) != 'xmlhttprequest' ) {
		
		$output = json_encode( array( //create JSON data
			'type'=>'error', 
			'text' => 'Sorry Request must be Ajax POST'
		) );
		die( $output ); //exit script outputting json data
    }

	
	//Sanitize input data using PHP filter_var().
	$user_name		= filter_var( $_POST["f_name"], FILTER_SANITIZE_STRING );
	$user_number	= filter_var( $_POST["number"], FILTER_SANITIZE_NUMBER_INT );
	$user_email		= filter_var( $_POST["email"], FILTER_SANITIZE_EMAIL );
	
	//additional php validation
	if(strlen( $user_name ) < 4 ) { // If length is less than 4 it will output JSON error.
		$output = json_encode( array( 'type'=>'error', 'text' => 'Name is too short or empty !' ) );
		die( $output );
	}

	if( !filter_var( $user_email, FILTER_VALIDATE_EMAIL ) ) { //email validation
		$output = json_encode( array( 'type'=>'error', 'text' => 'Please enter a valid email !' ) );
		die( $output );
	}

	if( !filter_var( $user_number, FILTER_SANITIZE_NUMBER_INT ) || strlen( $user_number ) < 8 ) { //email validation
		$output = json_encode( array( 'type'=>'error', 'text' => 'Please enter a valid phone number !' ) );
		die( $output );
	}

	
	//email body
	$message_body = '<html><body>';
	$message_body .= '<p style="font-size:14px;">New Chat Information !</p>';
	$message_body .= '<p><strong>' . 'Name: ' . $user_name . '</strong></p>';
	$message_body .= '<p><strong>' . 'Email: ' . $user_email . '</strong></p>';
	$message_body .= '<p><strong>' . 'Phone Number: ' . $user_number . '</strong></p>';

	$message_body .= '</html></body>';
	
	//proceed with PHP email.
	$headers = 'From: ' . $user_name . '  ' . $user_email . "\r\n" .
	'Reply-To: '.$user_email . "\r\n";

	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
	
	$send_mail = mail( $to_email, $subject, $message_body, $headers );
	
	if( !$send_mail ) {
		//If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
		$output = json_encode( array( 'type'=>'error', 'text' => 'Could not send mail! Please check your PHP mail configuration.' ) );
		die( $output );
	} else {
		$output = json_encode( array( 'type'=>'message', 'text' => 'Hi, '.$user_name .' '.$success_message .' '.$phone ) );
		die( $output );
	}
}
?>