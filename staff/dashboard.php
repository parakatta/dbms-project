<?php
include 'connect.php';
$subcode = $_SESSION['sub'];
$mes = "";
if ($subcode == '18CS51') {
  $mes = "Management and Entrepreneurship in IT Industry";
} else if ($subcode == '18CS52') {
  $mes = "Computer Networks and Security";
} else if ($subcode == '18CS53') {
  $mes = "Database Management System";
} else if ($subcode == '18CS54') {
  $mes = "Automata Theory and Computability";
} else if ($subcode == '18CS55') {
  $mes = "Application Development in Python";
} else if ($subcode == '18CS56') {
  $mes = "Unix Programming";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  <div class="container">
    <nav class="navbar navbar-light my-5" style="background:rgb(243,234,243);">
      <span class="navbar-brand mb-2 h1"><?php echo $subcode . " " . $mes; ?></span>
    </nav>
    <div class="container py-5">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm" style="width: 18rem; height:14rem;background:#887A92;">
            <div class="card-body">
              <h5 class="card-title" style="color:white;">Number of Students</h5>
              <h1 style="color:white;font-size:6rem;"><?php $rec = mysqli_query($con, 'CALL `getCount`();');
                                                      $res = mysqli_fetch_array($rec);
                                                      echo $res[0]; ?></h1>

            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm" style="width: 18rem; height:14rem; background:#887A92;">
            <div class="card-body">
              <h5 class="card-title"><a class="nav-link" style="color:white;" href="allstudents.php"><i class="fa fa-address-card" style="margin-right:8px;" ></i>Student Info</a></h5>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm" style="width: 18rem; height:14rem; background:#887A92;">
            <div class="card-body">
              <h5 class="card-title"><a class="nav-link" style="color:white;" href="announcements.php"><i class="fa fa-bullhorn fa-lg" style="margin-right:8px;" ></i>Announcements</a></h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<style type="text/css">
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
    color:lightgrey;
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

</html>