<?php include "head.php"?>

<body>
	<div class="wrapper">
		<?php include "sidebar.php"?>

		<div class="main">
            <?php include "topbar.php"?>
			<main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3"><strong>About</strong> Me</h1>

					<div class="row">
						<div class="col-12 col-lg-12  d-flex">
							<div class="card flex-fill">
								<div class="card-header">
                                    <h5 class="card-title mb-0">My Profile</h5>
								</div>
                                <!--content here-->
                                   <div class="container mb-5">
                                   <form action="" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
                            <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Profile Photo</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="lis_img0" id="inputEmail3" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">First Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="first" id="inputEmail3" value="<?php echo $fetch_info['first_name']?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Last Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="last" id="inputEmail3" value="<?php echo $fetch_info['last_name']?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email </label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email" id="inputEmail3" value="<?php echo $fetch_info['email']?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Contact Number</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="number" id="inputEmail3" value="<?php echo $fetch_info['contact']?>">
                                    </div>
                                </div><div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="address" id="inputEmail3" value="<?php echo $fetch_info['address']?>">
                                    </div>
                                </div>
                                
                                
                                <button type="submit" class="btn btn-primary" name="profile">Update Profile</button>
                            </form>
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