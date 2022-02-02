<?php
include 'connect.php';
$subcode = $_SESSION['sub'];
$tab2 = "_2";
$subcod = $subcode . $tab2;
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <!--   <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Document</title>
</head>

<body>
  <section>
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
      <nav class="navbar navbar-light my-5" style="margin-left:10px;background:rgb(243,234,243);">
        <span class="navbar-brand mb-2 h1" style="margin-left:10px;">Second Internal Marks</span>
      </nav>
      <ul class="nav nav-tabs my-5">
        <li class="nav-item"><a class="nav-link" href="page.php">TEST 1</a></li>
        <li class="nav-item active"><a class="nav-link" href="page2.php">TEST 2</a></li>
        <li class="nav-item"><a class="nav-link" href="page3.php">TEST 3</a></li>

      </ul>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">USN</th>
            <th scope="col">NAME</th>
            <th scope="col"><?php echo $subcode ?></th>
            <th scope="col">EDIT</th>
          </tr>
        </thead>
        <tbody>
          <!--php script-->
          <?php
          $sql = "SELECT * from `marks_2` ";
          $result = mysqli_query($con, $sql);
          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              $usn = $row['USN'];
              $name = $row['stud_name'];
              $sub1 = $row[''.$subcod.''];
             
              echo '
          <tr>
      <th scope="row">' . $usn . '</th>
      <td class="row_id">' . $name . '</td>
      <td class="row_id">' . $sub1 . '</td>
      <td>
      <button class="btn btn-primary update_btn" type="button"  data-target="#updaterow">Update</button>
      <button class="btn btn-danger delete_btn" type="button"  data-target="#deleterow">Delete</button>
 
  </td> </tr>
  ';
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
                <form method="post" action="delete2.php">
                  <div class="modal-body">
                    <input type="hidden" name="delete_id" id="delete_id" />
                    <h6>Are you sure you want to delete this record?</h6>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="deleteid">Delete</a></button>
                  </div>
                </form>
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
                <form id="formid" method="post" action="">
                  <div class="modal-body">
                    <input type="hidden" name="update_id" id="update_id" />
                    <h6>Are you sure you want to update this record? Current data will be lost.</h6>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="updateid">Update</a></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </tbody>
      </table>
    </div>
    <style type="text/css">
      .container {
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
        color: white;
        display: block;
      }


      .sidenav a:hover {
        color: #f1f1f1;
      }

      .stu {
        float: right;
        margin-right: 5px;
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
  </section>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('.delete_btn').on('click', function() {
        $('#deleterow').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("th").map(function() {
          return $(this).text();

        }).get();
        console.log(data);
        $('#delete_id').val(data[0]);
      });
    });
    $(document).ready(function() {
      $('.update_btn').on('click', function() {
        $('#updaterow').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("th").map(function() {
          return $(this).text();

        }).get();

        $('#formid').attr('action', 'update2.php?updateid=' + data[0]);

      });
    });
  </script>
</body>

</html>