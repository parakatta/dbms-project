<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
  <section>
    <div class="container">
      <div class="login-box">
        <div class="row">


          <div class="col-md-6 login-left">
            <h2>LOGIN</h2>
            <?php
            if (@$_GET['Empty'] == true) {
            ?>
              <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>
            <?php
            }
            ?>

            <?php
            if (@$_GET['Invalid'] == true) {
            ?>
              <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>
            <?php
            }
            ?>
            <form action="validation.php" method="post">
              <div class="form-group ">
                <label>Enter USN</label>
                <input type="text" class="form-control" name="usn" placeholder="Enter USN" autocomplete="off">


              </div>



              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="stud_password" placeholder="Password" autocomplete="off">

              </div>


              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
          </div>
          <div class="col-md-6 login-right">
            <h2>REGISTER</h2>
            <?php
            if (@$_GET['Empty'] == true) {
            ?>
              <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>
            <?php
            }
            ?>

            <?php
            if (@$_GET['Invalid'] == true) {
            ?>
              <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>
            <?php
            }
            ?>
            <form action="register.php" method="post">

              <div class="form-group">

                <label>Enter USN</label>
                <input type="text" class="form-control" name="usn" placeholder="Enter USN">

              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="stud_password" placeholder="Password">
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>

            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </section>
  <style>
    body {
      background: linear-gradient(rgb(187, 187, 187, 0), rgba(230, 230, 235, 0.5)),
        url("../css/nrr.jpg");
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;

    }
  </style>
</body>

</html>