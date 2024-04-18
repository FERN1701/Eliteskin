	
	<?php include "section-meta.php"; ?>
	
  <body>
  	
  	<?php include "section-navigation.php" ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact us <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Contact us</h1>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="wrapper">
							<div class="row no-gutters">
								<div class="col-md-7 d-flex">
									<div class="contact-wrap w-100 p-md-5 p-4">
										<span class="subheading">Feel free to contact us!</span>
		    						<h2 class="mb-4">Free Consultation</h2>
										<div method="POST" id="contactForm" class="contactForm">
											<div class="row justify-content-center">
												<div class="col-md-6">
													<div class="form-group">
							              <input type="text" class="form-control inp-consult-name" placeholder="Your Name">
							            </div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
							              <input type="text" class="form-control inp-consult-mobile" placeholder="Phone number">
							            </div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
							              <input type="text" class="form-control inp-consult-email" placeholder="Email">
							            </div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
							              <input type="text" class="form-control inp-consult-address" placeholder="Address">
							            </div>
												</div>
												<div class="col-12">
													<textarea class="form-control inp-consult-message" placeholder="Message" rows="6"></textarea>
												</div>
												<div class="col-md-6 mt-4">
													<div class="form-group">
		                        <button class="btn btn-secondary py-3 px-4 btn-js-consult-send-message">Send message</button>
							            </div>
												</div>
				    					</div>
				    					<script type="text/javascript">
                    
		                    $(".btn-js-consult-send-message").click( function () {
		                      sendInquiry($('.inp-consult-name').val(), $('.inp-consult-mobile').val(), $('.inp-consult-address').val(), $('.inp-consult-email').val(), $('.inp-consult-message').val());
		                    });

		                  </script>
										</div>
									</div>
								</div>
								<div class="col-md-5 d-flex align-items-stretch">
									<div class="info-wrap bg-primary w-100 p-lg-5 p-4">
										<h3 class="mb-4 mt-md-4">Contact us</h3>
					        	<div class="dbox w-100 d-flex align-items-start">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-map-marker"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Address:</span> <?php echo $details['address'] ?></p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-phone"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Phone:</span> <a href="tel:+<?php echo $details['tel'] ?>"><?php echo $details['tel'] ?></a></p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-paper-plane"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Email:</span> <a href="mailto:<?php echo $details['email'] ?>"><?php echo $details['email'] ?></a></p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-globe"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Website</span> <a target="_blank" href="www.eliteskinph.com">www.eliteskinph.com</a></p>
						          </div>
					          </div>
				          </div>
								</div>
							</div>
						</div>
					</div>
				</div>
    	</div>
    </section>

    <?php include "section-footer.php" ?>
    
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>