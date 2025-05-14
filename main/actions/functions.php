<?php
ob_start();

function validateFormData($formdata){
	$formdata = trim( stripslashes( htmlspecialchars( strip_tags( str_replace( array(  '(',  ')'  ), ' ', $formdata ) ), ENT_QUOTES) ) );
	return $formdata;
}
 
function generateRandomString($length = 10) {
	return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
		}

?>