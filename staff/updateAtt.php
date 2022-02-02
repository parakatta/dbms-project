<?php
include 'connect.php';
$subcode = $_SESSION['sub'];
$subs = substr($subcode, -4);
$id = $_GET['updateid'];
$sql1 = "SELECT * FROM `attendence` WHERE USN='$id'";
$result = mysqli_query($con, $sql1);
$row = mysqli_fetch_assoc($result);
$usn1 = $row['USN'];
$name1 = $row['stud_name'];
$subb = $row['' . $subs . ''];
if (isset($_POST['submit'])) {
  $usn = $_POST['USN'];
  $name = $_POST['name'];
  $subb = $_POST['subc'];
  $sql2 = "update attendence SET USN='$usn',stud_name='$name',`" . $subs . "`=$subb WHERE USN='$id'";
  $result = mysqli_query($con, $sql2);
  if ($result) {
    header('location:attendance.php');
  } else {
    die(mysqli_error($con));
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
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
    <div class="card" style="position:absolute;width:700px; height:400px;left:20%;">
      <article class="card-body">
        <h4 class="card-title text-center mb-4 mt-1">Update</h4>
        <hr>
        <form method="post">
          <div class="form-group col-6">
            <label>USN</label><br>
            <input type="text" class="form-control" placeholder="Enter your USN" name="USN" autocomplete="off" value=<?php echo $usn1; ?>>
          </div><br>
          <div class="form-group col-6">
            <label>NAME</label><br>
            <input type="text" class="form-control" placeholder="Enter name" name="name" autocomplete="off" value=<?php echo $name1; ?>>
          </div><br>
          <div class="form-group col-6">
            <label><?php echo $subcode; ?> ATTENDANCE</label><br>
            <input type="text" class="form-control" name="subc" autocomplete="off" value="<?php echo $subb; ?>">
          </div><br>
          <button class="btn btn-primary "><a data-toggle="modal" data-target="#attrow">Submit</a></button>
          <button type="button" class="btn btn-secondary " name="Cancel"><a href="attendance.php" class="text-light">Cancel</a></button>
          <div class="modal fade" id="attrow" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle3" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle3">Confirm Update</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Are you sure you want to update the attendance?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" name="submit" class="btn btn-primary">Update</button>
                </div>
              </div>
            </div>
          </div>
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
      color: white;
      display: block;
    }


    .sidenav a:hover {
      color: #f1f1f1;
    }

    .container {
      position: absolute;
      margin-left: 15%;
      top: 20%;
      padding: 0px 10px;
    }

    .stu {
      position: absolute;
      top: 20%;

      float: left;
      color: white;
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