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
   
        <div class="row" style="padding-top: 71px">
        
            </div>
            
      <div class="col-12">
          <div class="row">
                <h5 style="color: #fff;font-size:;padding:20px 100px;background:rgb(24, 133, 184)"> Corporate Service<br><span style="font-size:14px;padding-left:10px;margin-top:20px;color:#fff"></span></h5>
            </div>

            <form action="" method="POST">
                  <div class="col-md-4" style="float: right; margin-top:10px">
                    <input type="text" name="search" class="form-control" placeholder="Search employee by name" style="font-size:13px;border-radius:50px">
                  </div>
                </form>
            
                <a href="employee-form.php"><button style="padding:5px 50px;border:none;background:rgb(24, 133, 184);border-radius:3px;color:#fff;margin:10px 90px">Add</button></a>

        <div class="col-12">
            <div class="row">
              <div class="col-6" style="background:#fff;box-shadow: 5px 5px 5px #d9d9d9;font-size:13px;margin-bottom:5px;border-right:2px solid #bebebe">
              <img src="img/bg.svg" alt="" style="height:100px;width:100px;float:left;border-radius:5px;margin-top:8px;margin-right:10px;margin-left:40px">
                <h6 style="font-size:12px;padding-top:10px">Jane Doe</h6>
                <p>IT Officer<br><span style="border-left:5px solid orange;padding-left:10px">Department ICT, Division Headquarters</span><br><img src="img/email.png" alt="" style="width:20px;height:20px"> jane@gmail.com<br><img src="img/phones.png" alt="" style="width:20px;height:20px"> +211 (0) 9211 292 229<a href="#" style="float:right;padding-right:25px">Profile</a></p>
            </div>
            <div class="col-6" style="background:#fff;box-shadow: 5px 5px 5px #d9d9d9;font-size:13px;margin-bottom:5px">
            <img src="img/bg.svg" alt="" style="height:100px;width:100px;float:left;border-radius:5px;margin-top:8px;margin-right:10px;margin-left:40px">
                <h6 style="font-size:12px;padding-top:10px">John Doe</h6>
                <p>IT Officer<br><span style="border-left:5px solid skyblue;padding-left:10px">Department ICT, Division Headquarters</span><br><img src="img/email.png" alt="" style="width:20px;height:20px"> john@gmail.com<br><img src="img/phones.png" alt="" style="width:20px;height:20px"> +211 (0) 9211 292 229<a href="#" style="float:right;padding-right:25px">Profile</a></p>
            </div>
            <div class="col-6" style="background:#fff;box-shadow: 5px 5px 5px #d9d9d9;font-size:13px;margin-bottom:5px;border-right:2px solid #bebebe">
            <img src="img/bg.svg" alt="" style="height:100px;width:100px;float:left;border-radius:5px;margin-top:8px;margin-right:10px;margin-left:40px">
                <h6 style="font-size:12px;padding-top:10px">Jane Doe</h6>
                <p>IT Officer<br><span style="border-left:5px solid skyblue;padding-left:10px">Department ICT, Division Headquarters</span><br><img src="img/email.png" alt="" style="width:20px;height:20px"> john@gmail.com<br><img src="img/phones.png" alt="" style="width:20px;height:20px"> +211 (0) 9211 292 229 <a href="#" style="float:right;padding-right:25px">Profile</a></p>
            </div>
            <div class="col-6" style="background:#fff;box-shadow: 5px 5px 5px #d9d9d9;font-size:13px;margin-bottom:5px">
            <img src="img/bg.svg" alt="" style="height:100px;width:100px;float:left;border-radius:5px;margin-top:8px;margin-right:10px;margin-left:40px">
                <h6 style="font-size:12px;padding-top:10px">John Doe</h6>
                <p>IT Officer<br><span style="border-left:5px solid orange;padding-left:10px">Department ICT, Division Headquarters</span><br><img src="img/email.png" alt="" style="width:20px;height:20px"> john@gmail.com<br><img src="img/phones.png" alt="" style="width:20px;height:20px"> +211 (0) 9211 292 229 <a href="#" style="float:right;padding-right:25px">Profile</a></p>
            </div>
            <div class="col-6" style="background:#fff;box-shadow: 5px 5px 5px #d9d9d9;font-size:13px;margin-bottom:5px;border-right:2px solid #bebebe">
            <img src="img/bg.svg" alt="" style="height:100px;width:100px;float:left;border-radius:5px;margin-top:8px;margin-right:10px;margin-left:40px">
                <h6 style="font-size:12px;padding-top:10px">Jane Doe</h6>
                <p>IT Officer<br><span style="border-left:5px solid red;padding-left:10px">Department ICT, Division Headquarters</span><br><img src="img/email.png" alt="" style="width:20px;height:20px"> jane@gmail.com<br><img src="img/phones.png" alt="" style="width:20px;height:20px"> +211 (0) 9211 292 229 <a href="#" style="float:right;padding-right:25px">Profile</a></p>
            </div>
            <div class="col-6" style="background:#fff;box-shadow: 5px 5px 5px #d9d9d9;font-size:13px;margin-bottom:5px">
            <img src="img/bg.svg" alt="" style="height:100px;width:100px;float:left;border-radius:5px;margin-top:8px;margin-right:10px;margin-left:40px">
                <h6 style="font-size:12px;padding-top:10px">John Doe</h6>
                <p>IT Officer<br><span style="border-left:5px solid orange;padding-left:10px">Department ICT, Division Headquarters</span><br><img src="img/email.png" alt="" style="width:20px;height:20px"> jane@gmail.com<br><img src="img/phones.png" alt="" style="width:20px;height:20px"> +211 (0) 9211 292 229 <a href="#" style="float:right;padding-right:25px">Profile</a></p>
            </div>
            <div class="col-6" style="background:#fff;box-shadow: 5px 5px 5px #d9d9d9;font-size:13px;margin-bottom:5px;border-right:2px solid #bebebe">
            <img src="img/bg.svg" alt="" style="height:100px;width:100px;float:left;border-radius:5px;margin-top:8px;margin-right:10px;margin-left:40px">
                <h6 style="font-size:12px;padding-top:10px">Jane Doe</h6>
                <p>IT Officer<br><span style="border-left:5px solid orange;padding-left:10px">Department ICT, Division Headquarters</span><br><img src="img/email.png" alt="" style="width:20px;height:20px"> john@gmail.com<br><img src="img/phones.png" alt="" style="width:20px;height:20px"> +211 (0) 9211 292 229 <a href="#" style="float:right;padding-right:25px">Profile</a></p>
            </div>
            <div class="col-6" style="background:#fff;box-shadow: 5px 5px 5px #d9d9d9;font-size:13px;margin-bottom:5px">
            <img src="img/bg.svg" alt="" style="height:100px;width:100px;float:left;border-radius:5px;margin-top:8px;margin-right:10px;margin-left:40px">
                <h6 style="font-size:12px;padding-top:10px">John Doe</h6>
                <p>IT Officer<br><span style="border-left:5px solid red;padding-left:10px">Department ICT, Division Headquarters</span><br><img src="img/email.png" alt="" style="width:20px;height:20px"> john@gmail.com<br><img src="img/phones.png" alt="" style="width:20px;height:20px"> +211 (0) 9211 292 229 <a href="#" style="float:right;padding-right:25px">Profile</a></p>
            </div>
        </div>
        <div style="text-align:center;font-size:14px;color:#666666;margin:20px 0">
        <a href=""><img src="img/backward.png" alt="" style="height:20px"></a>1 / 25<a href=""><img src="img/forward.png" alt="" style="height:20px"></a>
        </div>
</div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
   </body>
</html>