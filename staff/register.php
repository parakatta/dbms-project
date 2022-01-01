<?php

include 'connect.php';

//header('location:staff.php');
$username=$_POST['username'];
$password=$_POST['password'];

$s ="SELECT * from `staff_reg` where username='$username'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    echo"Username already taken";
}else{
    $reg="INSERT into `staff_reg` values('$username','$password')";
    mysqli_query($con,$reg);
    header('location:page.php');
   
}
?>