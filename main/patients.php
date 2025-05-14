<?php 
session_start();
ob_start();


if(empty($_SESSION['man']) || $_SESSION['man'] == ''){
  header('Location:auth_login.php');
  die();
}

include 'connect/db.php';

$doc = $_SESSION['man'];

?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from rhythm-admin-template.multipurposethemes.com/main-horizontal-rtl/patients.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 May 2025 04:11:12 GMT -->
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
					<h3 class="page-title">Patients</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item active" aria-current="page">Patients</li>
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
											<th>Patient ID</th>
											<th>Date Check In</th>
											<th>Patient Name</th>
											<th>Doctor Assgined</th>
											<th>Smoking Status</th>
											<th>Patient Type</th>
											<th>Height</th>
											<th></th>
										</tr>
									</thead>
												<tbody>
									 <?php
                                                        //$tosin = mysqli_query($con,"SELECT * FROM users_details");
                                                        $sql = "SELECT * FROM patient WHERE id > 0";
                                                        $result = $con->query($sql);
                                                        $user = mysqli_num_rows($result);
                                                        if( $user == 0 ){
                                                            echo'
                                                                <tr>
                                                                    <td colspan="8">Oops! No patients have been registered</td>
                                                                </tr>
                                                            '
                                                            ;
                                                        }
                                                        else{
                                                            while( $tosin_req = mysqli_fetch_assoc($result) ){
                                                                echo'
                                                                   <tr class="hover-primary">
                                                                        <td>'.$tosin_req['patient_id'].'</td>
                                                                        <td>'.$tosin_req['registered_at'].'</td>
                                                                        <td>'.$tosin_req['firstname'].' '.$tosin_req['lastname'].'</td>
                                                                        <td>'.$doc.'</td>
                                                                        <td>'.$tosin_req['smoking'].'</td>
                                                                        <td><span class="badge badge-danger-light">'.$tosin_req['type'].'</span></td>
																		<td>'.$tosin_req['height'].'</td>
																		<td>												
																			<div class="btn-group">
																			<a class="hover-primary dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
																			<div class="dropdown-menu">
																				<a class="dropdown-item" href="#">View Details</a>
																				<a class="dropdown-item" href="#">Edit</a>
																				<a class="dropdown-item" onclick="DeletePatient()">Delete</a>
																			</div>
																			</div>
																		</td>

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
	
	<!-- Page Content overlay -->
	
	
	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>	
	
	<script src="../assets/vendor_components/datatable/datatables.min.js"></script>
	
	<!-- Adoghe Project App -->
	<script src="js/jquery.smartmenus.js"></script>
	<script src="js/menus.js"></script>
	<script src="js/template.js"></script>
	<script src="js/pages/patients.js"></script>
	<script>
		function DeletePatient(){
			
		}
	</script>
	
	

</body>

<!-- Mirrored from rhythm-admin-template.multipurposethemes.com/main-horizontal-rtl/patients.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 May 2025 04:11:13 GMT -->
</html>
