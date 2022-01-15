<?php
include 'connect.php';

$subcode=$_SESSION['sub'];
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
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <!-- <script src="jquery-3.5.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

  <title>Document</title>
</head>

<body>
<section>
  
<!-- <div class="container-left">
  <nav class="navbar navbar-inverse navbar-fixed-left">
    
  </nav>
  </div> -->
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
  <div class="container">
  <nav class="navbar navbar-light my-5" style="margin-left:10px;background:rgb(243,234,243);">
  <span class="navbar-brand mb-2 h1"style="margin-left:10px;">First Internal Marks</span>
</nav>
  <ul class="nav nav-tabs my-5">
      <li class="nav-item active"><a class="nav-link" href="page.php">TEST 1</a></li>
      <li class="nav-item"><a class="nav-link" href="add.php">TEST 2</a></li>
      <li class="nav-item"><a class="nav-link" href="staff.php">TEST 3</a></li>
      
    </ul>
    
    
    
    <table class="table">
      <thead>
        <tr>
          <th scope="col">USN</th>
          <th scope="col">NAME</th>
          <th scope="col"><?php echo $subcode?></th>
          <th scope="col">EDIT</th>
         <!-- <th scope="col">18CS52</th>
          <th scope="col">18CS53</th>
          <th scope="col">18CS54</th>
          <th scope="col">18CS55</th>
          <th scope="col">18CS56</th>
          --->
        </tr>
      </thead>
      <tbody>
        <!--php script-->
        <?php
        $sql = "select * from `marks`";
        $result = mysqli_query($con, $sql);
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

         

            echo '
          <tr>
      <th scope="row">' . $usn . '</th>
      
      <td class="row_id">' . $name . '</td>';
      if($subcode=='18CS51'){
        echo '<td>' . $sub1 . '</td> ';
      }
      else if($subcode=='18CS52'){
        echo '<td>' . $sub2 . '</td>';
      }
      else if($subcode=='18CS53'){
        echo '<td>' . $sub3 . '</td>';
      }
      else if($subcode=='18CS54'){
        echo '<td>' . $sub4 . '</td>';
      }
      else if($subcode=='18CS55'){
        echo '<td>' . $sub5 . '</td>';
      }
      else if($subcode=='18CS56'){
        echo '<td>' . $sub6 . '</td>';
      }
      
      /* <td>' . $sub2 . '</td>
      <td>' . $sub3 . '</td>
      <td>' . $sub4 . '</td>
      <td>' . $sub5 . '</td>
      <td>' . $sub6 . '</td> */
    
      echo '<td>
      
      <button class="btn btn-primary" data-toggle="modal" data-target="#updaterow">Update</button>
      <button class="btn btn-danger" data-toggle="modal" data-target="#deleterow">Delete</button>
 
  </td> </tr>';
   
          }
          
        }
       


        ?>
        <div class="modal fade" id="deleterow" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle1">Confirm delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this record?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" ><a href="delete.php?deleteid=<?php echo $usn;?>" class="text-light">Delete</a></button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="updaterow" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Confirm Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to update this record? Current data will be lost.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" ><a href="update.php?updateid=<?php echo $usn;?>" class="text-light">Update</a></button>
      </div>
    </div>
  </div>
</div>
        
      </tbody>
    </table>
  </div>
  <style type="text/css">
    .container{
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
  
  </section>
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="jquery-3.5.1.min.js"></script> 
  <script>
    /* $(document).ready(function(){
      $('#update_btn').click(function(e){
        e.preventDefault(); */
        /* var row_id=$(this).data('id');
        $('#confirm_btn').data('id',row_id); */
       /*  var row_id=$(this).closest('tr').find('.row_id').text();
        console.log(row_id); */
    // $('#exampleModalCenter').modal(focus='true');
     /*  });
      $('#confirm_btn').click(function(e){
        e.preventDefault();
        var row_id=$(this).data('id');
        $.ajax({
          url:"/update.php?updateid="+row_id
        });
      });
     
    }); */
  </script>
</body>

</html>