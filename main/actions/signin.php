<?php
ob_start();
session_start();
include('../connect/db.php');
include('functions.php');	
	$email = validateFormData(filter_input(INPUT_POST, 'email'));
	$password = validateFormData(filter_input(INPUT_POST, 'password'));

	$sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
	$result = $con->query($sql);
	if($result->num_rows > 0){

        $tosin_req = mysqli_fetch_assoc($result);
        $_SESSION['doc'] = $tosin_req['fullname'];
		 $_SESSION['man'] = $email;
		 echo "welcome";
	}
	else{
		echo "Sorry o sir but there was an error here hope you dont mind if we go back and check it oursleves
		";
	}

?>