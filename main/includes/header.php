  <header class="main-header">
	  <div class="inside-header">
		<div class="d-flex align-items-center logo-box justify-content-start">
			<!-- Logo -->
			<a href="index.php" class="logo">
			  <!-- logo-->
			  <div class="logo-lg">
				<center>
				  <span class="light-logo"><img src="../images/logo-dark-text.png" alt="logo" style="height: 52px;"></span>
				  <span class="dark-logo"><img src="../images/logo-light-text.png" alt="logo"></span>
				</center>
			  </div>
			</a>	
		</div>  
		<!-- Header Navbar -->
		<nav class="navbar navbar-static-top">
		  <!-- Sidebar toggle button-->
		  <div class="app-menu">
			<ul class="header-megamenu nav">
				<li class="btn-group d-lg-inline-flex d-none">
					<div class="app-menu">
						<div class="search-bx mx-5">
							<form>
								<div class="input-group">
								  <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
								  <div class="input-group-append">
									<button class="btn" type="submit" id="button-addon3"><i data-feather="search"></i></button>
								  </div>
								</div>
							</form>
						</div>
					</div>
				</li>
			</ul> 
		  </div>

		  <div class="navbar-custom-menu r-side">
			<ul class="nav navbar-nav">	
				<li class="btn-group nav-item d-lg-inline-flex d-none">
					<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen btn-warning-light" title="Full Screen">
						<i data-feather="maximize"></i>
					</a>
				</li>
			 

			  <!-- User Account-->
			  <li class="dropdown user user-menu">
				<a href="#" class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent py-0 no-shadow" data-bs-toggle="dropdown" title="User">
					<div class="d-flex pt-1">
						<div class="text-end me-10">
							<p class="pt-5 fs-14 mb-0 fw-700 text-primary"><?php echo $_SESSION['doc']; ?></p>
							<small class="fs-10 mb-0 text-uppercase text-mute">Admin</small>
						</div>
						<img src="../images/avatar/avatar-1.png" class="avatar rounded-10 bg-primary-light h-40 w-40" alt="" />
					</div>
				</a>
				<ul class="dropdown-menu animated flipInX">
				  <li class="user-body">
					 <a class="dropdown-item" href="#"><i class="ti-lock text-muted me-2"></i> Logout</a>
				  </li>
				</ul>
			  </li>	

			</ul>
		  </div>
		</nav>
	  </div>
  </header>