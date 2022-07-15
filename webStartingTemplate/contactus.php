<?php

require_once('logics/dbconnection.php');



?>


<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php') ?>
<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php') ?>
	
	<div class="sidebar">

	<?php require_once('includes/sidebar.php') ?>
    </div>
	<div class="main-content">
		<div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-center text-white">
                            <h4>Contact Us</h4>
                            <span></span>
	</div><div class="card-body">
	<form action="contactus.php" method="POST">
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="firstname" class="form-label">Fullname</label>
                        <input type="text" class="form-control" placeholder="Enter your full name">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="firstname" class="form-label">Phone number</label>
                        <input type="tel" class="form-control" placeholder="Enter your phone number">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="firstname" class="form-label">Email address</label>
                        <input type="email" class="form-control" placeholder="Enter your email address">
                    </div>
                    <div class="mb-3 col-lg-6">
                		<label for="gender" class="form-label">Gender</label>
                        <select name="gender" class="form-control" aria-label="default select example">
                                <option ></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-lg-6">
					<label for="firstname" class="form-label">Courses</label>	
					<select name="course" class="form-control multiplchose_questiontypes" id="selector">
                                <option value="" ></option>
                                <option value="web design">web design</option>
                                <option value="cyber security">cyber security</option>
                                <option value="android development">android development</option>

                            </select>
                        

                    </div>
                </div>
				
    
	
                <button type="submit" class="btn btn-primary">Submit application</button>
                
            </form>
        </div>
    

    
    </div>

	</div>


	
            
            
           









    <?php require_once('includes/scripts.php') ?>
</body>
</html>
