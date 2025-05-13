<?php 
session_start();
ob_start();


if(empty($_SESSION['man']) || $_SESSION['man'] == ''){
  header('Location:auth_login.php');
  die();
}

?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from rhythm-admin-template.multipurposethemes.com/main-horizontal-rtl/forms_wizard.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 May 2025 04:12:31 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Adoghe Project - Dashboard  Register Patient </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">
	  
	<!-- Style-->    
	<link rel="stylesheet" href="css/horizontal-menu.css"> 
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">
	<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
  	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>
<body class="layout-top-nav light-skin theme-success fixed rtl">
	
<div class="wrapper">
	<div id="loader"></div>

<?php include 'includes/header.php'; ?>


<?php include 'includes/navbar.php'; ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h3 class="page-title">Register Patient</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Forms</li>
								<li class="breadcrumb-item active" aria-current="page">Register Patient</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">

		  <!-- Validation wizard -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Patient Registration</h4>
			  <h6 class="box-subtitle">Register your incoming patients here with vitals</h6>
			</div>
			<!-- /.box-header -->
			<div class="box-body wizard-content">
				<form id="registrationForm" class="validation-wizard wizard-circle">
					<!-- Step 1 -->
					<h6>Personal Info</h6>
					<section>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="firstname" class="form-label"> First Name : <span class="danger">*</span> </label>
									<input type="text" class="form-control required" id="firstname" name="firstName"> 
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="lastname" class="form-label"> Last Name : <span class="danger">*</span> </label>
									<input type="text" class="form-control required" id="lastname" name="lastName"> 
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="email" class="form-label"> Email Address : <span class="danger">*</span> </label>
									<input type="email" class="form-control required" id="email" name="emailAddress"> 
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="phone_number" class="form-label">Phone Number :</label>
									<input type="tel" class="form-control" id="phone_number"> 
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="city" class="form-label"> Select City : <span class="danger">*</span> </label>
									<select class="form-select required" id="city" name="location">
									<option value="">Select City</option>
									<option value="Aba">Aba</option>
									<option value="Abakaliki">Abakaliki</option>
									<option value="Abeokuta">Abeokuta</option>
									<option value="Abuja">Abuja</option>
									<option value="Ado Ekiti">Ado Ekiti</option>
									<option value="Akure">Akure</option>
									<option value="Awka">Awka</option>
									<option value="Bauchi">Bauchi</option>
									<option value="Benin City">Benin City</option>
									<option value="Birnin Kebbi">Birnin Kebbi</option>
									<option value="Calabar">Calabar</option>
									<option value="Damaturu">Damaturu</option>
									<option value="Dutse">Dutse</option>
									<option value="Enugu">Enugu</option>
									<option value="Gombe">Gombe</option>
									<option value="Gusau">Gusau</option>
									<option value="Ibadan">Ibadan</option>
									<option value="Ikeja">Ikeja</option>
									<option value="Ikorodu">Ikorodu</option>
									<option value="Ilorin">Ilorin</option>
									<option value="Jalingo">Jalingo</option>
									<option value="Jimeta">Jimeta</option>
									<option value="Jos">Jos</option>
									<option value="Kaduna">Kaduna</option>
									<option value="Kano">Kano</option>
									<option value="Katsina">Katsina</option>
									<option value="Lafia">Lafia</option>
									<option value="Lagos">Lagos</option>
									<option value="Lokoja">Lokoja</option>
									<option value="Maiduguri">Maiduguri</option>
									<option value="Makurdi">Makurdi</option>
									<option value="Minna">Minna</option>
									<option value="Nnewi">Nnewi</option>
									<option value="Nsukka">Nsukka</option>
									<option value="Offa">Offa</option>
									<option value="Ogbomosho">Ogbomosho</option>
									<option value="Okene">Okene</option>
									<option value="Onitsha">Onitsha</option>
									<option value="Osogbo">Osogbo</option>
									<option value="Owerri">Owerri</option>
									<option value="Owo">Owo</option>
									<option value="Oyo">Oyo</option>
									<option value="Port Harcourt">Port Harcourt</option>
									<option value="Sokoto">Sokoto</option>
									<option value="Umuahia">Umuahia</option>
									<option value="Uyo">Uyo</option>
									<option value="Warri">Warri</option>
									<option value="Yenagoa">Yenagoa</option>
									<option value="Yola">Yola</option>
									<option value="Zaria">Zaria</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="wdate2" class="form-label">Date of Birth :</label>
									<input type="date" class="form-control" id="wdate2"> 
								</div>
							</div>
						</div>
					</section>
					<!-- Step 2 -->
					<h6>Body Measurements</h6>
					<section>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="height" class="form-label">Height(cm)</label>
									<input class="form-control required" type="number" id="height" step="0.1">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="weight" class="form-label">Weight(kg)</label>
									<input class="form-control required" type="number" id="weight" step="0.1"> 
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="shortDescription3" class="form-label">BMI :</label>
									<output id="bmiResult"></output>
								</div>
							</div>
						</div>
					</section>
					<!-- Step 3 -->
					<h6>Patient Vital and Type</h6>
					<section>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="pressure" class="form-label">Blood Pressure:</label>
									<input type="text" class="form-control required" id="pressure"> 
								</div>
								<div class="form-group">
									<label for="smoking" class="form-label">Smoking Status :</label>
									<select class="form-select required" id="smoking" data-placeholder="Type to search cities" name="wintType1">
										<option value="frequnt">Frequent</option>
										<option value="cronic">Cronic</option>
										<option value="never">Never</option>
									</select>
								</div>
								<div class="form-group">
									<label for="type" class="form-label">Patient Type :</label>
									<select class="form-select required" id="type" name="wlocation">
										<option value="">Select Type</option>
										<option value="icu">ICU</option>
										<option value="opd">OPD</option>
										<option value="emergency">Emergency</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="allergy" class="form-label">Allergies:</label>
									<input type="text" class="form-control required" id="allergy">
								</div>
								<div class="form-group">
									<label for="allergy" class="form-label">Heart Rate(bpm):</label>
									<input type="text" class="form-control required" id="heart_rate">
								</div>
								<div class="form-group">
									<label for="allergy" class="form-label">Body Temperature(°C):</label>
									<input type="text" class="form-control required" id="temperature">
								</div>
							</div>
						</div>
					</section>
					<!-- Step 4 -->
					<h6>Appointment</h6>
					<section>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="appointment" class="form-label">Appointment Date :</label>
									<input type="date" class="form-control required" id="appointment">
								</div>
								<div class="form-group">
									<label for="advise" class="form-label">Prescription and Advise:</label>
									<input type="text" class="form-control required" id="advise">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="comment" class="form-label">Comments</label>
									<textarea name="decisions" id="comment" rows="4" class="form-control"></textarea>
								</div>
								
							</div>
						</div>
					</section>
				</form>
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  
   <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; <script>document.write(new Date().getFullYear())</script> <a href="https://www.multipurposethemes.com/">Multipurpose Themes</a>. All Rights Reserved.
  </footer>

	
	
	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>	<script src="../assets/vendor_components/jquery-steps-master/build/jquery.steps.js"></script>
    <script src="../assets/vendor_components/jquery-validation-1.17.0/dist/jquery.validate.min.js"></script>
    <script src="../assets/vendor_components/sweetalert/sweetalert.min.js"></script>
	
	<!-- Adoghe Project App -->
	<script src="js/jquery.smartmenus.js"></script>
	<script src="js/menus.js"></script>
	<script src="js/template.js"></script>
	
    <script src="js/pages/steps.js"></script>
	
	<script>
        const weightInput = document.getElementById('weight');
        const heightInput = document.getElementById('height');
        const bmiOutput = document.getElementById('bmiResult');

        function calculateBMI() {
            const weight = parseFloat(weightInput.value);
            const heightCm = parseFloat(heightInput.value);

            if (!isNaN(weight) && !isNaN(heightCm) && heightCm > 0) {
                const heightM = heightCm / 100; // Convert cm to meters
                const bmi = weight / (heightM * heightM);
                bmiOutput.textContent = bmi.toFixed(2);
            } else {
                bmiOutput.textContent = '';
            }
        }

        weightInput.addEventListener('input', calculateBMI);
        heightInput.addEventListener('input', calculateBMI);
    </script>

