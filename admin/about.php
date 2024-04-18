<?php include "head.php"?>

<body>
	<div class="wrapper">
		<?php include "sidebar.php"?>

		<div class="main">
            <?php include "topbar.php"?>
			<main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3"><strong>About</strong> Details</h1>

					<div class="row">
						<div class="col-12 col-lg-12  d-flex">
							<div class="card flex-fill">
								<div class="card-header">
                                    <h5 class="card-title mb-0">System information</h5>
								</div>
                                <!--content here-->
                                   <div class="container mb-5">
                                   <form action="" method="POST" autocomplete="">
                                    <div class="row">
                                            <div class="col-sm-6">
                                                <Label>About details</Label>
                                                <textarea name="about" class="form-control" rows="8"><?php echo $details['about']?></textarea>
                                            </div>
                                            <div class="col-sm-6">
                                            
                                               <div class="row">
                                                    <div class="col-sm-4">
                                                        <label for="">Expirience</label>
                                                        <input type="text" name="expirience" class="form-control" id="" value="<?php echo $details['expirience']?>">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Customer</label>
                                                        <input type="text" name="customers" class="form-control" id="" value="<?php echo $details['customers']?>">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="">Awards</label>
                                                        <input type="text" name="award" class="form-control" id="" value="<?php echo $details['award']?>">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="">Telephone Number</label>
                                                        <input type="text" name="tel" class="form-control" id="" value="<?php echo $details['tel']?>">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="">Email</label>
                                                        <input type="text" name="email" class="form-control" id="" value="<?php echo $details['email']?>">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="">Address</label>
                                                        <input type="text" name="address" class="form-control" id="" value="<?php echo $details['address']?>">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="">Availability</label>
                                                        <input type="text" name="opening" class="form-control" id="" value="<?php echo $details['opening']?>">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="">Vacation</label>
                                                        <input type="text" name="vacations" class="form-control" id="" value="<?php echo $details['vacations']?>">
                                                    </div>
                                                    <div class="col-sm-6 mt-3">
                                                        <button class="btn btn-outline-primary" name="system_details">Update</button>
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