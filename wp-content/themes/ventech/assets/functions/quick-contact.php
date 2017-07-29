<?php

require_once('phpmailer/class.phpmailer.php');

foreach($_POST as $key => $value) {
	if(ini_get('magic_quotes_gpc'))
		$_POST[$key] = stripslashes($_POST[$key]);
	
	$_POST[$key] = htmlspecialchars(strip_tags($_POST[$key]));
}


//recipient data
$toemail = $_POST['to-email']; // Your Email Address
$toname = $_POST['to-name']; // Your Name

//sender data
$name = $_POST['quick-name-field'];
$email = $_POST['quick-email-field'];
$message = $_POST['quick-message-field'];


$mail = new PHPMailer();

if( isset( $_POST['quick-submit'] ) ) {
    
    if( $name != '' AND $email != ''  AND $message != '' ) {
   
		$body = "Name: $name <br><br>Email: $email <br><br>Message: $message";
             
		$mail->SetFrom( $email , $name );    
		$mail->AddReplyTo( $email , $name );            
		$mail->AddAddress( $toemail , $toname );            
		$mail->Subject = "Quick message from: " . $name;            
		$mail->MsgHTML( $body );
            
		$sendEmail = $mail->Send();
		
		if( $sendEmail == true ):
		    $arrResult = array ('response'=>'success');
		else:
		    $arrResult = array ('response'=>'error','message'=>$mail->ErrorInfo);		
		endif;
    } else {
		$arrResult = array ('response'=>'empty');	         
    }
    
} else {
		$arrResult = array ('response'=>'unexpected');
}
echo json_encode($arrResult);
?>