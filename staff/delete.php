<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM `marks` WHERE USN='$id'";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:page.php');
    }else{
        die(mysqli_error($con));
    }
}
