<?php
ob_start();
session_start();
require '../connect/db.php';   

// Collect all data safely
$firstname    = isset($_POST['firstname']) ? $con->real_escape_string($_POST['firstname']) : '';
$lastname     = isset($_POST['lastname']) ? $con->real_escape_string($_POST['lastname']) : '';
$city         = isset($_POST['city']) ? $con->real_escape_string($_POST['city']) : '';
$email        = isset($_POST['email']) ? $con->real_escape_string($_POST['email']) : '';
$phone_number = isset($_POST['phone_number']) ? $con->real_escape_string($_POST['phone_number']) : '';
$height       = isset($_POST['height']) ? $con->real_escape_string($_POST['height']) : '';
$weight       = isset($_POST['weight']) ? $con->real_escape_string($_POST['weight']) : '';
$bmi          = isset($_POST['bmi']) ? $con->real_escape_string($_POST['bmi']) : '';
$pressure     = isset($_POST['pressure']) ? $con->real_escape_string($_POST['pressure']) : '';
$smoking      = isset($_POST['smoking']) ? $con->real_escape_string($_POST['smoking']) : '';
$type         = isset($_POST['type']) ? $con->real_escape_string($_POST['type']) : '';
$allergy      = isset($_POST['allergy']) ? $con->real_escape_string($_POST['allergy']) : '';
$temperature  = isset($_POST['temperature']) ? $con->real_escape_string($_POST['temperature']) : '';
$heart_rate   = isset($_POST['heart_rate']) ? $con->real_escape_string($_POST['heart_rate']) : '';
$comment      = isset($_POST['comment']) ? $con->real_escape_string($_POST['comment']) : '';
$advise       = isset($_POST['advise']) ? $con->real_escape_string($_POST['advise']) : '';
$appointment  = isset($_POST['appointment']) ? $con->real_escape_string($_POST['appointment']) : '';

function generateRandomDocId() {
    $prefix = 'pat_';
    $randomNumber = mt_rand(100000, 999999); // Generates a 6-digit random number
    return $prefix . $randomNumber;
}

// Example usage
$docId = generateRandomDocId();
$fullname = $firstname." ".$lastname;
// Check if email already exists
$emailCheck = "SELECT * FROM patient WHERE email = '$email'";
$result = $con->query($emailCheck);
if ($result->num_rows > 0) {
    echo "error1";
    return;
}

// Insert into user_details table (customize your table accordingly)
$insert = "INSERT INTO patient (
    firstname, lastname, city, email, phone_number, height, weight, bmi, pressure, 
    smoking, type, allergy, temperature, heart_rate, comment, advise, appointment, patient_id
) VALUES (
    '$firstname', '$lastname', '$city', '$email', '$phone_number', '$height', '$weight', 
    '$bmi', '$pressure', '$smoking', '$type', '$allergy', '$temperature', '$heart_rate',
    '$comment', '$advise', '$appointment', '$docId'
)";

if ($con->query($insert)) {
    $insert1 = "INSERT INTO appointments (
    patient_id, time, patient_name
) VALUES (
    '$docId', '$appointment', '$fullname'
)";
if ($con->query($insert1)) {
    echo "success";
}else{
    echo "dberror1";
}
} else {
    echo "dberror";
}
?>
