<?php include "head.php"?>

<body>
	<div class="wrapper">
		<?php include "sidebar.php"?>

		<div class="main">
            <?php include "topbar.php"?>
			<main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3"><strong>Appointment</strong> Dashboard</h1>

					<div class="row">
						<div class="col-12 col-lg-12  d-flex">
							<div class="card flex-fill">
								<div class="card-header">

									<h5 class="card-title mb-0">Latest Projects</h5>
								</div>
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>Date Appointment</th>
											<th>Time</th>
											<th>Doctor</th>
											<th>Services</th>
											<th>Status</th>
											<th>Actions</th>
											
										</tr>
									</thead>
									<tbody>
										<?php while ($appointment = mysqli_fetch_array($apt)) {?>
											<tr>
												<td><?php echo $appointment['date_approint']?></td>
												<td><?php echo $appointment['time_approint']?></td>
												<td><?php echo $appointment['name']?></td>
												<td><?php echo $appointment['title']?></td>
												<td><?php echo $appointment['status']?></td>
												<td>
													<?php if ($appointment['status'] == "Approved" || $appointment['status'] == "Denied") {?>
														<a href="" class="btn btn-secondary">No Action</a>
													<?php }else { ?>
														<a href="appointment.php?editappoint=<?php echo $appointment['appointmentID']?>" class="btn btn-info">Edit</a>
														<a href="appointment.php?deleteappoint=<?php echo $appointment['appointmentID']?>" class="btn btn-danger">Delete</a>
													<?php }?>
													
												</td>
												
											</tr>
										<?php }?>
										
									</tbody>
								</table>
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