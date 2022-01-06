<?php

include 'connect.php';

//header('location:staff.php');
$usn=$_POST['usn'];
$password=$_POST['stud_password'];
if (empty($usn) || empty($password)) {
    header("location:student.php?Empty= Please Fill in the Blanks");
} else {
    $s ="SELECT stud_password from `student_reg` where USN='$usn' ";
    $result=mysqli_query($con,$s);
    
    //$num=mysqli_num_rows($result);
    //if($num==1){
    if($result!=NULL){
        $reg="INSERT into `student_reg` values('$password')";
        mysqli_query($con,$reg);
        $_SESSION['usn']=$usn;
        $id=$_SESSION['usn'];
        header('location:stumain.php');
    }else{
        header("location:student.php?Empty= USN  already registered!.Log in");

        
   
    }
}
