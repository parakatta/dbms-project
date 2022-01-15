<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $usn = $_POST['USN'];
    $name = $_POST['name'];
    /* $sub1 = $_POST['18CS51'];
    $sub2 = $_POST['18CS52'];
    $sub3 = $_POST['18CS53'];
    $sub4 = $_POST['18CS54'];
    $sub5 = $_POST['18CS55'];
     ,18CS51,18CS52,18CS53,18CS54,18CS55,18CS56) 
    $sub6 = $_POST['18CS56']; */

    $sql = "insert into `marks` (USN,stud_name)
    values('$usn','$name')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:view.php');
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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" >

    <title>DBMS</title>
</head>

<body>
<div class="sidenav">
<div class="profile">
                <img src="../css/user.png">
                <h3>STAFF</h3>
                <p>Logged in</p>
</div>
<a class="nav-link" href="dashboard.php" align="center">Dashboard</a>
  <a class="nav-link" href="page.php"align="center">Marks</a>
  <a class="nav-link" href="average.php" align="center">Average</a>
  <a class="nav-link" href="attendance.php" align="center">Attendence</a>
  <a class="nav-link" href="view.php" align="center">View All</a>
  <a class="nav-link" href="staff.php"align="center">Log Out</a>
</div>
    <div class="container my-5">
    <div class="card"style="position:absolute;width:700px; height:auto;left:20%;">
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
            <!-- <div class="form-group col-8">
                <label>18CS51 MARKS</label>
                <input type="text" class="form-control" name="18CS51" autocomplete="off">
            </div>
            <div class="form-group col-8">
                <label>18CS52 MARKS</label>
                <input type="text" class="form-control" name="18CS52" autocomplete="off">
            </div>
            <div class="form-group col-2">
                <label>18CS53 MARKS</label>
                <input type="text" class="form-control" name="18CS53" autocomplete="off">
            </div>
            <div class="form-group col-2">
                <label>18CS54 MARKS</label>
                <input type="text" class="form-control" name="18CS54" autocomplete="off">
            </div>
            <div class="form-group col-2">
                <label>18CS55 MARKS</label>
                <input type="text" class="form-control" name="18CS55" autocomplete="off">
            </div>
            <div class="form-group col-2">
                <label>18CS56 MARKS</label>
                <input type="text" class="form-control " name="18CS56" autocomplete="off">
            </div> -->


            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        </article>
    </div>
    </div>
 
<style type="text/css">
    .container{
      position: absolute;
      margin-left:15%;
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
  color:white;
  display: block;
}


.sidenav a:hover {
  color: #f1f1f1;
}
    .stu{
      float:right;
      margin-right: 5px;
    }
    .sidenav  .profile{
    margin-bottom: 30px;
    text-align: center;
}

.sidenav  .profile img{
    display: block;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin: 0 auto;
}
.sidenav  .profile h3{
    color: #ffffff;
    margin: 10px 0 5px;
}

.sidenav  .profile p{
    color: rgb(206, 240, 253);
    font-size: 14px;
}
 </style>
</body>

</html>