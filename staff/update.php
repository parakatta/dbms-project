

<?php
include 'connect.php';
$subcode=$_SESSION['sub'];
$id = $_GET['updateid'];
$sql1 = "SELECT * FROM `marks` WHERE USN='$id'";
$result = mysqli_query($con, $sql1);
$row = mysqli_fetch_assoc($result);
$usn = $row['USN'];
$name = $row['stud_name'];
$sub = $row[''.$subcode.''];
//$sub1 = $row['18CS51'];

/* $sub3 = $row['18CS53'];
$sub4 = $row['18CS54'];
$sub5 = $row['18CS55'];
$sub6 = $row['18CS56']; */

if (isset($_POST['submit'])) {
    $usn = $_POST['USN'];
    $name = $_POST['name'];
    $sub = $_POST['subc'];
   /*  $sub2 = $_POST['18CS52'];
    $sub3 = $_POST['18CS53'];
    $sub4 = $_POST['18CS54'];
    $sub5 = $_POST['18CS55'];
    $sub6 = $_POST['18CS56']; */


    $sql2 = "UPDATE `marks` SET USN='$usn',stud_name='$name',
    ".$subcode."=$sub WHERE USN='$id'";
    /* 18CS52=$sub2,18CS53=$sub3,18CS54=$sub4,18CS55=$sub5,18CS56=$sub6 */
    $result = mysqli_query($con, $sql2);
    if ($result) {
        header('location:page.php');
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
       <!--  <div class="card" style="width:500px; height:400px;"> -->
       <div class="card"style="position:absolute;width:700px; height:400px;left:20%;">
       <article class="card-body">
	<h4 class="card-title text-center mb-4 mt-1">Update</h4>
	<hr>
        <form method="post">
            <div class="form-group col-6">
                <label>USN</label><br>
                <input type="text" class="form-control" placeholder="Enter your USN" name="USN" autocomplete="off" value=<?php echo $usn; ?>>
            </div><br>
            <div class="form-group col-6">
                <label>NAME</label><br>
                <input type="text" class="form-control" placeholder="Enter name" name="name" autocomplete="off" value=<?php echo $name; ?>>
            </div><br>
            <div class="form-group col-6">
                <label><?php echo $subcode; ?> MARKS</label><br>
                <input type="text" class="form-control" name="subc" autocomplete="off" value="<?php echo $sub; ?>">
            </div><br>
                
            


           <!--  <div class="form-group col-2">
                <label>18CS52 MARKS</label>
                <input type="text" class="form-control" name="18CS52" autocomplete="off" value=<?php echo $sub2; ?>>
            </div>
            <div class="form-group col-2">
                <label>18CS53 MARKS</label>
                <input type="text" class="form-control" name="18CS53" autocomplete="off" value=<?php echo $sub3; ?>>
            </div>
            <div class="form-group col-2">
                <label>18CS54 MARKS</label>
                <input type="text" class="form-control" name="18CS54" autocomplete="off" value=<?php echo $sub4; ?>>
            </div>
            <div class="form-group col-2">
                <label>18CS55 MARKS</label>
                <input type="text" class="form-control" name="18CS55" autocomplete="off" value=<?php echo $sub5; ?>>
            </div>
            <div class="form-group col-2">
                <label>18CS56 MARKS</label>
                <input type="text" class="form-control " name="18CS56" autocomplete="off" value=<?php echo $sub6; ?>>
            </div> -->


            <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
        </form>
        </article>
    </div>
        </div>
    </div>
  <style>
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
.container{
      position: absolute;
      margin-left:15%;
      top:20%;
      padding: 0px 10px;
      /* margin-left: 160px; 
      padding: 0px 10px; */
    }
    .stu{
        position:absolute;
        top:20%;

      float:left;
      color:white;
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