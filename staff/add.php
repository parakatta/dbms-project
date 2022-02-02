<?php
include 'connect.php';
if (isset($_POST['submit'])) {
  $usn = $_POST['USN'];
  $name = $_POST['name'];
  $batch = $_POST['batch'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];

  $sql = "insert into `marks`(USN,stud_name) values('$usn','$name')";
  $result1 = mysqli_query($con, $sql) or die(mysqli_error($con));
  if ($result1) {
    $sql1 = "insert into `marks_2`(USN,stud_name) values('$usn','$name')";
    $sql2 = "insert into `marks_3`(USN,stud_name) values('$usn','$name')";
    $sql3 = "insert into `attendence`(USN,stud_name) values('$usn','$name')";
    $sqlquery = "insert into `student`(USN,stud_name,batch,gender,email) values('$usn','$name','$batch','$gender','$email')";

    $result2 = mysqli_query($con, $sql1) or die(mysqli_error($con));
    $result3 = mysqli_query($con, $sql2) or die(mysqli_error($con));
    $result = mysqli_query($con, $sql3) or die(mysqli_error($con));
    $res = mysqli_query($con, $sqlquery);
  }
  if ($res) {
    header('location:allstudents.php');
  } else {
    die(mysqli_error($con));
  }
}
?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" > -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="jquery-3.5.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>DBMS</title>
</head>

<body>
  <div class="sidenav">
    <div class="profile">
      <img src="../css/user.png">
      <h3>STAFF</h3>
      <p>Logged in</p>
      </div>
    <a class="nav-link" href="dashboard.php" align="left"><i class="fa fa-clipboard" style="margin-right:8px;"></i>Dashboard</a>
    <a class="nav-link" href="page.php" align="left"><i class="fa fa-file-text" style="margin-right:8px;"></i>Marks</a>
    <a class="nav-link" href="average.php" align="left"><i class="fa fa-area-chart" style="margin-right:8px;"></i>Average</a>
    <a class="nav-link" href="attendance.php" align="left"><i class="fa fa-check-square-o" style="margin-right:8px;"></i>Attendence</a>
    <a class="nav-link" href="view.php" align="left"><i class="fa fa-eye" style="margin-right:8px;"></i>View All</a>
    <a class="nav-link" href="staff.php" align="left"><i class="fa fa-arrow-left" style="margin-right:8px;"></i>Log Out</a>
  </div>
  <div class="container my-5">
    <div class="card" style="position:absolute;width:700px; height:auto;left:20%;">
      <article class="card-body">
        <h4 class="card-title text-center mb-4 mt-1">Add student</h4>
        <hr>
        <form method="post">
          <div class="form-group col-8">

            <label>USN</label>
            <input type="text" class="form-control" placeholder="Enter your USN" name="USN" autocomplete="off">
          </div>
          <div class="form-group col-8">
            <label>NAME</label>
            <input type="text" class="form-control" placeholder="Enter name" name="name" autocomplete="off">
          </div>
          <div class="form-group col-8">
            <label>BATCH</label>
            <input type="text" class="form-control" placeholder="Enter Batch/Year" name="batch" autocomplete="off">
          </div>
          <div class="form-group col-8">
            <label>GENDER</label>
            <input type="text" class="form-control" placeholder="Enter gender" name="gender" autocomplete="off">
          </div>
          <div class="form-group col-8">
            <label>EMAIL</label>
            <input type="email" class="form-control" placeholder="Enter email" name="email" autocomplete="off">
          </div>


          <button class="btn btn-primary"><a data-toggle="modal" data-target="#addrow">Add</a></button>
          <button type="button" class="btn btn-secondary" name="Cancel"><a href="view.php" class="text-light">Cancel</a></button>
          <div class="modal fade" id="addrow" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle2">Confirm add</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Are you sure you want to add new student? Changes cannot be reversed.
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" name="submit" class="btn btn-primary">Add</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </article>
    </div>
  </div>

  <style type="text/css">
    .container {
      position: absolute;
      margin-left: 15%;
      padding: 0px 10px;
    }

    .sidenav {
      height: 100%;
      width: 240px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #887a92;
      overflow-x: hidden;
      padding-top: 20px;
    }

    /* The navigation menu links */
    .sidenav a {
      padding: 6px 8px 6px 16px;
      text-decoration: none;
      font-size: 25px;
      color: white;
      display: block;
    }


    .sidenav a:hover {
      color: #f1f1f1;
    }

    .stu {
      float: right;
      margin-right: 5px;
    }

    .sidenav .profile {
      margin-bottom: 30px;
      text-align: center;
    }

    .sidenav .profile img {
      display: block;
      width: 100px;
      height: 100px;
      border-radius: 50%;
      margin: 0 auto;
    }

    .sidenav .profile h3 {
      color: #ffffff;
      margin: 10px 0 5px;
    }

    .sidenav .profile p {
      color: rgb(206, 240, 253);
      font-size: 14px;
    }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="jquery-3.5.1.min.js"></script>
</body>

</html>