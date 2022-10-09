<?php
session_start();
include 'connection.php';
$id_utilizator=$_SESSION['id'];
$id_carte=$_GET['id_carte_imp'];
$sql="DELETE FROM imprumuttable WHERE id_u='$id_utilizator' AND id_c='$id_carte' ";
mysqli_query($con, $sql);
header("location:myBooks.php");

?>