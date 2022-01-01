<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $usn = $_POST['USN'];
    $name = $_POST['name'];
    $sub1 = $_POST['18CS51'];
    $sub2 = $_POST['18CS52'];
    $sub3 = $_POST['18CS53'];
    $sub4 = $_POST['18CS54'];
    $sub5 = $_POST['18CS55'];
    $sub6 = $_POST['18CS56'];

    $sql = "insert into `marks` (USN,stud_name,18CS51,18CS52,18CS53,18CS54,18CS55,18CS56)
    values('$usn','$name',$sub1,$sub2,$sub3,$sub4,$sub5,$sub6)";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:page.php');
    } else {
        die(mysqli_error($con));
    }
}
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" >

    <title>DBMS</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group col-2">
                <label>USN</label>
                <input type="text" class="form-control" placeholder="Enter your USN" name="USN" autocomplete="off">
            </div>
            <div class="form-group col-2">
                <label>NAME</label>
                <input type="text" class="form-control" placeholder="Enter name" name="name" autocomplete="off">
            </div>
            <div class="form-group col-2">
                <label>18CS51 MARKS</label>
                <input type="text" class="form-control" name="18CS51" autocomplete="off">
            </div>
            <div class="form-group col-2">
                <label>18CS52 MARKS</label>
                <input type="text" class="form-control" name="18CS52" autocomplete="off">
            </div>
            <div class="form-group col-2">
                <label>18CS53 MARKS</label>
                <input type="text" class="form-control" name="18CS53" autocomplete="off">
            </div>
            <div class="form-group col-2">
                <label>18CS54 MARKS</label>
                <input type="text" class="form-control" name="18CS54" autocomplete="off">
            </div>
            <div class="form-group col-2">
                <label>18CS55 MARKS</label>
                <input type="text" class="form-control" name="18CS55" autocomplete="off">
            </div>
            <div class="form-group col-2">
                <label>18CS56 MARKS</label>
                <input type="text" class="form-control " name="18CS56" autocomplete="off">
            </div>


            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>