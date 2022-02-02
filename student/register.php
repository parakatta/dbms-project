<?php
include 'connect.php';
//header('location:staff.php');
$usn = $_POST['usn'];
$password = $_POST['stud_password'];
if (empty($usn) || empty($password)) {
    header("location:student.php?Empty= Please Fill in the Blanks");
} else {
    $s = "select * from `student_reg` where USN='$usn'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        header("location:student.php?Empty= Registered account");
    } else {
        
        $reg = "INSERT into `student_reg` values('$usn','$password')";
        mysqli_query($con, $reg);
        $_SESSION['usn'] = $usn;
        $id = $_SESSION['usn'];
        header('location:student.php');
    }
}
