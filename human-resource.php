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
                <li><a href='csd-departments.php' class="active">Departments</a></li>
                <li><a href='csd-employees.php'>Employees</a></li>
                <li><a href='#'>Attendence</a></li>
                <li><a href='#'>Leave</a></li>
                <li><a href='csd-payroll.php'>Payroll</a></li>
                <li><a href='logout.php' class="signout-link">Signout</a></li>
            </ul>
        </nav>
        </header>
   
        <div class="row" style="padding-top: 71px">
        
            </div>
            
      
  </div>
            <div class="row">
                <div class="col-4">
                    <img src="img/files.jpg" alt="" style="width:420px;height:730px">
                </div>
                <div class="col-7">
                <form action="" method="POST">
                  <div class="col-md-4" style="float: right; margin-top:10px">
                    <input type="text" name="search" class="form-control" placeholder="Search employee by name" style="font-size:13px;border-radius:50px">
                  </div>
                </form>

                    <h5 style="padding-top:20px">HUMAN RESOURCE</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum officiis, eveniet nulla hic iure voluptate! Reiciendis distinctio nulla assumenda quam temporibus sunt obcaecati saepe alias totam quo! Minima, harum modi.</p>
                    <button class="dept-info1">Division<br>Corporate Service</button>
                    <button class="dept-info2">Department Code<br>CSD-105</button>
                    <button class="dept-info3">Number of Staff<br>7</button>
                    <button class="dept-info4">Head of Department Title<br>Assistant Commissioner for Human Resource</button>
                    <h5 style="padding:20px 0">Employee's Details</h5>
                    <div class="card" style="width: 15rem;">
  <img class="card-img-top" src="img/admin.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Employee Name: John Doe</p>
    <p class="card-text">Title: Assistant Commissioner for Human Resource</p>
    <p class="card-text">Email: nan@nra.gov.ss</p>
    <p class="card-text">Tel: +211-923-222-333</p>
  </div>
</div>
            </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
   </body>
</html>