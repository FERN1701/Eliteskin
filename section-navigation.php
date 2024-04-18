<?php

	include "section-modal-login.php";
    include "section-modal-registration.php";

?>

		<div class="wrap" style="background-color: #beab9c !important;">
	    <div class="container" >
				<div class="row justify-content-between">
					<div class="col-md-3 mb-md-0 mb-4 d-flex align-items-center">
						<a class="navbar-brand" href="index.php">
							<img style="width: 80px;" src="images/elite/logo.png">
						</a>
					</div>
					<div class="col-md-7">
						<div class="row">
							<div class="col-md-8 mb-md-0 mb-3">
								<div class="top-wrap d-flex">
									<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-location-arrow text-gray"></span></div>
									<div class="text"><span class="text-white">Address</span><span class="text-white"><?php echo $details['address'] ?></span></div>
								</div>
							</div>
							<div class="col">
								<div class="top-wrap d-flex">
									<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-phone text-gray"></span></div>
									<div class="text"><span class="text-white">Call us</span><span class="text-white"><a class="text-light" href="tel:+<?php echo $details['tel'] ?>"><?php echo $details['tel'] ?></a></span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
				<div class="order-lg-last">
					<a class="btn btn-primary auth-has-user btn-js-logout text-white">Logout</a>
					<a class="btn btn-primary auth-non-user btn-open-login-modal text-white">Login</a>
					<a class="btn btn-primary auth-non-user btn-open-register-modal text-white">Register</a>
        </div>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item <?php if($page_name == "index.php") { echo "active"; } ?>"><a href="index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item <?php if($page_name == "about.php") { echo "active"; } ?>"><a href="./about.php" class="nav-link">About</a></li>
	        	<li class="nav-item <?php if($page_name == "services.php") { echo "active"; } ?>"><a href="./services.php" class="nav-link">Services</a></li>
	          <li class="nav-item <?php if($page_name == "contact.php") { echo "active"; } ?>"><a href="./contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>