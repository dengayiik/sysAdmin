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
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;800;900&display=swap" rel="stylesheet">
        <title>NRA-ICT | REGISTER</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css?v=<?php echo time();?>">
    </head>

   <body>
   <header>
   <a href="index.php"><img src="img/logo1.jpg" class="header-logo" alt=""></a>
            <nav>   
                <ul class="nav-links">
                <?php
                    if(isset($_SESSION['fname'])){
                        echo "Hello, ".$_SESSION['fname'];
                    }
                    else{
                        echo "<li><a href='dashboard.php'></a></li>";
                    }
                ?>
                    <li><a href='index.php'>Home</a></li>
                    <li><a href='login.php'>Sign In</a></li>
                    <li><a href='#' class="active">Create an Account</a></li>
                </ul>
            </nav>
        </header>

   <div class="container">
      <div class="row">
         <section class="signup-title">
            
         </section>
      </div>
   </div>

   <div class="container">
      <div class="appointment-form">
         <form action="connection/signup.inc.php" method="post">
         <div class="row">
         <h3 class="admin-header">Create an Account</h1>
            <h6 class="">Please make sure you use a strong password</h6>
				      <div class="form-group col-6">
							<label for="">First Name</label>
							<input type="text" class="form-control" placeholder="Enter your first name" name="fname"/>
                  </div>
				      <div class="form-group col-6">
                     <label for="">Last Name</label>
							<input type="text" class="form-control" placeholder="Enter your first name" name="lname"/>
                  </div>
                  <div class="form-group col-6">
                     <label for="">Email</label>
							<input type="text" class="form-control" placeholder="you@example.com" name="email"/>
                     <p>We'll never share your email with anyone else</p>
                  </div>
                  <div class="form-group col-6">
							<label for="">Phone</label>
							<input type="text" class="form-control" placeholder="9xxxxxxxx" name="phone"/>
                     <p>We'll never share your number with anyone else</p>
                  </div>
				      <div class="form-group col-6">
							<label for="">Password</label>
							<input type="password" class="form-control" placeholder="Enter your password" name="password"/>
                     <p>Mininum of 8 characters (e.g. Nura2@#a!)</p>
                  </div>
				      <div class="form-group col-6">
                     <label for="">Confirm Password</label>
							<input type="password" class="form-control" placeholder="Confirm your password" name="cpassword"/>
                  </div>
							<input type="submit" class="appointment-btn" name="submit" value="Sign Up"/>
							<p class="privacy-policy">By Creating Account, you accepted NRA <a href="">Terms of Use</a></p>
							<p class="privacy-policy">Have an Account? <a href="login.php">Sign In</a></p>
						</form>
					</div>
				</div>
			</div>
		</div>
</div>

                <footer>Copyright &copy National Revenue Authority - Republic of South Sudan 2021. All Rights Reserved | <a href="">Privacy Policy.</a></footer>
			</div>
		</div>

   </body>
</html>