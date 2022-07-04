<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "zalego";

$conn = mysqli_connect($server,$username,$password,$database);
$sqlQuery = mysqli_query($conn, "SELECT *FROM enrollment");


?>
<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Admin Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Creating admin dashboard">
	<meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
	<meta name="author" content="Your name">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!-- All our code. write here   -->
	<div class="header">
		<img src="images/zalego.jpg" alt="zalego" height="50" width="50" class="rounded-circle">
		<a href="#" class="navbar-trigger"><span></span></a>

	</div>
	<div class="sidebar">
		<nav>
			<ul>
				<li>
					<a href="students.html">
						<span class="fa fa-group"></span>
						<span>Students</span>
					</a>
				</li>
				<li>
					<a href="">
						<span class="fa fa-folder-open"></span>
						<span>Courses</span>
					</a>
				</li>
				<li>
					<a href="">
						<span class="fa fa-graduation-cap"></span>
						<span>Campus</span>
					</a>
				</li>
			</ul>
		</nav>

	</div>
	<div class="main-content">
		<div class="container-fluid">
			<div class="row pt-5">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Students</span>
					</div>
                    <div class="card-body">
                        <table class="table table-striped table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Full name</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Course</th>
                                    <th>Enrolled On</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php while($fetchrecords = mysqli_fetch_array($sqlQuery)) { ?>
									<tr>
										<td><?php echo $fetchrecords['no'] ?></td>
										<td><?php echo $fetchrecords['fullname'] ?></td>
										<td><?php echo $fetchrecords['phonenumber'] ?></td>
										<td><?php echo $fetchrecords['email'] ?></td>
										<td><?php echo $fetchrecords['gender'] ?></td>
										<td><?php echo $fetchrecords['course'] ?></td>
										<td><?php echo $fetchrecords['created_at'] ?></td>
										<td>
											<a href="">Edit</a>
											<a href="">View</a>
											<a href="">Delete</a>
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
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<tr>
                                    <td>1.</td>
                                    <td>Diana Mocoh</td>
                                    <td>+254746239540</td>
                                    <td>mocohdiana04@gmail.com</td>
                                    <td>Female</td>
                                    <td>Web Design and Development</td>
                                    <td>23rd August 2022</td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-info btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>