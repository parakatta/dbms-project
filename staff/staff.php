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
          <h2>login</h2>
          <form action="validation.php" method="post">
            <div class="form-group">
              <label>Enter username</label>
              <input type="text" class="form-control" name="username" placeholder="Enter username" autocomplete="off">

            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </form>
        </div>
        <div class="col-md-6 login-right">
          <h2>Register</h2>
          <form action="register.php" method="post">

            <div class="form-group">

              <label>Enter username</label>
              <input type="text" class="form-control" name="username" placeholder="Enter username">

            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</section>
</body>

</html>