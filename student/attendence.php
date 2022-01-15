<?php 
include 'connect.php';

$id=$_SESSION['usn'];
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
  <a class="nav-link" href="stumain.php" align="center">Dashboard</a>
  <a class="nav-link" href="stumarks.php"align="center">My Marks</a>
  
  <a class="nav-link" href="attendence.php"align="center">My Attendence</a>
  <a class="nav-link" href="student.php"align="center">Log Out</a>
  
</div>
  <div class="container">
  <nav class="navbar navbar-light my-5" style="background:rgb(243,234,243);">
  <span class="navbar-brand mb-2 h1">Attendance</span>
</nav>
  
    <?php
        $id = $_SESSION['usn'];
        $sql1 = "select * FROM `attendence` WHERE USN='$id'";
        $result = mysqli_query($con, $sql1);
       
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $usn = $row['USN'];
            $name = $row['stud_name'];
            $sub1 = $row['CS51'];
            $sub2 = $row['CS52'];
            $sub3 = $row['CS53'];
            $sub4 = $row['CS54'];
            $sub5 = $row['CS55'];
            $sub6 = $row['CS56'];
          }
        }



        ?>
    
    <table class="table">
      <thead>
        <tr>
          <th scope="col">USN: <?php echo $usn ?></th>
          <th scope="col">NAME: <?php echo $name ?></th>
</tr>
      </thead>
      <thead>
          <tr>
          <th scope="col">#</th>
          <th scope="col">TEST 1</th>
          <th scope="col">TEST 2</th>
          <th scope="col">TEST 3</th>
          <th scope="col">final</th>
</tr>
      </thead>
      <tr><th scope="col">18CS51</th><td><?php echo $sub1 ?></td></tr>
      <tr><th scope="col">18CS52</th><td><?php echo $sub2 ?></td></tr>
      <tr><th scope="col">18CS53</th><td><?php echo $sub3 ?></td></tr>
      <tr><th scope="col">18CS54</th><td><?php echo $sub4 ?></td></tr>
      <tr><th scope="col">18CS55</th><td><?php echo $sub5 ?></td></tr>
      <tr><th scope="col">18CS56</th><td><?php echo $sub6 ?></td></tr>

          

         
     
          
       
      
        <!--php script-->
       
      
    </table>
  </div>
  <style type="text/css">
    
    .stu{
        float:right;
    }
    .container{
      position: absolute;
      top:5%;
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
  color:white;
  display: block;
}


.sidenav a:hover {
  color: #f1f1f1;
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
  </section>
</body>

</html>