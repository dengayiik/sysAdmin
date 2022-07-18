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
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;800;900&display=swap" rel="stylesheet">
      
        <title>National Revenue Authority</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css?v=<?php echo time();?>">
    </head>

   <body>
   <header class="header-bg">
   <a href="corporate-service.php"><img src="img/logo1.jpg" class="navbar-logo" alt=""></a>
        <nav>   
            <ul class="nav-links">
            <?php
                    if(isset($_SESSION['fname'])){
                        echo "Hello, ".$_SESSION['fname'];
                    }
                    else{
                        echo "<li><a href='corporate-service.php'></a></li>";
                    }
                ?>
                <li><a href='corporate-service.php' class="active">Dashboard</a></li>
                <li><a href='divisions.php'>Divisions</a></li>
                <li><a href='csd-departments.php'>Departments</a></li>
                <li><a href='csd-employees.php'>Employees</a></li>
                <li><a href='#'>Attendence</a></li>
                <li><a href='#'>Leave</a></li>
                <li><a href='csd-payroll.php'>Payroll</a></li>
                <li><a href='logout.php' class="signout-link">Signout</a></li>
            </ul>
        </nav>
        </header>
   
        <div class="row" style="padding-top: 70px;">
       <div class="col-2" style="background: #202020">
              <ul class="dashboard-links">
                <h5 style="color:lightblue;border-bottom:1px solid skyblue;padding-top:30px"> Corporate Service</h5>
                <li><a href='divisions.php'><img src="img/inv.png" alt="" id="btn-icon"> Divisions</a></li>
                <li><a href='csd-departments.php'><img src="img/deptm.png" alt="" id="btn-icon"> Departments</a></li>
                <li><a href='csd-employees.php'><img src="img/staf.png" alt="" id="btn-icon"> Employees</a></li>
                <li><a href='#'><img src="img/dash.png" alt="" id="btn-icon"> Leaves</a></li>
                <li><a href='#'><img src="img/inv.png" alt="" id="btn-icon"> Calender</a></li><br><br>
                <p style="color:#ccc;font-weight:bold;font-size:13px">EXTRA SERVICES</p>
                <li><a href='#'><img src="img/staf.png" alt="" id="btn-icon"> Attendence</a></li>
                <li><a href='csd-payroll.php'><img src="img/repo.png" alt="" id="btn-icon"> Payroll</a></li><br>
                <p style="color:#909090;font-size:12px;padding-top:80px;padding-right:20px;border-top:1px solid #404040" class="text-center">&copy National Revenue Authority <br>Republic of South Sudan<br>Headquarters - Jebel</p>
            </div>
     
      <div class="col-10">
          <div class="row">
                <h6 style="color: #909090;padding-top:20px"> DASHBOARD</h6>
                  <div class="col-3" style="background-color:rgb(24, 133, 184);width:23%;height:100px; border-radius:5px;margin-left:14px">
                    <img src="img/sqr.png" alt="" id="dash-icon">
                    <h3 style="color:#fff;padding-top:20px;font-weight:bold">5</h3>
                    <h6 style="color:#fff;padding-top:10px">Divisions</h6>
                  </div>
                  <div class="col-3" style="background-color:rgb(175, 44, 70);width:23%;height:100px; border-radius:5px;margin-left:14px">
                    <img src="img/dp.png" alt="" id="dash-icon">
                    <h3 style="color:#fff;padding-top:20px;font-weight:bold">15</h3>
                    <h6 style="color:#fff;padding-top:10px">Departments</h6>
                  </div>
                  <div class="col-3" style="background-color:rgb(238, 171, 26);width:23%;height:100px; border-radius:5px;margin-left:14px">
                    <img src="img/staf.png" alt="" id="dash-icon">
                    <h3 style="color:#fff;padding-top:20px;font-weight:bold">184</h3>
                    <h6 style="color:#fff;padding-top:10px">Employees</h6>
                  </div>
                  <div class="col-3" style="background-color:rgb(75, 155, 75);width:23%;height:100px; border-radius:5px;margin-left:14px">
                    <img src="img/ss.png" alt="" id="dash-icon">
                    <h3 style="color:#fff;padding-top:20px;font-weight:bold">7</h3>
                    <h6 style="color:#fff;padding-top:10px">Leaves</h6>
                  </div>
                  
                  <div class="col-3" style="color:#fff;background-color:rgb(24, 133, 184);width:23%;height:35px; border-radius:5px;margin-left:14px">
                  <P style="color:#fff;font-size: 11px;padding-top:10px;text-align:center">NRA-CSD</P>
                  </div>
                  <div class="col-3" style="background-color:rgb(160, 40, 64);width:23%;height:35px; border-radius:5px;margin-left:14px">
                  <P style="color:#fff;font-size: 11px;padding-top:10px;text-align:center">NRA-CSD</P>
                  </div>
                  <div class="col-3" style="background-color:rgb(224, 160, 22);width:23%;height:35px; border-radius:5px;margin-left:14px">
                  <P style="color:#fff;font-size: 11px;padding-top:10px;text-align:center">NRA-CSD</P>
                  </div>
                  <div class="col-3" style="background-color:rgb(65, 136, 65);width:23%;height:35px; border-radius:5px;margin-left:14px">
                  <P style="color:#fff;font-size: 11px;padding-top:10px;text-align:center">NRA-CSD</P>
                  </div>
                </div><br>
                <div class="col-6">
                    <p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7951.290025630601!2d31.5665458!3d4.8308697!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x171281447a85ac21%3A0x6a924d6cf30af24a!2sNational%20Revenue%20Authority!5e0!3m2!1sen!2ske!4v1635858447793!5m2!1sen!2ske" width="1095" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </p>
                </div>
              </div>
            </div>
          </div>
        </body>
      </html>