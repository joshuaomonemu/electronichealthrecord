<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from rhythm-admin-template.multipurposethemes.com/main-horizontal-rtl/auth_login.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 May 2025 04:12:04 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Adoghe Project - Log in </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">
	  
	<!-- Style-->    
	<link rel="stylesheet" href="css/horizontal-menu.css"> 
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">	
	<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
  	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>
	
<body class="hold-transition theme-primary bg-img" style="background-image: url(../images/auth-bg/bg-1.jpg)">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Welcome Back, Doc!</h2>
								<p class="mb-0">Sign in to continue to adoghe project.</p>							
							</div>
							<div class="p-40">
								
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											<input type="text" id="email" class="form-control ps-15 bg-transparent" placeholder="Username">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											<input type="password" id="password" class="form-control ps-15 bg-transparent" placeholder="Password">
										</div>
									</div>
									  <div class="row">
										<div class="col-6">
										  <div class="checkbox">
											<input type="checkbox" id="basic_checkbox_1" >
											<label for="basic_checkbox_1">Remember Me</label>
										  </div>
										</div>
										<!-- /.col -->
										
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button class="btn btn-danger mt-10" onclick="validateUser();">SIGN IN</button>
										</div>
										<!-- /.col -->
									  </div>
								
								<div class="text-center">
									<p class="mt-15 mb-0">Don't have an account? <a href="auth_register.php" class="text-warning ms-5">Sign Up</a></p>
								</div>	
							</div>						
						</div>
						<!-- <div class="text-center">
						  <p class="mt-20 text-white">- Sign With -</p>
						  <p class="gap-items-2 mb-20">
							  <a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
							  <a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
							  <a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
							</p>	
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>
	<script>
    function validateUser(){
			let email = document.getElementById("email").value;
			let password = document.getElementById("password").value;
			let xhttp = new  XMLHttpRequest();
			xhttp.open("POST", "actions/signin.php", true);
			console.log(this.status);
    		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    		xhttp.send("email="+email+"&password="+password);
			xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200){
    				let trimmed = this.responseText;
    				let trimmedx = trimmed.trim();
    				//setTimeout(alert(this.responseText), 3000);
						if (trimmedx == "welcome"){
							  const Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000,
							  timerProgressBar: true,
							  onOpen: (toast) => {
							    toast.addEventListener('mouseenter', Swal.stopTimer)
							    toast.addEventListener('mouseleave', Swal.resumeTimer)
							  }
							})

							Toast.fire({
							  icon: 'success',
							  title: 'Signed in successfully'
							})
							setTimeout(window.location.href = "index.php", 60000);
						}   
            else{
              const Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000,
							  timerProgressBar: true,
							  onOpen: (toast) => {
							    toast.addEventListener('mouseenter', Swal.stopTimer)
							    toast.addEventListener('mouseleave', Swal.resumeTimer)
							  }
							})

							Toast.fire({
							  icon: 'error',
							  title: 'Error Occured'
							})
            } 				
					}
				}

			}
	</script>	

</body>

<!-- Mirrored from rhythm-admin-template.multipurposethemes.com/main-horizontal-rtl/auth_login.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 May 2025 04:12:05 GMT -->
</html>
