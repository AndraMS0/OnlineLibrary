<?php
function check()
{

if(!isset($_SESSION['username']))
{
	header("location:login.php");
}
}

?>