<!DOCTYPE html>
<?php
session_start();
include "functie.php";
check();

?>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> science books</title>
<link rel="stylesheet" type="text/css" href="newPass.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<?php include 'navigation.php' ?>
<div class="centrat">
<h1> Schimba Parola </h1>
</div>

<div class="aliniere">
 <form action="doUpdate.php" method="post"> 

<div class="form-group">
	  <label>Introduceti parola noua :</label>
	  <input type="password" name="text" class="form-control" required>
	</div>
	<input type="submit" class="btn btn-primary" value=Schimba >
</form>

</div>
</body>