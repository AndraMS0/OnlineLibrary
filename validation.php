<?php
session_start();

include 'connection.php';
$name= $_POST['user'];
$pass= $_POST['password'];
$hpass=$_SESSION['h'];


$s=" SELECT* FROM usertable WHERE name= '$name'";
$result=mysqli_query($con, $s);

$row=mysqli_fetch_array($result);
$chg=$row['password'];
$v=password_verify($pass, $hpass);
$v1=password_verify($pass, $chg);
if( $v==1 OR $v1==1 )
{
	$_SESSION['username']=$name;
	$_SESSION['id']=$row['id_user'];
	header('location:home.php');
} else{
	header('location:login.php');
}



?>