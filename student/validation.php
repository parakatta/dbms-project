<?php


include 'connect.php';

$usn=$_POST['usn'];
$password=$_POST['stud_password'];
$s ="SELECT * FROM `staff_reg` WHERE USN='$usn'&& stud_password='$password'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
  //  $_SESSION['username']=$username;
    header('location:stumain.php');
}else{
    header('location:stumain.php');
}
?>