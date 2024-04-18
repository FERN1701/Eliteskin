<?php include "head.php"?>

<body>
	<div class="wrapper">
		<?php include "sidebar.php"?>

		<div class="main">
            <?php include "topbar.php"?>
			<main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3"><strong>Services</strong> Details</h1>

					<div class="row">
						<div class="col-12 col-lg-12  d-flex">
							<div class="card flex-fill">
								<div class="card-header">
                                    <h5 class="card-title mb-0">List of Services</h5>
								</div>
                                <!--content here-->
                                   <div class="container mb-5">
                                   <form action="" method="POST" autocomplete="">
                                    <div class="row">
                                        <div class="col-sm-6">
                                             <div class="row">
                                                <div class="col-sm-12">
                                                    <label for="">Doctor's Name</label>
                                                    <input type="text" name="dname" class="form-control" id="" value="<?php echo $doctors['name']?>">
                                                </div>
                                               
                                                <div class="col-sm-2 mt-3">
                                                  <button type="submit" class="btn btn-outline-primary" name="doctor">Submit</button>
                                                </div>
                                             </div>
                                        </div>
                                        
                                    </form>
                                        <div class="col-sm-6">
                                        <table class="table table-hover my-0">
									<thead>
										<tr>
											<th>Name</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
                                        <?php while ($doctors = mysqli_fetch_array($ddc)) { ?>
                                            <tr>
                                                <td><?php echo $doctors['name']?></td>
                                                <td>
                                                    <a href="doctors.php?editdoc=<?php echo $doctors['doctorsID']?>" class="btn btn-info">Edit</a>
                                                    <a href="doctors.php?deletedoc=<?php echo $doctors['doctorsID']?>" class="btn btn-danger">Delete</a>
                                                </td>
										    </tr>
                                        <?php }?>
										
									</tbody>
								</table>
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