<?php
session_start();
header('location:login.php');
include 'connection.php';
$name= $_POST['user'];
$pass= $_POST['password'];
$hash=password_hash("$pass",PASSWORD_DEFAULT);
$_SESSION['h']=$hash;
$s=" select * from usertable where name= '$name'";
$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);
if($num==1)
{
	echo" Username already taken";
} else{
	$reg="insert into usertable(name, password) values('$name', '$hash')";
	mysqli_query($con, $reg);
	echo" Registration Successful";
}



?>