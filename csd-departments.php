<?php include 'connection/csd-dept.inc.php';?>


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
     
      <div class="col-12">
          <div class="row">
                <h5 style="color: #fff;font-size:px;padding:20px 100px;background:rgb(24, 133, 184)"> Corporate Service<br><span style="font-size:14px;padding-left:10px;margin-top:20px;color:#fff"></span></h5>
           </div>

<form action="" method="POST">
                  <div class="col-md-4" style="float: right; margin-top:10px">
                    <input type="text" name="search" class="form-control" placeholder="Search department by name" style="font-size:13px;border-radius:50px">
                  </div>
                </form>

                <div class="add-btn">
<button class="enquire-btn" data-bs-toggle="modal" data-bs-target="#enquire1" style="padding:5px 50px;border:none;background:rgb(24, 133, 184);border-radius:3px;color:#fff;margin:10px 90px">Add</button>
</div>
            <div class="modal fade" id="enquire1" tabindex="-1" aria-labelledby="enquireLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title text-dark" id="enquireLabel">Add new department by filling the form below.</p>
        <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="connection/csd-add-dept.inc.php" method="post">
        <input type="text" name="dept_name" class="form-control" placeholder="Department Name"><br>
        <input type="text" name="dept_id" class="form-control" placeholder="Department Code"><br>
        <input type="text" name="hod_title" class="form-control" placeholder="HOD Title"><br>
        <input type="text" name="no_staff" class="form-control" placeholder="No. of Staff"><br>
			  <input type="submit" class="verify-btn" name="submit" value="Submit"/>
      </form>
      </div>
    </div>
  </div>
</div>

<table class="table table-hover">
  <thead>
    <tr style="font-size:13px">
      <th>#</th>
      <th>Department-Name</th>
      <th>Code</th>
      <th>HOD-Title</th>
      <th>No. of Staff</th>
      <th>Action</th>
    </tr>
  </thead>
<tbody>
   
  <?php foreach($files as $file):?>
    

    <tr style="font-size:13px">
      <td><?php echo $file['id'];?></td>
      <td><?php echo $file['dept_name'];?></td>
      <td><?php echo $file['dept_id'];?></td>
      <td><?php echo $file['hod_title'];?></td>
      <td style="text-align:center"><?php echo $file['no_staff'];?></td>
      <td><a href="#" class="action-link"><a href="human-resource.php" class="action-link text-primary">View</a></td>
      <td></td>
    </tr>

    <?php endforeach ; ?>

    </tbody>
  </table>
</div>
</div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
   </body>
</html>