<!DOCTYPE html>
<?php
session_start();
include "functie.php";
check();

?>

<html lang="en">
<head>
<meta charset="UTF-8">
<title> My Books</title>
<link rel="stylesheet" type="text/css" href="myBooks.css">
</head>
<body>
<?php include 'navigation.php' ?>
<div>
<h1> MY BOOKS </h1>
</div>
 
<table>
<tr>
			<th>Nr Crt</th>
			<th>Nume utilizator</th>
			<th>Titlu Carte</th>
			<th>Autor</th>
			<th>Editura</th>
			<th>An aparitie</th>
            <th>Perioada imprumut(zile)</th>
			<th>Continut carte</th>
			<th>Sterge</th>
		</tr>
		
		 <?php
		  $i=1;
		 include 'connection.php';
         $id_utilizator=$_SESSION['id'];

         $id1="SELECT * FROM imprumuttable WHERE id_u='$id_utilizator'";
         $sql=mysqli_query($con, $id1);
      while($row=mysqli_fetch_array($sql)){
	
		  $id_carte_imprumutata=$row['id_c'];
		  $perioada=$row['id_perioada'];
		
         $date="SELECT * FROM bookstable WHERE id_carte='$id_carte_imprumutata'";
         $rez=mysqli_query($con, $date);
		 
       
        while($row=mysqli_fetch_array($rez)){
          
           echo"<tr>
            <td>$i</td>
			<td>".$_SESSION['username']."</td>  
            <td>".$row['titlu']."</td>  
            <td>".$row['autor']."</td>
            <td>".$row['editura']."</td>
            <td>".$row['an_aparitie']."</td>
            <td>".$perioada."</td>
			<td><a href=viewBook.php?linkPdf=".$row['link_pdf']. ">View</a></td>
			<td><a href=do_sterge.php?id_carte_imp=".$row['id_carte']. "> &#10008;</a></td>
         </tr>";
         $i++;
    }
	
	  }
?>
</table>

</body>
</html>