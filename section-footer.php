    <footer class="footer ftco-section ftco-no-pt">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg">
            <div class="ftco-footer-widget py-4 py-md-5">
              <h2 class="logo"><a href="./">Elite Skin PH</a></h2>
              <p>
                𝖤𝗑𝗉𝖾𝗋𝗂𝖾𝗇𝖼𝖾 𝗍𝗁𝖾 𝖾𝗅𝗂𝗍𝖾 𝗅𝖾𝗏𝖾𝗅 𝗈𝖿 𝖻𝖾𝖺𝗎𝗍𝗒 𝒘𝒊𝒕𝒉 𝑬𝒍𝒊𝒕𝒆 𝑺𝒌𝒊𝒏<br/>
              </p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg">
            <div class="ftco-footer-widget ml-md-5 py-5">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="./" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Home</a></li>
                <li><a href="./about.php" class="py-1 d-block"><span class="fa fa-check mr-3"></span>About</a></li>
                <li><a href="./services.php" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Services</a></li>
                <li><a href="./contact.php" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg">
            <div class="ftco-footer-widget py-4 py-md-5">
            	<h2 class="ftco-heading-2">Contact information</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon fa fa-map-marker"></span><span class="text"><?php echo $details['address'] ?></span></li>
	                <li><a href="tel:+<?php echo $details['tel'] ?>"><span class="icon fa fa-phone"></span><span class="text"><?php echo $details['tel'] ?></span></a></li>
	                <li><a href="mailto:<?php echo $details['email'] ?>"><span class="icon fa fa-paper-plane"></span><span class="text"><?php echo $details['email'] ?></span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg">
             <div class="ftco-footer-widget p-4 py-5">
              <h2 class="ftco-heading-2">Business Hours</h2>
              <div class="opening-hours">
              	<h4>Opening Days:</h4>
              	<p class="pl-3">
              		<span><?php echo $details['opening'] ?></span>
              	</p>
              	<h4>Vacations:</h4>
              	<p class="pl-3">
              		<span><?php echo $details['vacations'] ?></span>
              	</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>