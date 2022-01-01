<?php

include 'connect.php';

//header('location:staff.php');
$usn=$_POST['usn'];
$password=$_POST['stud_password'];

$s ="SELECT * from `student_reg` where USN='$usn'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    echo"Username already taken";
}else{
    $reg="INSERT into `student_reg` values('$usn','$password')";
    mysqli_query($con,$reg);
    header('location:stumain.php');
   
}
?>