<!-- <script>
// Attach event listener to the form
document.getElementById("registrationForm").addEventListener('submit', function(event) {
  event.preventDefault();  // Prevent the form from reloading the page
  regUser();               // Call the function to submit the data via AJAX
});

function regUser(){
  // Retrieve form values
  let firstname    = document.getElementById("firstname").value;
  let lastname     = document.getElementById("lastname").value;
  let city         = document.getElementById("city") ? document.getElementById("city").value : "";
  let email        = document.getElementById("email") ? document.getElementById("email").value : "";
  let phone_number = document.getElementById("phone_number") ? document.getElementById("phone_number").value : "";
  let height       = document.getElementById("height") ? document.getElementById("height").value : "";
  let weight       = document.getElementById("weight") ? document.getElementById("weight").value : "";
  let bmi          = document.getElementById("bmiResult") ? document.getElementById("bmiResult").value : "";
  let pressure     = document.getElementById("pressure") ? document.getElementById("pressure").value : "";
  let smoking      = document.getElementById("smoking") ? document.getElementById("smoking").value : "";
  let type         = document.getElementById("type") ? document.getElementById("type").value : "";
  let allergy      = document.getElementById("allergy") ? document.getElementById("allergy").value : "";
  let temperature  = document.getElementById("temperature") ? document.getElementById("temperature").value : "";
  let heart_rate   = document.getElementById("heart_rate") ? document.getElementById("heart_rate").value : "";
  let comment      = document.getElementById("comment") ? document.getElementById("comment").value : "";
  let advise       = document.getElementById("advise") ? document.getElementById("advise").value : "";
  let appointment  = document.getElementById("appointment") ? document.getElementById("appointment").value : "";
  
  // Prepare the data string to be sent via POST (update the keys as required by your back-end)
  let postData = "firstname=" + encodeURIComponent(firstname) +
                 "&lastname=" + encodeURIComponent(lastname) +
                 "&city=" + encodeURIComponent(city) +
                 "&email=" + encodeURIComponent(email) +
                 "&phone_number=" + encodeURIComponent(phone_number) +
                 "&height=" + encodeURIComponent(height) +
                 "&weight=" + encodeURIComponent(weight) +
                 "&bmi=" + encodeURIComponent(bmi) +
                 "&pressure=" + encodeURIComponent(pressure) +
                 "&smoking=" + encodeURIComponent(smoking) +
                 "&type=" + encodeURIComponent(type) +
                 "&allergy=" + encodeURIComponent(allergy) +
                 "&temperature=" + encodeURIComponent(temperature) +
                 "&heart_rate=" + encodeURIComponent(heart_rate) +
                 "&comment=" + encodeURIComponent(comment) +
                 "&advise=" + encodeURIComponent(advise) +
                 "&appointment=" + encodeURIComponent(appointment);

  // Create XMLHttpRequest
  let xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    // Check if the request is complete
    if(this.readyState === 4) {
      if(this.status === 200) {
        // Trim the response to remove any extra whitespace
        let trimmedResponse = this.responseText.trim();

        // Determine what to show based on the response text
        if(trimmedResponse === "error1"){
          Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'error',
            title: 'Sorry, this email is in use',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true
          });
        } else if(trimmedResponse === "dberror") {
          Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'error',
            title: 'Sorry, an error occurred',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true
          });
        } else {
          Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: 'In process',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true
          });
          // Redirect after 60 seconds, ensuring the callback is passed to setTimeout
          setTimeout(function(){
            window.location.href = "verify2.php";
          }, 60000);
        }
      } else {
        // Handle HTTP errors (if needed)
        Swal.fire({
          toast: true,
          position: 'top-end',
          icon: 'error',
          title: 'Request failed. Please try again.',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true
        });
      }
    }
  };

  // Open and send the POST request
  xhttp.open("POST", "actions/add_patient.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(postData);
}
</script> -->

    
	
</body>

<!-- Mirrored from rhythm-admin-template.multipurposethemes.com/main-horizontal-rtl/forms_wizard.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 May 2025 04:12:32 GMT -->
</html>
