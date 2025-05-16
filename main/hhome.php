<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
 
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
  
<!-- Mirrored from rhythm-admin-template.multipurposethemes.com/main-horizontal-rtl/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 May 2025 04:11:08 GMT -->
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
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-2 col-md-6 col-6">
					<div class="box">
						<div class="box-body">
							<div class="text-center">
								<h1 class="fs-50 text-primary"><i class="mdi mdi-wheelchair-accessibility"></i></h1>	
								<?php 



								$sql = "SELECT COUNT(*) AS total FROM patient";
								$result = $con->query($sql);

								if ($result) {
									$row = $result->fetch_assoc();
									$patientCount = $row['total'];
									echo "<h2>".$patientCount."</h2>";
								} else {
									echo "Error: " . $con->error;
								}





								
								?>
								
									
								<span class="badge badge-pill badge-primary px-10 mb-10">Patient</span>						
							</div>					
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-md-6 col-6">
					<div class="box">
						<div class="box-body">
							<div class="text-center">
								<h1 class="fs-50 text-warning"><i class="mdi mdi-file-document"></i></h1>			
								<?php 



								$sql = "SELECT COUNT(*) AS total FROM patient";
								$result = $con->query($sql);

								if ($result) {
									$row = $result->fetch_assoc();
									$patientCount = $row['total'];
									echo "<h2>".$patientCount."</h2>";
								} else {
									echo "Error: " . $con->error;
								}





								
								?>
								<span class="badge badge-pill badge-warning px-10 mb-10">Encounters</span>				
							</div>					
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-md-6 col-6">
					<div class="box">
						<div class="box-body">
							<div class="text-center">
								<h1 class="fs-50 text-info"><i class="mdi mdi-calendar-multiple"></i></h1>			
								<?php 



								$sql = "SELECT COUNT(*) AS total FROM appointments";
								$result = $con->query($sql);

								if ($result) {
									$row = $result->fetch_assoc();
									$patientCount = $row['total'];
									echo "<h2>".$patientCount."</h2>";
								} else {
									echo "Error: " . $con->error;
								}





								
								?>
								<span class="badge badge-pill badge-info px-10 mb-10">Appointments</span>					
							</div>					
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-md-6 col-6">
					<div class="box">
						<div class="box-body">
							<div class="text-center">
								<h1 class="fs-50 text-success"><i class="mdi mdi-heart-pulse"></i></h1>						
								<h2>1</h2>
								<span class="badge badge-pill badge-success px-10 mb-10">Lab</span>	
							</div>					
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-md-6 col-6">
					<div class="box">
						<div class="box-body">
							<div class="text-center">
								<h1 class="fs-50 text-danger"><i class="mdi mdi-file-document-box"></i></h1>			
								<?php 



								$sql = "SELECT COUNT(*) AS total FROM patient";
								$result = $con->query($sql);

								if ($result) {
									$row = $result->fetch_assoc();
									$patientCount = $row['total'];
									echo "<h2>".$patientCount."</h2>";
								} else {
									echo "Error: " . $con->error;
								}





								
								?>
								<span class="badge badge-pill badge-danger px-10 mb-10">Prescription</span>				
							</div>					
						</div>
					</div>
				</div>
				
				<div class="col-xl-4 col-12">
				  <div class="box">				  
					  <div class="box-header no-border">
						  <h6>New Patient</h6>
						<div class="box-tools pull-right">
							<p class="mb-0 text-success">14.21% High then last month</p>
						</div>
					  </div>

					  <div class="box-body">
						  <div class="d-block text-center">
							  <div id="barchart4"></div>							  
							  <div class="d-flex justify-content-between mt-30">
								  <div>
									  <h5 class="mb-5">Overall</h5>
									  <p class="mb-0">78.51%</p>	  
								  </div>
								  <div class="px-50 bx-1">
									  <h5 class="mb-5">Montly</h5>
									  <p class="mb-0">17.39%</p>	  
								  </div>
								  <div>
									  <h5 class="mb-5">Day</h5>
									  <p class="mb-0">7.12%</p>	  
								  </div>							  
							  </div>				
						  </div>
					  </div>
				  </div>
			    </div>
			    <div class="col-xl-4 col-12">
			  	  <div class="box">				  
					  <div class="box-header no-border">
						  <h6>OPD Patients</h6>
						<div class="box-tools pull-right">
							<p class="mb-0 text-danger"> 11.12% less then last month</p>
						</div>
					  </div>

					  <div class="box-body">
						  <div class="d-block text-center">
							  <div id="linearea3"></div>					  
							  <div class="d-flex justify-content-between mt-30">
								  <div>
									  <h5 class="mb-5">Overall</h5>
									  <p class="mb-0">78.51%</p>	  
								  </div>
								  <div class="px-50 bx-1">
									  <h5 class="mb-5">Montly</h5>
									  <p class="mb-0">17.39%</p>	  
								  </div>
								  <div>
									  <h5 class="mb-5">Day</h5>
									  <p class="mb-0">7.12%</p>	  
								  </div>							  
							  </div>				
						  </div>
					  </div>
				  </div>
			    </div>
			    <div class="col-xl-4 col-12">
				  <div class="box">				  
					  <div class="box-header no-border">
						  <h6>Treatment</h6>
						<div class="box-tools pull-right">
							<p class="mb-0 text-success">19.5% High then last month</p>
						</div>
					  </div>

					  <div class="box-body">
						  <div class="d-block text-center">
							  <div id="linechart4"></div>						  
							  <div class="d-flex justify-content-between mt-30">
								  <div>
									  <h5 class="mb-5">Overall</h5>
									  <p class="mb-0">78.51%</p>	  
								  </div>
								  <div class="px-50 bx-1">
									  <h5 class="mb-5">Montly</h5>
									  <p class="mb-0">17.39%</p>	  
								  </div>
								  <div>
									  <h5 class="mb-5">Day</h5>
									  <p class="mb-0">7.12%</p>	  
								  </div>							  
							  </div>			
						  </div>
					  </div>
				  </div>
			    </div>
				<?php 

					 $sql = "SELECT * FROM patient ORDER BY id DESC LIMIT 1";
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
                                                                  <div class="col-xl-4 col-12"> 			
				  <div class="box">
					<div class="box-header">
					  <h4 class="box-title">Current Vitals</h4>
					  <div class="box-controls pull-right">
						<div class="lookup lookup-circle lookup-right">
						  <input type="text" name="s" placeholder="Patients id">
						</div>
					  </div>
					</div>
					<div class="box-body">
					  <div class="flexbox bb-1 mb-15">
						<div><p><span class="text-mute">Patient Name:</span> <strong>'.$tosin_req['lastname'].'</strong></p></div>
						<div><p><span class="text-mute">Patient Id:</span> <strong>'.$tosin_req['patient_id'].'</strong></p></div>
					  </div>	
					  <div class="row">						
						<div class="col-12">
							<div class="row bb-1 pb-10">							
								<div class="col-4">							  
									<img class="img-fluid float-start w-30 mt-10 me-10" src="../images/weight.png" alt="">
									<div>
										<p class="mb-0"><small>Weight</small></p> 
										<h5 class="mb-0"><strong>'.$tosin_req['weight'].' kg</strong></h5>
									</div>
								</div>							
								<div class="col-4 bs-1 be-1">							  
									<img class="img-fluid float-start w-30 mt-10 me-10" src="../images/human.png" alt="">
									<div>
										<p class="mb-0"><small>Height</small></p> 
										<h5 class=" mb-0"><strong>'.$tosin_req['height'].'cm</strong></h5>
									</div>
								</div>							
								<div class="col-4">							  
									<img class="img-fluid float-start w-30 mt-10 me-10" src="../images/bmi.png" alt="">
									<div>
										<p class="mb-0"><small>BMI</small></p> 
										<h5 class="mb-0"><strong>'.$tosin_req['bmi'].'</strong></h5>
									</div>
								</div>
							</div>
							<div class="row pt-5">
								<div class="col-12">
									<span class="text-danger">Blood Pressure</span>
								</div>
								<div class="col-6">
									<div class="progress progress-xs mb-0 mt-5 w-40">
										<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
										</div>
									</div>
									<h2 class="float-start mt-0 me-10"><strong>'.$tosin_req['systolic'].'</strong></h2>
									<div>
										<p class="mb-0"><small>Systolic</small></p> 
										<p class="mb-0 mt-0"><small class="vertical-align-super">mmHg</small></p>
									</div>
								</div>							
								<div class="col-6 bs-1">	
									<div class="progress progress-xs mb-0 mt-5 w-40">
										<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
										</div>
									</div>						  
									<h2 class="float-start mt-0 me-10"><strong>'.$tosin_req['diastolic'].'</strong></h2>
									<div>
										<p class="mb-0"><small>Diastolic</small></p> 
										<p class="mb-0 mt-0"><small class="vertical-align-super">mmHg</small></p>
									</div>
								</div>
							</div>
						</div>
					  </div>
					</div>
					  <div class="box-body pt-0">
						<p><small>Recorded on '.$tosin_req['registered_at'].'</small></p>
					  </div>
					  <div class="box-body bg-danger">
						  <img src="../images/smoking.png" alt="" class="float-start me-10">
						  <p>Smoking Status : '.$tosin_req['smoking'].'</p>
					  </div>
				</div>	
                                                                '
                                                                ;
                                                            }                                                    
                                                        }
					
					
					?>
						
				</div>
				<div class="col-xl-4 col-12">
					<div class="box bg-success box-inverse">
						<div class="box-header">
							<h4 class="box-title">Doctor of the Month</h4>
						</div>
						<div class="box-body text-center">
							<div class="mb-0">
								<img src="../images/avatar/avatar-12.png" width="150" class="rounded-circle bg-info-light" alt="user">
								<h3 class="mt-20 mb-0"><?php echo $_SESSION['doc']; ?></h3>
								<p class="mb-5">Cardiologists</p>
							</div>
						</div>
						<div class="p-20">
							<div class="row">
								<div class="col-6 be-1">
									
								</div>
								<div class="col-6">
									<div class="d-flex align-items-center">
										<img src="../images/health-2.png" class="img-fluid me-10 w-50" alt="">
										<div>
											<?php 



								$sql = "SELECT COUNT(*) AS total FROM patient";
								$result = $con->query($sql);

								if ($result) {
									$row = $result->fetch_assoc();
									$patientCount = $row['total'];
									echo "<h2>".$patientCount."</h2>";
								} else {
									echo "Error: " . $con->error;
								}





								
								?>
											<p class="mb-0 text-white-50">Patients</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Patients In</h4>
						</div>
						<div class="box-body analytics-info">
							<div id="pole-chart" class="h-325 mb-5"></div>
						</div>
					</div>
				</div>
				<div class="col-12">
				  <div class="box">
					<div class="box-body">
					  <h4 class="box-title">Radiology List</h4>
						<div class="table-responsive">
							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th class="bb-2">No.</th>
										<th class="bb-2">Test</th>
										<th class="bb-2">Lab</th>
										<th class="bb-2">Priority</th>
										<th class="bb-2">Cost</th>
										<th class="bb-2">Handling</th>
										<th class="bb-2">Coll. By</th>
										<th class="bb-2">Status</th>
										<th class="bb-2">Result</th>
										<th class="bb-2">Signed</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Blood Count</td>
										<td>Microbiology</td>
										<td><span class="badge badge-warning">Law</span></td>
										<td>N500</td>
										<td>Johen Doe</td>
										<td>5.45pm 11/05</td>
										<td><span class="badge badge-success">Result Added</span></td>
										<td>
											<a href="#" data-bs-toggle="modal" data-bs-target="#result" class="text-info">Result  </a>
											<a href="#" data-bs-toggle="modal" data-bs-target="#comment-dialog" class="text-info">Comment  </a>
										</td>
										<td>
											<button type="button" class="btn btn-sm btn-toggle" data-bs-toggle="button" aria-pressed="false" autocomplete="off">
											<div class="handle"></div>
											</button>
										</td>
									</tr>
									<tr>
										<td>1</td>
										<td>Blood Count</td>
										<td>Microbiology</td>
										<td><span class="badge badge-danger">High</span></td>
										<td>N500</td>
										<td>Johen Doe</td>
										<td>5.45pm 11/05</td>
										<td><span class="badge badge-success">Result Added</span></td>
										<td>
											<a href="#" data-bs-toggle="modal" data-bs-target="#result" class="text-info">Result  </a>
											<a href="#" data-bs-toggle="modal" data-bs-target="#comment-dialog" class="text-info">Comment  </a>
										</td>
										<td>
											<button type="button" class="btn btn-sm btn-toggle" data-bs-toggle="button" aria-pressed="false" autocomplete="off">
											<div class="handle"></div>
											</button>
										</td>
									</tr>						
								</tbody>
							  </table>
						</div>				
					</div>
					<!-- /.box-body -->
				  </div>
				</div>
			</div>			
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
	
  <!--Model Popup Area-->  	
	<!-- result modal content -->
	<div class="modal fade" id="result">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="result-popup">Radiology Investigations - Result</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row justify-content-between">
						<div class="col-md-7 col-12">
						  <h4>Test Name - Neck Scan</h4>
						</div>
						<div class="col-md-5 col-12">
						  <h4 class="text-end">Lab Order Id : L0000002821</h4>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table table-bordered">
						  <thead class="bg-secondary">
							<tr>
							  <th scope="col">Test</th>
							  <th scope="col">Result</th>
							  <th scope="col">Range</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>Swelling Diameter</td>
							  <td>45 - 1000</td>
							  <td>&nbsp;</td>
							</tr>
							<tr>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							</tr>
						  </tbody>
						</table>
					</div>
					<div class="comment">
						<p><span class="fw-600">Comment</span> : <span class="comment-here text-mute">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span></p>
					</div>
					<div class="table-responsive">
						<table class="table">
						  <tbody>
							<tr>
							  <th colspan="2" class="b-0">Test By</th>
							  <th colspan="2" class="b-0">Signed By</th>
							</tr>
							<tr class="bg-secondary">
							  <td>Donald jr</td>
							  <td>Time : 11-8-2017   04:22</td>
							  <td>Lous Clark</td>
							  <td>Time : 11-8-2017   04:22</td>
							</tr>
						  </tbody>
						</table>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger pull-right" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-info pull-right">Print</button>
					<button type="button" class="btn btn-success pull-right">Save</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<!-- comment modal content -->
	<div class="modal fade" id="comment-dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="comment-popup">Radiology Investigations - Comment</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row justify-content-between">
						<div class="col-12">
						  <h4>Comment</h4>
						</div>
					</div>
					<form>
					  <div class="form-group">
						<textarea class="form-control" id="comment-area" rows="3"></textarea>
					  </div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger pull-right" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-success pull-right me-10">Save</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		  
 
		</ul>
    </div>
	  &copy; <script>document.write(new Date().getFullYear())</script> <a >Adoghe project</a>. All Rights Reserved.
  </footer>


	
	
	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>	
	
	<script src="../assets/vendor_components/echarts/dist/echarts-en.min.js"></script>
	
	<!-- Adoghe Project App -->
	<script src="js/jquery.smartmenus.js"></script>
	<script src="js/menus.js"></script>
	<script src="js/template.js"></script>
	<script src="js/pages/dashboard4.js"></script>
	
</body>

<!-- Mirrored from rhythm-admin-template.multipurposethemes.com/main-horizontal-rtl/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 May 2025 04:11:10 GMT -->
</html>
