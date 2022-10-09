<?php
session_start();

include 'connection.php';
$id=$_SESSION['id'];
$id1="SELECT id_carte FROM bookstable WHERE titlu='Scurta_Istorie_a_timpului'";
$sql=mysqli_query($con, $id1);
while($row=mysqli_fetch_array($sql)){
	
		$id_c_deins=$row['id_carte'];
}

$per= $_POST['number'];


	$reg="INSERT INTO imprumuttable (id_u, id_c,id_perioada) VALUES ($id, $id_c_deins, $per)";
	$sql2=mysqli_query($con, $reg);
	
	
	header('location:ScienceBooks.php');
    
?>	
