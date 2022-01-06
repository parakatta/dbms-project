<?php


include 'connect.php';

$usn=$_POST['usn'];
$password=$_POST['stud_password'];
if (empty($usn) || empty($password)) {
    header("location:student.php?Empty= Please Fill in the Blanks");
} else {
    $s ="SELECT * FROM `student_reg` WHERE USN='$usn'&& stud_password='$password'";
    $result=mysqli_query($con,$s);
    $num=mysqli_num_rows($result);
    if($num==1){
    
    
        header('location:student.php?Invalid= Wrong username or password.Enter your USN as username');
    }else{
        $_SESSION['usn']=$usn;
        $id=$_SESSION['usn'];
        header('location:stumain.php');
    }
}
