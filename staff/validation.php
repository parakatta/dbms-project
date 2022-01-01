<?php


include 'connect.php';

$username=$_POST['username'];
$password=$_POST['password'];
$s ="SELECT * FROM `staff_reg` WHERE username='$username'&& password='$password'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
  //  $_SESSION['username']=$username;
    header('location:page.php');
}else{
    header('location:page.php');
}
?>