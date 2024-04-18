	
	<?php include "section-meta.php"; ?>

  <body>
  	
  	<?php include "section-navigation.php"; ?>
	  <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
    <div class="hero-wrap">
		
	    <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-end">
		          <div class="col-md-6 ftco-animate">
		          	<div class="text w-100">
			            <h1 class="mb-4">Welcome to Elite Skin PH</h1>
			            <p>𝖤𝗑𝗉𝖾𝗋𝗂𝖾𝗇𝖼𝖾 𝗍𝗁𝖾 𝖾𝗅𝗂𝗍𝖾 𝗅𝖾𝗏𝖾𝗅 𝗈𝖿 𝖻𝖾𝖺𝗎𝗍𝗒 𝒘𝒊𝒕𝒉 𝑬𝒍𝒊𝒕𝒆 𝑺𝒌𝒊𝒏</p>
			            <p><a class="btn btn-primary btn-open-register-modal">Create Account</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>
		  
	      <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-end">
		          <div class="col-md-6 ftco-animate">
		          	<div class="text w-100">
			            <h1 class="mb-4">Welcome to Elite Skin PH</h1>
			            <p>𝖤𝗑𝗉𝖾𝗋𝗂𝖾𝗇𝖼𝖾 𝗍𝗁𝖾 𝖾𝗅𝗂𝗍𝖾 𝗅𝖾𝗏𝖾𝗅 𝗈𝖿 𝖻𝖾𝖺𝗎𝗍𝗒 𝒘𝒊𝒕𝒉 𝑬𝒍𝒊𝒕𝒆 𝑺𝒌𝒊𝒏</p>
			            <p><a href="#" class="btn btn-primary btn-open-login-modal">Create Account</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>
	    </div>
	  </div>

	  <section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex justify-content-center">
    			<div class="col-md-12">
	    			<div class="wrap-appointment d-md-flex">
		    			<div class="col-md-8 bg-primary p-5 heading-section heading-section-white">
		    				<span class="subheading">Feel free to contact us!</span>
		    				<h2 class="mb-4">Free Consultation</h2>
		    				<div action="#" class="appointment">
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
                        <button class="btn btn-secondary py-3 px-4 btn-open-register-modal">Send message</button>
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
		    			<div class="col-md-4 bg-white text-center p-5">
		    				<div class="desc border-bottom pb-4">
		    					<img style="display: block;width: 100px;margin: auto;padding: 10px;background-color: #beab9c;border-radius: 8px;" src="images/elite/logo.png"/>
		    					<h2>Elite Skin PH</h2>
			            <div class="opening-hours">
			             	<h4>Business Hours</h4>
			              <p class="pl-3">
			              	<span><?php echo $details['opening'] ?></span>
			              </p>
			            </div>
		    				</div>
								<div class="desc pt-4 ">
									<a target="_blank" href="https://www.facebook.com/eliteskin.philippines" class="btn btn-primary" style="background-color: #1974ec !important;border-color: #1974ec;">Visit our Facebook Page</a>
								</div>
		    			</div>
		    		</div>
		    	</div>
    		</div>
    	</div>
    </section>

    <?php include "section-services.php"; ?>
   	
    <section class="ftco-section testimony-section" style="background-color: #6c757d !important;">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
          	<span class="subheading">Testimonies</span>
            <h2>Happy Clients &amp; Feedbacks</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Trusting the skilled hands of Dr. Mykee, she has unlocked the secret to maintaining her youthful glow</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Maita Tan</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Meet our glowing client, Ms. A! Even with a busy schedule, she makes time for her skin, trusting the expert care of Dr. Sean.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Lurna Mae</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Rediscover your skin's youthful radiance! Our Microneedling and Skin Booster treatment at Elite Skin PH is designed to rejuvenate your skin</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Lia Zumaga</p>
		                    <span class="position">SEO & Project Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Maymay Kia</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Celebrate the beauty of being a woman with us at Elite Skin PH, where savings and self-care await you. Treat yourself to pampering sessions that celebrate your unique glow.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Kerlin Joy</p>
		                    <span class="position">Marketing Head</span>
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