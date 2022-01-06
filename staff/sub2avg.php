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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <section>
        <div class="container-left">
            <nav class="navbar navbar-inverse navbar-fixed-left">

            </nav>
        </div>
        <div class="container my-5">
            <span class="navbar-text">
                <button class="btn btn-primary my-5 stu"><a href="page.php" class="text-light">Go Back</a>
                </button></span>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link " href="average.php">18CS51</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="sub2avg.php">18CS52</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">18CS53</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">18CS54</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">18CS55</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">18CS56</a>
                </li>

            </ul>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">USN</th>
                        <th scope="col">NAME</th>
                        <th scope="col">TEST1</th>
                        <th scope="col">TEST2</th>
                        <th scope="col">TEST3</th>
                        <th scope="col">AVERAGE</th>

                    </tr>
                </thead>
                <tbody>
                    <!--php script-->
                    <?php
                    $sql = "select *  from `marks`";
                    $result = mysqli_query($con, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $usn = $row['USN'];
                            $name = $row['stud_name'];
                            $sub1 = $row['18CS52'];



                            echo '
          <tr>
      <th scope="row">' . $usn . '</th>
      <td>' . $name . '</td>
      <td>' . $sub1 . '</td>
      ';
                        }
                    } ?>
                </tbody>
            </table>
        </div>

        <style type="text/css">
            .container {
                position: absolute;
                left: 15%;
            }

            .navbar-fixed-left {
                width: 240px;
                position: fixed;
                border-radius: 0;
                height: 100%;
                background-color: #887A92;
            }

            /*.navbar-fixed-left .navbar-nav{
      float:none;
      width:139px;
    }*/

            .stu {
                float: right;
            }
        </style>
    </section>


</body>

</html>