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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Document</title>
</head>

<body>
  <section>
    <div class="sidenav">
      <div class="profile">
        <img src="../css/user.png">
        <h3><?php echo $id; ?></h3>
        <p>Logged in</p>
      </div>
      <a class="nav-link" href="stumain.php" align="left"><i class="fa fa-clipboard" style="margin-right:8px;"></i>Dashboard</a>
      <a class="nav-link" href="stumarks.php" align="left"><i class="fa fa-file-text" style="margin-right:8px;"></i>My Marks</a>
      <a class="nav-link" href="attendence.php" align="left"><i class="fa fa-check-square-o" style="margin-right:8px;"></i>My Attendence</a>
      <a class="nav-link" href="student.php" align="left"><i class="fa fa-arrow-left" style="margin-right:8px;"></i>Log Out</a>
    </div>
    <div class="container">
      <nav class="navbar navbar-light my-5" style="background:rgb(243,234,243);">
        <span class="navbar-brand mb-2 h1">Internal marks</span>
      </nav>
      <?php
      $id = $_SESSION['usn'];
      $sql1 = "select * FROM `marks`,`marks_2`,`marks_3` WHERE marks.USN='$id' and marks_2.USN='$id' and marks_3.USN='$id'";
      $result = mysqli_query($con, $sql1);

      if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
          $usn = $row['USN'];
          $name = $row['stud_name'];
          $sub1 = $row['18CS51'];
          $sub2 = $row['18CS52'];
          $sub3 = $row['18CS53'];
          $sub4 = $row['18CS54'];
          $sub5 = $row['18CS55'];
          $sub6 = $row['18CS56'];
          $usn2 = $row['USN'];
          $name2 = $row['stud_name'];
          $sub21 = $row['18CS51_2'];
          $sub22 = $row['18CS52_2'];
          $sub23 = $row['18CS53_2'];
          $sub24 = $row['18CS54_2'];
          $sub25 = $row['18CS55_2'];
          $sub26 = $row['18CS56_2'];
          $usn3 = $row['USN'];
          $name3 = $row['stud_name'];
          $sub31 = $row['18CS51_3'];
          $sub32 = $row['18CS52_3'];
          $sub33 = $row['18CS53_3'];
          $sub34 = $row['18CS54_3'];
          $sub35 = $row['18CS55_3'];
          $sub36 = $row['18CS56_3'];
        }
      } else {
        echo 'notworking';
      }
      if ($sub1 < 22 || $sub2 < 22 || $sub3 < 22 || $sub4 < 22 || $sub5 < 22 || $sub6 < 22) {
        echo '<h4 class="red">You have less marks in one of the subjects!</h4>
          <small class=red>* less than 22 </small>';
      }
      ?>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">USN: <?php echo $usn ?></th>
            <th scope="col">NAME: <?php echo $name ?></th>
          </tr>
        </thead>
        <h4 class="red"></h4>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">TEST 1</th>
            <th scope="col">TEST 2</th>
            <th scope="col">TEST 3</th>
          </tr>
        </thead>
        <tr class="err">
          <th scope="col">18CS51</th>
          <td><?php echo $sub1 ?></td>
          <td><?php echo $sub21 ?></td>
          <td><?php echo $sub31 ?></td>
        </tr>
        <tr>
          <th scope="col">18CS52</th>
          <td><?php echo $sub2 ?></td>
          <td><?php echo $sub22 ?></td>
          <td><?php echo $sub32 ?></td>
        </tr>
        <tr>
          <th scope="col">18CS53</th>
          <td><?php echo $sub3 ?></td>
          <td><?php echo $sub23 ?></td>
          <td><?php echo $sub33 ?></td>
        </tr>
        <tr>
          <th scope="col">18CS54</th>
          <td><?php echo $sub4 ?></td>
          <td><?php echo $sub24 ?></td>
          <td><?php echo $sub34 ?></td>
        </tr>
        <tr class="err">
          <th scope="col">18CS55</th>
          <td id="s5"><?php echo $sub5 ?></td>
          <td><?php echo $sub25 ?></td>
          <td><?php echo $sub35 ?></td>
        </tr>
        <tr>
          <th scope="col">18CS56</th>
          <td><?php echo $sub6 ?></td>
          <td><?php echo $sub26 ?></td>
          <td><?php echo $sub36 ?></td>
        </tr>
      </table>
    </div>
    <style type="text/css">
      .container {
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

      .stu {
        float: right;
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

      .suberr {
        background: red;
      }

      .red {
        color: red;
      }
    </style>
  </section>
</body>

</html>