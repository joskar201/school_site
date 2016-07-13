<?php
require '../models/model.php';
$_SERVER["REQUEST_METHOD"]=="POST";
$Fname=$_POST['first_name'];
$Lname=$_POST['last_name'];
$email=$_POST['email'];
$regno=$_POST['reg_no'];
$pass=$_POST['password'];
$r=Register_student($Fname,$Lname,$email,$regno,$pass,$a);
echo "you are here!";
?>
