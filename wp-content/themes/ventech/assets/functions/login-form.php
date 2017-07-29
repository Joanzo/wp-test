<?php

foreach($_POST as $key => $value) {
	if(ini_get('magic_quotes_gpc'))
		$_POST[$key] = stripslashes($_POST[$key]);
	
	$_POST[$key] = htmlspecialchars(strip_tags($_POST[$key]));
}


//sender data
$email = $_POST['input-email'];
$password = $_POST['input-password'];

if( isset( $_POST['submit-login'] ) ) {    
    if( $email != '' && $password != '' ) 			{
		$arrResult = array ('response'=>'success'); 
    } else {
		$arrResult = array ('response'=>'error');	         
    }
    
} else {
		$arrResult = array ('response'=>'unexpected');
}
echo json_encode($arrResult);
?>