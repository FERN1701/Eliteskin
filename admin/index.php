<?php include "head.php"?>

<link rel="stylesheet" href="https://cdn.datatables.net/2.0.4/css/dataTables.dataTables.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css">
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.0.4/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
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

									<h5 class="card-title mb-0">List of Appointments</h5>
								</div>
								<div class="card-body">
								<table id="example" class="display" style="width:100%">
									<thead>
										<tr>
											<th>Name</th>
											<th>Contact</th>
											<th>Date</th>
											<th>Time</th>
											<th>Doctor</th>
											<th>Service</th>
											<th>Status</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
									<?php while ($appointment = mysqli_fetch_array($appt)) {?>
											<tr>
												<td><a href="mailto:<?php echo $appointment['email']?>"><?php echo $appointment['first_name']." ".$appointment['last_name']?></a></td>
												<td><a href="tel:+<?php echo $appointment['contact']?>"><?php echo $appointment['contact']?></a></td>
												<td><?php echo $appointment['date_approint']?></td>
												<td><?php echo $appointment['time_approint']?></td>
												<td><?php echo $appointment['name']?></td>
												<td><?php echo $appointment['title']?></td>
												<td><?php echo $appointment['status']?></td>
												<td>
													<?php if ($appointment['status'] == "Approved" || $appointment['status'] == "Denied") {?>
														<a href="" class="btn btn-secondary">No Action</a>
													<?php }else { ?>
														<a href="index.php?approve=<?php echo $appointment['appointmentID']?>" class="btn btn-success">Approve</a>
														<a href="index.php?denied=<?php echo $appointment['appointmentID']?>" class="btn btn-danger">Denied</a>
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

	<script>
		new DataTable('#example', {
    layout: {
        topStart: {
            buttons: [
                {
                    extend: 'pdfHtml5',
                    orientation: 'portraint',
                    pageSize: 'LEGAL'
                }
            ]
        }
    }
});
	</script>

</body>

</html>