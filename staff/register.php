<?php
include 'connect.php';
//header('location:staff.php');
$username = $_POST['username'];
$password = $_POST['password'];
if (empty($username) || empty($password)) {
    header("location:staff.php?Empty= Please Fill in the Blanks");
} else {
    $s = "SELECT * from `staff_reg` where username='$username'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        header("location:staff.php?Empty= Username already taken");
    } else {
        $reg = "INSERT into `staff_reg` values('$username','$password')";
        mysqli_query($con, $reg);
        
        header('location:staff.php');
    }
}
