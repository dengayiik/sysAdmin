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
        <title>NRA-Domestic Tax | DASHBOARD</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css?v=<?php echo time();?>">
    </head>

   <body>
   <header>
   <a href="#"><img src="img/logo1.jpg" class="header-logo" alt=""></a>
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
                <li><a href='#' class="active">Dashboard</a></li>
                <li><a href='divisions.php'>Divisions</a></li>
                <li><a href='departments.php'>Departments</a></li>
                <li><a href='employees.php'>Employees</a></li>
                <li><a href='#'>Payroll</a></li>
                <li><a href='#'>Leaves</a></li>
                <li><a href='logout.php' class="sign-out">Sign-out</a></li>
            </ul>
        </nav>
        </header>
   
        <div class="row" style="padding-top: 71px">
       <div class="col-2" style="background: rgb(18, 18, 37)">
                  <h6 style="background-color:rgb(24, 24, 49);font-weight:bold;padding:12px;color:#bebebe;box-shadow:5px 5px 5px #000" class="text-center">DOMESTIC TAX</h6>
              <ul class="dashboard-links">
                <li><a href='headquarters.php' id="act-link"><img src="img/dash.png" alt=""  id="btn-icon" style="font-weight:bold;color:#bebebe"> Dashboard</a></li>
                <li><a href='divisions.php'><img src="img/inv.png" alt="" id="btn-icon"> Divisions</a></li>
                <li><a href='departments.php'><img src="img/deptm.png" alt="" id="btn-icon"> Departments</a></li>
                <li><a href='employees.php'><img src="img/staf.png" alt="" id="btn-icon"> Employees</a></li>
                <li><a href='#'><img src="img/staf.png" alt="" id="btn-icon"> Payroll</a></li>
                <li><a href='#'><img src="img/leave.png" alt="" id="btn-icon"> Leaves</a></li><br><br>
                <p style="color:#505050;font-weight:bold;font-size:13px">EXTRA SERVICES</p>
                <li><a href='inventory.php'><img src="img/inv.png" alt="" id="btn-icon"> Inventory</a></li>
                <li><a href='repository.php'><img src="img/repo.png" alt="" id="btn-icon"> Repository</a></li>
                <p style="color:#909090;font-size:12px;padding-top:80px;padding-right:20px;border-top:1px solid #404040" class="text-center">&copy National Revenue Authority <br>Republic of South Sudan<br>Domestic Tax - Juba</p>
            </div>
     
      <div class="col-10">
          <div class="row">
                <h6 style="color: #909090;font-weight:bold;padding-top:15px">DASHBOARD</h6>
                  <div class="col-3" style="background-color:rgb(91, 172, 204);width:23%;height:100px; border-radius:5px;margin-left:14px">
                    <img src="img/sqr.png" alt="" id="dash-icon">
                    <h3 style="color:#fff;font-family:arial;font-weight:bold;padding-top:20px">5</h3>
                    <h6 style="color:#fff;font-family:arial;font-weight:bold;padding-top:10px">Divisions</h6>
                  </div>
                  <div class="col-3" style="background-color:rgb(75, 155, 75);width:23%;height:100px; border-radius:5px;margin-left:14px">
                    <img src="img/dp.png" alt="" id="dash-icon">
                    <h3 style="color:#fff;font-family:arial;font-weight:bold;padding-top:20px">15</h3>
                    <h6 style="color:#fff;font-family:arial;font-weight:bold;padding-top:10px">Departments</h6>
                  </div>
                  <div class="col-3" style="background-color:rgb(238, 171, 26);width:23%;height:100px; border-radius:5px;margin-left:14px">
                    <img src="img/empl.png" alt="" id="dash-icon">
                    <h3 style="color:#fff;font-family:arial;font-weight:bold;padding-top:20px">184</h3>
                    <h6 style="color:#fff;font-family:arial;font-weight:bold;padding-top:10px">Employees</h6>
                  </div>
                  <div class="col-3" style="background-color:rgb(175, 44, 70);width:23%;height:100px; border-radius:5px;margin-left:14px">
                    <img src="img/ss.png" alt="" id="dash-icon">
                    <h3 style="color:#fff;font-family:arial;font-weight:bold;padding-top:20px">7</h3>
                    <h6 style="color:#fff;font-family:arial;font-weight:bold;padding-top:10px">Leaves</h6>
                  </div>
                  
                  <div class="col-3" style="background-color:rgb(73, 145, 173);width:23%;height:35px; border-radius:5px;margin-left:14px">
                  <P style="color:#000;font-family:arial;font-size: 11px;padding-top:10px;text-align:center">NRA-CSD</P>
                  </div>
                  <div class="col-3" style="background-color:rgb(65, 136, 65);width:23%;height:35px; border-radius:5px;margin-left:14px">
                  <P style="color:#000;font-family:arial;font-size: 11px;padding-top:10px;text-align:center">NRA-CSD</P>
                  </div>
                  <div class="col-3" style="background-color:rgb(224, 160, 22);width:23%;height:35px; border-radius:5px;margin-left:14px">
                  <P style="color:#000;font-family:arial;font-size: 11px;padding-top:10px;text-align:center">NRA-CSD</P>
                  </div>
                  <div class="col-3" style="background-color:rgb(160, 40, 64);width:23%;height:35px; border-radius:5px;margin-left:14px">
                  <P style="color:#000;font-family:arial;font-size: 11px;padding-top:10px;text-align:center">NRA-CSD</P>
                  </div>
                </div><br>
                <div class="col-6">
                    <p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7951.290025630601!2d31.5665458!3d4.8308697!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x171281447a85ac21%3A0x6a924d6cf30af24a!2sNational%20Revenue%20Authority!5e0!3m2!1sen!2ske!4v1635858447793!5m2!1sen!2ske" width="1030" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </p>
                </div>
</div>
</div>
  </div>
   </body>
</html>