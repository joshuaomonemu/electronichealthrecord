<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from rhythm-admin-template.multipurposethemes.com/main-horizontal-rtl/auth_register.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 May 2025 04:12:05 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Adoghe Project - Registration </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">
	  
	<!-- Style-->    
	<link rel="stylesheet" href="css/horizontal-menu.css"> 
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">	

</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url(../images/auth-bg/bg-2.jpg)">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			
			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Welcome to Adoghe Project</h2>
								<p class="mb-0">Register as a new member</p>							
							</div>
							<div class="p-40">
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											<input type="text" class="form-control ps-15 bg-transparent" placeholder="Full Name">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
											<input type="email" class="form-control ps-15 bg-transparent" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
											<input type="password" class="form-control ps-15 bg-transparent" placeholder="Password">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
											<input type="password" class="form-control ps-15 bg-transparent" placeholder="Retype Password">
										</div>
									</div>
									  <div class="row">
										<div class="col-12">
										  <div class="checkbox">
											<input type="checkbox" id="basic_checkbox_1" >
											<label for="basic_checkbox_1">I agree to the <a href="#" class="text-warning"><b>Terms</b></a></label>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-info margin-top-10">SIGN IN</button>
										</div>
										<!-- /.col -->
									  </div>
											
								<div class="text-center">
									<p class="mt-15 mb-0">Already have an account?<a href="auth_login.php" class="text-danger ms-5"> Sign In</a></p>
								</div>
							</div>
						</div>								

						
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
    function registerUser(){
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
							  title: 'Sign up successful'
							})
							setTimeout(window.location.href = "auth_login.php", 60000);
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

<!-- Mirrored from rhythm-admin-template.multipurposethemes.com/main-horizontal-rtl/auth_register.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 May 2025 04:12:05 GMT -->
</html>
