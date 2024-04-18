	
	<?php include "section-meta.php"; ?>

  <body>
  	
  	<?php
      include "section-navigation.php";
      include "section-modal-booking.php";
      include "./api/connection.php";
    ?>

    <div class="d-flex justify-content-start align-items-center px-5 py-2">
      <button class="btn btn-primary btn-open-booking-modal">Create Appointment</button>
    </div>

    <section class="ftco-section ftco-no-pt ftco-no-pb px-5">
      <table>
        <thead>
          <tr>
            <th>No.</th>
            <th>Schedule</th>
            <th>Time</th>
            <th>Total Cost</th>
            <th>Message</th>
            <th>Cancel</th>
          </tr>
        </thead>
        <tbody>
        <?php

          if((isset($_GET['i'])) && ($_GET['i'] !== '')) {
            $user_id  = $_GET['i'];
            $sql      = "SELECT * FROM appointment WHERE user_id = '1' ORDER BY id DESC ";
            $result   = $conn->query($sql);
            if ($result->num_rows > 0) {
              $index = 1;
              while($row = $result->fetch_assoc()) {
                ?>
                <tr>
                  <td><?php echo $index++; ?></td>
                  <td><?php echo $row['sched_date'] ?></td>
                  <td><?php echo $row['sched_time'] ?></td>
                  <td><?php echo $row['total'] ?></td>
                  <td><?php echo $row['message'] ?></td>
                  <td><button class="btn btn-danger btn-sm" onclick="cancelBooking(<?php echo $row['id']; ?>)">Cancel</button></td>
                </tr>
                <?php
              }
            }
          }
          else {
            echo "<script> window.location.replace('./'); </script>";
          }
        ?>
        </tbody>
      </table>
    </section>

	  <section class="ftco-section ftco-no-pt ftco-no-pb my-5">
    	<div class="container">
    		<div class="row d-md-flex justify-content-center">
    			<div class="col-md-8">
	    			
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
  <script src="js/sweetalert2@11.js"></script>
  <script src="js/main.js"></script>
  <script type="text/javascript">
    $(document).ready( function () {
      var user_info   = localStorage.getItem("user-info");
      if(!user_info) {
        window.location.href = "./";
      }
    });
  </script>
    
  </body>
</html>