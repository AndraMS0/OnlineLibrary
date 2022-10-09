<?php
session_start();
 include 'connection.php' ;
$id=$_SESSION['id'];
$new=$_POST['text'];

$hashedPwdInDb=password_hash("$new",PASSWORD_DEFAULT);

if(password_verify($new,$hashedPwdInDb)){
$sql = "UPDATE usertable SET password='$hashedPwdInDb' WHERE id_user='$id'";
$rez=mysqli_query($con, $sql);}
header('location:login.php');

?>