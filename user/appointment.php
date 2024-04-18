<?php include "head.php"?>

<body>
	<div class="wrapper">
		<?php include "sidebar.php"?>

		<div class="main">
            <?php include "topbar.php"?>
			<main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3"><strong>Appointment</strong> Details</h1>

					<div class="row">
						<div class="col-12 col-lg-12  d-flex">
							<div class="card flex-fill">
								<div class="card-header">
                                    <h5 class="card-title mb-0">Appointment forms</h5>
								</div>
                                <!--content here-->
                                   <div class="container mb-5">
                                   <form action="" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
                                    <div class="row">
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
                                            <div class="col-sm-6">
                                                <?php if (isset($appointment['skin_image'])) { ?>
                                                    <img src="../images/conditions/<?php echo $appointment['skin_image']?>" class="img-fluid" alt="">
                                                <?php }?>
                                                <label for="">Skin Image</label>
                                                <input type="file" name="lis_img0" class="form-control" id="">
                                                <Label>Skin Conditions</Label>
                                                <textarea name="conditions" class="form-control" rows="8"><?php echo $appointment['conditions']?></textarea>
                                            </div>
                                            <div class="col-sm-6">
                                            
                                               <div class="row">
                                                    <div class="col-sm-6">
                                                        <label for="">Personal Details</label>
                                                        <input type="text"  class="form-control" id="" value="<?php echo $fetch_info['first_name']." ".$fetch_info['last_name']?>">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label for="">Email</label>
                                                        <input type="text"  class="form-control" id="" value="<?php echo $fetch_info['email']?>">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label for="">Contact</label>
                                                        <input type="text"  class="form-control" id="" value="<?php echo $fetch_info['contact']?>">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="">Services</label>
                                                        <select name="services" class="form-control" id="">
                                                            <?php while ($services = mysqli_fetch_array($ser)) { ?>
                                                                <option value="<?php echo $services['serviceID']?>"><?php echo $services['title']?></option>
                                                            <?php }?>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="">Doctor</label>
                                                        <select name="doctor" class="form-control" id="">
                                                        <?php while ($doctors = mysqli_fetch_array($doc)) { ?>
                                                                <option value="<?php echo $doctors['doctorsID']?>"><?php echo $doctors['name']?></option>
                                                            <?php }?>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label for="">Date</label>
                                                        <input type="date" name="dates" class="form-control" id="" value="<?php echo $appointment['date_approint']?>">
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label for="">Time</label>
                                                        <input type="time" name="times" class="form-control" id="" value="<?php echo $appointment['time_approint']?>">
                                                    </div>
                                                    
                                                    <div class="col-sm-6 mt-3">
                                                        <button class="btn btn-outline-primary" name="appointments">Set Appointment</button>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                   </div>
                                <!--content here-->
								
							</div>
						</div>
						
					</div>

				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						

						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="" target="_blank">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="" target="_blank">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="" target="_blank">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

	

</body>

</html>