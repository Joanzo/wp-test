<?php

foreach($_POST as $key => $value) {
	if(ini_get('magic_quotes_gpc'))
		$_POST[$key] = stripslashes($_POST[$key]);
	
	$_POST[$key] = htmlspecialchars(strip_tags($_POST[$key]));
}

//recipient data
$firstname = $_POST['input-first'];
$lastname = $_POST['input-last'];
$phone = $_POST['input-phone'];
$email = $_POST['input-email'];
$password = $_POST['input-password'];
$confirmpass = $_POST['input-confirm'];

if( isset( $_POST['submit-register'] ) ) {
    if( $firstname != '' && $lastname != ''  &&  $email != '' && $password != '' && $confirmpass != '' ) 			{
		if ($password == $confirmpass)  
		$arrResult = array ('response'=>'success');
		else 
		$arrResult = array ('response'=>'error', 'message'=>'Password and Confirm Password does not match');
   
    } else {
		$arrResult = array ('response'=>'empty');	         
    }
    
} else {
		$arrResult = array ('response'=>'unexpected');
}
echo json_encode($arrResult);
?>