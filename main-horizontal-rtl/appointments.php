<?php 
session_start();
ob_start();


if(empty($_SESSION['man']) || $_SESSION['man'] == ''){
  header('Location:auth_login.php');
  die();
}

include 'connect/db.php';

$doc = $_SESSION['doc'];

?>




<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from rhythm-admin-template.multipurposethemes.com/main-horizontal-rtl/appointments.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 May 2025 04:11:10 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Adoghe Project - Dashboard</title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">
	  
	<!-- Style-->    
	<link rel="stylesheet" href="css/horizontal-menu.css"> 
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">	

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
					<h3 class="page-title">Appointments</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item active" aria-current="page">Appointments</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-12">
					<div class="box">
						<div class="box-body">
							<div class="table-responsive rounded card-table">
								<table class="table border-no" id="example1">
									<thead>
										<tr>
											<th>ID</th>
											<th>Patient ID</th>
											<th>Time</th>
											<th>Patient Name</th>
										</tr>
									</thead>
												<tbody>
									 <?php
                                                        //$tosin = mysqli_query($con,"SELECT * FROM users_details");
                                                        $sql = "SELECT * FROM appointments WHERE id > 0";
                                                        $result = $con->query($sql);
                                                        $user = mysqli_num_rows($result);
                                                        if( $user == 0 ){
                                                            echo'
                                                                <tr>
                                                                    <td colspan="8">Oops! No appointments have been made</td>
                                                                </tr>
                                                            '
                                                            ;
                                                        }
                                                        else{
                                                            while( $tosin_req = mysqli_fetch_assoc($result) ){
                                                                echo'
                                                                   <tr class="hover-primary">
                                                                        <td>'.$tosin_req['id'].'</td>
                                                                        <td>'.$tosin_req['patient_id'].'</td>
                                                                        <td>'.$tosin_req['time'].'</td>
                                                                        <td>'.$tosin_req['patient_name'].'</td>
																		
                                                                    </tr>
                                                                '
                                                                ;
                                                            }                                                    
                                                        }
                                                    ?>                      
                                                </tbody>

									
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
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
    <script src="../assets/icons/feather-icons/feather.min.js"></script>
	
	<script src="../assets/vendor_components/jquery-ui/jquery-ui.min.js"></script>
    <script src="../assets/vendor_components/perfect-scrollbar-master/perfect-scrollbar.jquery.min.js"></script>
	<script src="../assets/vendor_components/fullcalendar/lib/moment.min.js"></script>
	<script src="../assets/vendor_components/fullcalendar/fullcalendar.min.js"></script>	
	
	<!-- Adoghe Project App -->
	<script src="js/jquery.smartmenus.js"></script>
	<script src="js/menus.js"></script>
	<script src="js/template.js"></script>
	<script src="js/pages/appointments.js"></script>
	
	

</body>

<!-- Mirrored from rhythm-admin-template.multipurposethemes.com/main-horizontal-rtl/appointments.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 May 2025 04:11:12 GMT -->
</html>
