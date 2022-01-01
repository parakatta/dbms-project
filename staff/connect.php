<?php
session_start();
$con=new mysqli('localhost','root','alandbms@#123',"dbmsproject");

if(!$con){ 
    die(mysqli_error($con));
}
?>