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
    
    <button class="btn btn-primary my-5 stu"><a href="page.php" class="text-light">Go Back</a>
    </button></span>
    
    <table class="table">
      <thead>
        <tr>
          <th scope="col">USN</th>
          <th scope="col">NAME</th>
          <th scope="col">18CS51</th>
          <th scope="col">18CS52</th>
          <th scope="col">18CS53</th>
          <th scope="col">18CS54</th>
          <th scope="col">18CS55</th>
          <th scope="col">18CS56</th>
          <th scope="col">EDIT</th>
        </tr>
      </thead>
      <tbody>
        <!--php script-->
        <?php
        $sql = "select * from `attendence`";
        $result = mysqli_query($con, $sql);
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


            echo '
          <tr>
      <th scope="row">' . $usn . '</th>
      <td>' . $name . '</td>
      <td>' . $sub1 . '</td>
      <td>' . $sub2 . '</td>
      <td>' . $sub3 . '</td>
      <td>' . $sub4 . '</td>
      <td>' . $sub5 . '</td>
      <td>' . $sub6 . '</td>

      <td>
     <button class="btn btn-primary"><a href="updateAtt.php?updateid=' . $usn . '" class="text-light">Update</a></button>
     <button class="btn btn-danger"><a href="deleteAtt.php?deleteid=' . $usn . '" class="text-light">Delete</a></button>

 </td>
    </tr>';
          }
        }



        ?>
      </tbody>
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
      background-color: #887A92;
    }
    /*.navbar-fixed-left .navbar-nav{
      float:none;
      width:139px;
    }*/

    .stu{
      float:right;
      margin-right: 5px;
    }
  
   
   
    </style>
  </section>

</body>

</html>