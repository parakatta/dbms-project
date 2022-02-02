<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from `announcement` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:announcements.php');
    }else{
        die(mysqli_error($con));
    }
}
?>