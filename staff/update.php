

<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql1 = "SELECT * FROM `marks` WHERE USN='$id'";
$result = mysqli_query($con, $sql1);
$row = mysqli_fetch_assoc($result);
$usn = $row['USN'];
$name = $row['stud_name'];
$sub1 = $row['18CS51'];
$sub2 = $row['18CS52'];
$sub3 = $row['18CS53'];
$sub4 = $row['18CS54'];
$sub5 = $row['18CS55'];
$sub6 = $row['18CS56'];

if (isset($_POST['submit'])) {
    $usn = $_POST['USN'];
    $name = $_POST['name'];
    $sub1 = $_POST['18CS51'];
    $sub2 = $_POST['18CS52'];
    $sub3 = $_POST['18CS53'];
    $sub4 = $_POST['18CS54'];
    $sub5 = $_POST['18CS55'];
    $sub6 = $_POST['18CS56'];


    $sql2 = "UPDATE `marks` SET USN='$usn',stud_name='$name',
    18CS51=$sub1,18CS52=$sub2,18CS53=$sub3,18CS54=$sub4,18CS55=$sub5,18CS56=$sub6 WHERE USN='$id'";
    $result = mysqli_query($con, $sql2);
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>DBMS</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group col-2">
                <label>USN</label>
                <input type="text" class="form-control" placeholder="Enter your USN" name="USN" autocomplete="off" value=<?php echo $usn; ?>>
            </div>
            <div class="form-group col-2">
                <label>NAME</label>
                <input type="text" class="form-control" placeholder="Enter name" name="name" autocomplete="off" value=<?php echo $name; ?>>
            </div>
            <div class="form-group col-2">
                <label>18CS51 MARKS</label>
                <input type="text" class="form-control" name="18CS51" autocomplete="off" value=<?php echo $sub1; ?>>
            </div>
            <div class="form-group col-2">
                <label>18CS52 MARKS</label>
                <input type="text" class="form-control" name="18CS52" autocomplete="off" value=<?php echo $sub2; ?>>
            </div>
            <div class="form-group col-2">
                <label>18CS53 MARKS</label>
                <input type="text" class="form-control" name="18CS53" autocomplete="off" value=<?php echo $sub3; ?>>
            </div>
            <div class="form-group col-2">
                <label>18CS54 MARKS</label>
                <input type="text" class="form-control" name="18CS54" autocomplete="off" value=<?php echo $sub4; ?>>
            </div>
            <div class="form-group col-2">
                <label>18CS55 MARKS</label>
                <input type="text" class="form-control" name="18CS55" autocomplete="off" value=<?php echo $sub5; ?>>
            </div>
            <div class="form-group col-2">
                <label>18CS56 MARKS</label>
                <input type="text" class="form-control " name="18CS56" autocomplete="off" value=<?php echo $sub6; ?>>
            </div>


            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>