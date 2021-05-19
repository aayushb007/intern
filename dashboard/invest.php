<?php
session_start();
if (isset($_SESSION['id']))
{
 include'db_connect.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>MovieBazaar</title>

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="icon" type="image/png" href="assets/logo-white.png"/>

	<!-- Import lib -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<!-- End import lib -->

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="overlay-scrollbar">
	<!-- navbar -->
	<div class="navbar">
		<!-- nav left -->
		<ul class="navbar-nav">
			
			<li class="nav-item">
				<img src="assets/logo.png" alt="ATPro logo" class="logo logo-light">
				<img src="assets/logo-white.png" alt="ATPro logo" class="logo logo-dark">
			</li>
		</ul>
		<!-- end nav left -->
		<!-- form -->
		
		<!-- end form -->
		<!-- nav right -->
		<ul class="navbar-nav nav-right">
			<li class="nav-item mode">
				<a class="nav-link" href="#" onclick="switchTheme()">
					<i class="fas fa-sun light-icon"></i>
					<i class="fas fa-moon dark-icon"></i>
					
				</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link">
					<i class="fas fa-bell dropdown-toggle" data-toggle="notification-menu"></i>
					<span class="navbar-badge">0</span>
				</a>
				<ul id="notification-menu" class="dropdown-menu notification-menu">
					<div class="dropdown-menu-header">
						<span>
							Notifications
						</span>
					</div>
					<div class="dropdown-menu-content overlay-scrollbar scrollbar-hover">
						
					</div>
					<div class="dropdown-menu-footer">
						<span>
							View all notifications
						</span>
					</div>
				</ul>
			</li>
			<li class="nav-item avt-wrapper">
				<div class="avt dropdown">
					<img src="assets/img3.png" alt="User image" class="dropdown-toggle" data-toggle="user-menu">
					<ul id="user-menu" class="dropdown-menu">
						<li  class="dropdown-menu-item">
							<a class="dropdown-menu-link">
								<div>
									<i class="fas fa-user-tie"></i>
								</div>
								<span><?php echo $_SESSION["id"] ?></span>
							</a>
						</li>
						<li  class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-spinner"></i>
								</div>
								<span>Invest</span>
							</a>
						</li>
						<li  class="dropdown-menu-item">
							<a href="../logout.php" class="dropdown-menu-link">
								<div>
									<i class="fas fa-sign-out-alt"></i>
								</div>
								<span>Logout</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
		</ul>
		<!-- end nav right -->
	</div>
	<!-- end navbar -->
	<!-- sidebar -->
	<!-- end sidebar -->
	<!-- main content -->
	<div class="wrapper">
		<div class="row">
        <?php
					$i = 1;
					$id=$_SESSION["id"];
				
					$qry = $conn->query("SELECT * FROM invest WHERE email='$id'");
					while($row= $qry->fetch_assoc()):
					?>
					
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-purple">
					<p>
						<i class="fas fa-tasks"></i>
					</p>
					<h3><?php echo $row['total'] ?></h3>
					<p>Total Investment</p>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-purple1">
					<p>
						<i class="fas fa-spinner"></i>
					</p>
					<h3><?php echo $row['active'] ?></h3>
					<p>Active Investment</p>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-purple2">
					<p>
						<i class="fas fa-check-circle"></i>
					</p>
					<h3><?php echo $row['profit'] ?></h3>
					<p>Profit</p>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-purple3">
					<p>
						<i class="fas fa-bug"></i>
					</p>
					<h3><?php echo $row['issue'] ?></h3>
					<p>Issues</p>
				</div>
			</div>
            <?php endwhile; ?>
		</div>
		<div class="row">
			<div class="col-12 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							Project Invested In
						</h3>
						<i class="fas fa-ellipsis-h"></i>
					</div>
					<div class="card-content">
						<table>
							<thead>
								<tr>
									<th>#</th>
									<th>Title</th>
									<th>Amount</th>
									<th>Status</th>
									<th>Investment date</th>
								</tr>
							</thead>
							<tbody>
                            <?php
					$i = 1;
					
					$qry = $conn->query("SELECT * FROM invest_result WHERE id='$id' ");
					while($row= $qry->fetch_assoc()):
					?>
								<tr>
									<td><?php echo $i++ ?></td>
									<td><?php echo $row['title'] ?></td>
									<td><?php echo $row['amount'] ?></td>
									<td>
                                    <?php if($row['status']=='complete'){
									echo'<span class="dot">
											<i class="bg-success"></i>
											Completed
										</span>';
                                    }?>
                                     <?php if($row['status']=='progress'){
									echo'<span class="dot">
											<i class="bg-warning"></i>
											In Progress
										</span>';

                                        
                                    }?>
                                    <?php if($row['status']=='failed'){
									echo'<span class="dot">
											<i class="bg-danger"></i>
											Failed
										</span>';

                                        
                                    }?>
									</td>
									<td><?php echo $row['date'] ?></td>
								</tr>
                                <?php endwhile; ?>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- <div class="col-4 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							Progress bar
						</h3>
						<i class="fas fa-ellipsis-h"></i>
					</div>
					<div class="card-content">
						<div class="progress-wrapper">
							<p>
								Less than 1 hour
								<span class="float-right">50%</span>
							</p>
							<div class="progress">
								<div class="bg-success" style="width: 50%"></div>
							</div>
						</div>
						<div class="progress-wrapper">
							<p>
								1 - 3 hours
								<span class="float-right">60%</span>
							</p>
							<div class="progress">
								<div class="bg-primary" style="width:60%"></div>
							</div>
						</div>
						<div class="progress-wrapper">
							<p>
								More than 3 hours
								<span class="float-right">40%</span>
							</p>
							<div class="progress">
								<div class="bg-warning" style="width:40%"></div>
							</div>
						</div>
						<div class="progress-wrapper">
							<p>
								More than 6 hours
								<span class="float-right">20%</span>
							</p>
							<div class="progress">
								<div class="bg-danger" style="width:20%"></div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</div>
		<div class="row">
			<div class="col-12 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							Chartjs
						</h3>
					</div>
					<div class="card-content">
						<canvas id="myChart"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end main content -->
	<!-- import script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="index.js"></script>
	<!-- end import script -->
</body>
</html>
							<?php	}
								else{	header('location:../home-test.php');
								}?>