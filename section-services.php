<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">We offer Services</span>
            <h2>Our Benefits</h2>
          </div>
        </div>
    		<div class="row">
          <?php while ($services = mysqli_fetch_array($ser)) { ?>
              <div class="col-md-4 services ftco-animate">
                <div class="d-block d-flex">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="<?php echo $services['icon']?>"></span>
                  </div>
                  <div class="media-body pl-3">
                    <h3 class="heading"><?php echo $services['title']?></h3>
                    <p><?php echo $services['description']?></p>
                  </div>
                </div> 
              </div>
          <?php }?>
        </div>
    	</div>
    </section>