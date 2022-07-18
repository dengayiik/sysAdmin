<!DOCTYPE html>
<html lang="en">

   <?php
   include("connection/connect.php");
   error_reporting(0);  
   session_start();
   ?>

      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="#">
		  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>National Revenue Authority</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css?v=<?php echo time();?>">
    </head>

   <body>
   <header class="header-bg">
   <a href="corporate-service.php"><img src="img/logo1.jpg" class="navbar-logo" alt=""></a>
        <nav>   
            <ul class="nav-links">
            <li><a href='corporate-service.php'>Dashboard</a></li>
                <li><a href='divisions.php'>Divisions</a></li>
                <li><a href='csd-departments.php'>Departments</a></li>
                <li><a href='csd-employees.php' class="active">Employees</a></li>
                <li><a href='#'>Attendence</a></li>
                <li><a href='#'>Leave</a></li>
                <li><a href='csd-payroll.php'>Payroll</a></li>
                <li><a href='logout.php' class="signout-link">Signout</a></li>
            </ul>
        </nav>
        </header>
   
        

        <div class="container">
      <div class="appointment-form">
      <div class="row" style="font-weight:bold;padding-top:150px">
        <h2 style="font-weight:bold;color:#707070">Employee Registration Form</h2>
        <h5 style="font-weight:bold;padding-left:700px;color:#707070">F-SFT-007-E</h5>
        </div>
        
         <form action="connection/signup.inc.php" method="post">
         <div class="row">
         <h4 class="admin-header">1.a. Personal Details</h4>
            <h6 class="" style="padding-bottom:20px">Please make sure you review the information entered below before submitting.</h6>
				      <div class="form-group col-6">
							<label for="">Surname</label>
							<input type="text" class="form-control" placeholder="Enter surname" name="fname"/>
                  </div>
				      <div class="form-group col-6">
                     <label for="">First Name</label>
							<input type="text" class="form-control" placeholder="Enter first name" name="lname"/>
                  </div>
                  <div class="form-group col-6">
                     <label for="">Other Names (in full)</label>
							<input type="text" class="form-control" placeholder="Enter other names" name="lname"/>
                  </div>
                  <div class="form-group col-6">
							<label for="">Gender</label>
                     <select class="form-select" aria-label="">
                        <option selected>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                     </select>
                  </div>
                  <div class="col-6 md-form md-outline input-with-post-icon datepicker">
                     <label for="example">Date of Birth</label>
                     <input placeholder="Select date" type="date" id="example" class="form-control" style="color:#707070">
                  </div>
                  <div class="form-group col-6">
                     <label for="">Marital Status</label>
                     <select class="form-select" aria-label="">
                        <option selected>Select Status</option>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="separated">Separated</option>
                        <option value="widowed">Widowed</option>
                     </select>                  
                  </div>
                  <div class="form-group col-6">
							<label for="">Postal Address</label>
							<input type="text" class="form-control" placeholder="e.g. Munuki 107, Juba City" name="fname"/>
                  </div>
                  <div class="form-group col-6">
							<label for="">Tel. No.</label>
							<input type="text" class="form-control" placeholder="9xxxxxxxx" name="phone"/>
                  </div>
                  <div class="form-group col-6">
                     <label for="">Email</label>
							<input type="text" class="form-control" placeholder="you@gmail.com" name="email"/>
                  </div>
                  <div class="form-group col-6">
                     <label for="">State</label>
                     <select class="form-select" aria-label="">
                        <option selected>Select State</option>
                        <option value="central">Central Equatoria</option>
                        <option value="eastern">Eastern Equatoria</option>
                        <option value="western">Western Equatoria</option>
                        <option value="jonglei">Jonglei State</option>
                        <option value="lakes">Lakes State</option>
                        <option value="warap">Warap State</option>
                     </select>                  </div>
                            <div class="form-group col-6">
                     <label for="">Domicile/Place of Origin</label>
                     <select class="form-select" aria-label="">
                        <option selected>Select City</option>
                        <option value="single">Juba</option>
                        <option value="married">Wau</option>
                        <option value="separated">Malakal</option>
                        <option value="widowed">Maridi</option>
                        <option value="widowed">Torit</option>
                        <option value="widowed">Bor</option>
                        <option value="widowed">Nimule</option>
                        <option value="widowed">Yambio</option>
                        <option value="widowed">Aweil</option>
                        <option value="widowed">Yei</option>
                        <option value="widowed">Rumbek</option>
                        <option value="widowed">Tonj</option>
                     </select>                             
                  </div>
                  <div class="form-group col-6">
                     <label for="">Payroll Number</label>
							<input type="text" class="form-control" placeholder="Payroll number" name="email"/>
                  </div>
                  <h4 class="admin-header">b. Spouse Details</h4>
                  <div class="form-group col-6">
                     <label for="">Full Name</label>
							<input type="text" class="form-control" placeholder="Enter full name" name="lname"/>
                  </div>
                  <div class="form-group col-6">
							<label for="">Postal Address</label>
							<input type="text" class="form-control" placeholder="e.g. Munuki 107, Juba City" name="fname"/>
                  </div>
                  <div class="form-group col-6">
							<label for="">Tel. No.</label>
							<input type="text" class="form-control" placeholder="9xxxxxxxx" name="phone"/>
                  </div>
                  <div class="form-group col-6">
                     <label for="">Email</label>
							<input type="text" class="form-control" placeholder="you@gmail.com" name="email"/>
                  </div>
                  </div>
							<input type="submit" class="verify-btn" name="submit" value="Submit"/>
							<p class="privacy-policy">By Submitting Account, you accepted NRA <a href="">Terms of Use</a></p>
						</form>
					</div>
				</div>
			</div>
		</div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
   </body>
</html>