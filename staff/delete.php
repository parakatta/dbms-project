<?php
include 'connect.php';
if(isset($_POST['deleteid'])){
    $id=$_POST['delete_id'];
    $sql="DELETE FROM `marks` WHERE USN='$id'";
    $sql1="DELETE FROM `marks_2` WHERE USN='$id'";
    $sql2="DELETE FROM `marks_3` WHERE USN='$id'";
    $sql3="DELETE FROM `attendence` WHERE USN='$id'";

    $result1=mysqli_query($con,$sql1) or die(mysqli_error($con));
    $result2=mysqli_query($con,$sql2) or die(mysqli_error($con));
    $result3=mysqli_query($con,$sql3) or die(mysqli_error($con));
    
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:page.php');
    }else{
        die(mysqli_error($con));
    }
}
