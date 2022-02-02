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
      <span class="nav-item">
        <button class="btn btn-primary my-5 stu"><a href="../index.html" class="text-light">Main</a>
        </button></span>
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
              <div class="form-group">
                <label>Enter username</label>
                <input type="text" class="form-control" name="username" placeholder="Enter username" autocomplete="off">

              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off">
              </div>
              <div class="form-group">
                <label>Subject Code</label>
                <input type="text" class="form-control" name="sub" placeholder="Subject Code">
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

                <label>Enter username</label>
                <input type="text" class="form-control" name="username" placeholder="Enter username">

              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <div class="form-group">
                <label>Subject Code</label>
                <input type="text" class="form-control" name="sub" placeholder="Subject Code">
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
    .stu {
      float: left;
      position: absolute;
      top: 5%;

    }
  </style>
</body>

</html>