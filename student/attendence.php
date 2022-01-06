<?php
include 'connect.php';
/*if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $password=$_POST['password'];

}*/

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
  
  <div class="container-left">
  <nav class="navbar navbar-inverse navbar-fixed-left">
    
  </nav>
  </div>
  <div class="container">
   
  <span class="navbar-text">
    <button class="btn btn-primary my-5 stu "><a href="stumain.php" class="text-light">Back</a></button></span>
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
    .container{
      position: absolute;
      left:15%;
    }
    
    .navbar-fixed-left{
      width:240px;
      position:fixed;
      border-radius:0;
      height: 100%;
      background-color:#887A92 ;
    }
    .stu{
        float:right;
    }
   
   
   
    </style>
  </section>
</body>

</html>