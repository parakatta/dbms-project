<?php
include 'connect.php';
$id = $_SESSION['usn'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="sidenav">
    <div class="profile">
      <img src="../css/user.png">
      <h3><?php echo $id; ?></h3>
      <p>Logged in</p>
    </div>
    <a class="nav-link" href="stumain.php" align="left"><i class="fa fa-clipboard" style="margin-right:8px;" ></i>Dashboard</a>
    <a class="nav-link" href="stumarks.php" align="left"><i class="fa fa-file-text" style="margin-right:8px;" ></i>My Marks</a>
    <a class="nav-link" href="attendence.php" align="left"><i class="fa fa-check-square-o" style="margin-right:8px;" ></i>My Attendence</a>
    <a class="nav-link" href="student.php" align="left"><i class="fa fa-arrow-left" style="margin-right:8px;" ></i>Log Out</a>
  </div>
  <div class="container two">
    <nav class="navbar navbar-light " style="background:rgb(243,234,243);">
      <span class="navbar-brand mb-2 h1">Welcome <?php echo $id;  ?></span>
    </nav>
    <div class="container py-5">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm" style="width: 18rem; height:14rem;background:#887A92;">
            <div class="card-body">
              <h5 class="card-title"><a class="nav-link" style="color:white;" href="stumarks.php?id=" .$id.><i class="fa fa-line-chart fa-lg" style="margin-right:8px;"></i>My marks</a></h5>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mb-4 shadow-sm" style="width: 18rem; height:14rem; background:#887A92;">
            <div class="card-body">
              <h5 class="card-title"><a class="nav-link" style="color:white;" href="attendence.php"><i class="fa fa-check-square-o" style="margin-right:8px;"></i>My attendence</a></h5>
            </div>
          </div>
        </div>
      </div>
    </div><br>
    <nav class="navbar navbar-light " style="margin-top:-5%;margin-left:10px;margin-bottom:30px;background:rgb(243,234,243);">
      <span class="navbar-brand mb-2 h1" style="margin-left:10px;">Announcements</span>
    </nav><br>
    <?php
    $sql = "select * from `announcement`";
    $result = mysqli_query($con, $sql);
    if ($result) {
      while ($row = mysqli_fetch_assoc($result)) {
        /* $id=$row['id']; */
        $su1 = $row['18CS51_A'];
        $su2 = $row['18CS52_A'];
        $su3 = $row['18CS53_A'];
        $su4 = $row['18CS54_A'];
        $su5 = $row['18CS55_A'];
        $su6 = $row['18CS56_A'];
        if($su1!=null){ echo '<div class="card"><div class="card-body"><h6>18CS51</h6>' . $su1 . '</div></div><br>';}
        if($su2!=null){echo '<div class="card">  <div class="card-body"><h6>18CS52</h6>' . $su2 . '</div></div><br>';}            
        if($su3!=null){echo '<div class="card">  <div class="card-body"><h6>18CS53</h6>' . $su3 . '</div></div><br>';}
        if($su4!=null){echo '<div class="card">  <div class="card-body"><h6>18CS54</h6>' . $su4 . '</div></div><br>';}
        if($su5!=null){echo '<div class="card">  <div class="card-body"><h6>18CS55</h6>' . $su5 . '</div></div><br>';}
        if($su6!=null){echo '<div class="card">  <div class="card-body"><h6>18CS56</h6>' . $su6 . '</div></div><br>';}
             
      }
    }
    ?>
  </div>
  <style>
    .two {
      position: absolute;
      top: 5%;
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
</body>

</html>