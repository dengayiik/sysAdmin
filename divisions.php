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
        <title>National Revenue Authority</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css?v=<?php echo time();?>">
    </head>
    <body class="dept-bg">
        <header class="header-bg">
        <a href="#"><img src="img/logo1.jpg" class="navbar-logo" alt=""></a>
            <nav>   
                <ul class="nav-links">
                    <li><a href='logout.php' class="signout-link">Signout</a></li>
                </ul>
            </nav>
        </header>
        <div class="col-12">

        <div class="container">
            <div class="row" style="padding-top: 100px; padding-left:290px;font-family:poppins">
                <div class="col-md-8" style="border: 1px solid #d9d9d9;padding:30px 70px;border-radius:5px">
                <img src="img/logo.png" class="signin-logo" alt="">
         <h3 class="" style="text-align:center;font-weight:bold;padding-bottom:5px">Sign In</h1>
			   <p style="font-size:17px;color:#808080">To sign in to the division, select and enter your admin details</p>
                    <button class="act" data-bs-toggle="modal" data-bs-target="#csd"> Corporate Service</button>
                    
                    <button class="act" data-bs-toggle="modal" data-bs-target="#css" > Customs</button>
                    
                    <button class="act" data-bs-toggle="modal" data-bs-target="#dtrd"> Domestic Tax</button>

                    <button class="act" data-bs-toggle="modal" data-bs-target="#audit" > Internal Audit</button>
                    
                    <button class="act" data-bs-toggle="modal" data-bs-target="#affairs"> Internal Affairs</button>
							<p class="privacy-policy">By signing in, you accepted NRA <a href="">Terms of Use</a></p>
                </div>
            </div>
        </div>

        <div class="modal fade" id="csd" tabindex="-1" aria-labelledby="enquireLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title text-dark" id="enquireLabel">Fill in the admin username and division code to access the dashboard.</p>
        <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="connection/csd.inc.php" method="post">
        <input type="text" name="div_name" class="form-control" placeholder="Username"><br>
        <input type="password" name="div_code" class="form-control" placeholder="Enter Division Code"><br>
			<input type="submit" class="verify-btn" name="submit" value="Submit"/>
      </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="css" tabindex="-1" aria-labelledby="enquireLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title text-dark" id="enquireLabel">Fill in the division name and code to access the dashboard.</p>
        <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="connection/css.inc.php" method="post">
        <input type="text" name="div_name" class="form-control" placeholder="Division Name"><br>
        <input type="password" name="div_code" class="form-control" placeholder="Enter Division Code"><br>
			<input type="submit" class="verify-btn" name="submit" value="Submit"/>
      </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="dtrd" tabindex="-1" aria-labelledby="enquireLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title text-dark" id="enquireLabel">Fill in the division name and code to access the dashboard.</p>
        <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="connection/dtrd.inc.php" method="post">
        <input type="text" name="div_name" class="form-control" placeholder="Division Name"><br>
        <input type="password" name="div_code" class="form-control" placeholder="Enter Division Code"><br>
			<input type="submit" class="verify-btn" name="submit" value="Submit"/>
      </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="audit" tabindex="-1" aria-labelledby="enquireLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title text-dark" id="enquireLabel">Fill in the division name and code to access the dashboard.</p>
        <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="connection/css.inc.php" method="post">
        <input type="text" name="div_name" class="form-control" placeholder="Division Name"><br>
        <input type="password" name="div_code" class="form-control" placeholder="Enter Division Code"><br>
			<input type="submit" class="verify-btn" name="submit" value="Submit"/>
      </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="affairs" tabindex="-1" aria-labelledby="enquireLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title text-dark" id="enquireLabel">Fill in the division name and code to access the dashboard.</p>
        <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="connection/css.inc.php" method="post">
        <input type="text" name="div_name" class="form-control" placeholder="Division Name"><br>
        <input type="password" name="div_code" class="form-control" placeholder="Enter Division Code"><br>
			<input type="submit" class="verify-btn" name="submit" value="Submit"/>
      </form>
      </div>
    </div>
  </div>
</div>
<div class="footer-wrapper">
			<div class="row">
				<div class="col-2 footer-header">
                    <h6 class="">About NRA</h6>
                    <a href="">Who We Are</a><br>
                    <a href="">Leadership</a><br>
                    <a href="">FAQs</a><br>
                    <a href="">Privacy Policy</a><br>
				</div>
             
                <div class="col-2 footer-header">
                    <h6 class="">Support</h6>
                    <p class="footer-para">+211 (0) 91 837 128<br>
                    +211 (0) 92 291 202<br><br><img src="img/mail.png" alt="" id="mail-icons">support@nra.gov.ss</p>
				</div>
                <div class="col-2 footer-header">
                    <h6 class="">Follow Us</h6>
                    <a href=""><img src="img/fb.png" alt="" id="media-icons"> Facebook</a><br>
                    <a href=""><img src="img/tr.png" alt="" id="media-icons"> Twitter</a><br>
                    <a href=""><img src="img/ig.png" alt="" id="media-icons"> Instagram</a><br>
				</div>
        <div class="col-2 footer-header">
        <h6 class="">Official Websites</h6>
                    <a href="https://nra.gov.ss/" style="color:#bebebe;font-size:12px">nra.gov.ss</a><br>
                    <a href="https://etax.nra.gov.ss/" style="color:#bebebe;font-size:12px">etax.nra.gov.ss</a><br>
                    <img src="img/flag.png" alt="" class="footer-flag">
                    <p style="color:#bebebe;font-size:12px">Proudly South Sudanese</p>
				</div>
        <footer>&copy 2022 Human Resource Portal. National Revenue Authority. All Rights Reserved | <a href="">Terms of Use.</a></footer>
			</div>
		</div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>
