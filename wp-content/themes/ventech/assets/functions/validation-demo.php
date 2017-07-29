<?php

require_once('phpmailer/class.phpmailer.php');

foreach($_POST as $key => $value)
{
    if(ini_get('magic_quotes_gpc'))
    $_POST[$key] = stripslashes($_POST[$key]);

    $_POST[$key] = htmlspecialchars(strip_tags($_POST[$key]));
}


$mail    = new PHPMailer();

//recipient data
$toemail = $_POST['to-email']; // Your Email Address
$toname  = $_POST['to-name']; // Your Name

//sender data
$name    = $_POST['contact-form-name'];
$email   = $_POST['contact-form-email'];
$service = $_POST['contact-form-service'];
$subject = $_POST['contact-form-subject'];
$phone   = $_POST['contact-form-phone'];
$message = $_POST['contact-form-message'];


if( isset( $_POST['contact-form-submit'] ) )
{

    if( $name != '' AND $email != '' AND $subject != '' AND $message != '' )
    {
        $arrResult = array ('response'=>'success');
    }
    else
    {
        $arrResult = array ('response'=>'error','message' =>'Empty Field !');
    }

}
else
{
    $arrResult = array ('response'=>'unexpected');
}
echo $_POST['contact-form-submit'];
echo json_encode($arrResult);
?>