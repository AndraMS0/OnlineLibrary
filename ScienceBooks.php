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
<link rel="stylesheet" type="text/css" href="ScienceBooks.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<?php include 'navigation.php' ?>
<div class="centrat">
<h1> Science Books </h1>
</div>
<div class="aliniere">
<div>
<img src="c1.jpeg" alt="Sapte scurte lectii despre fizica" width="400" height="500">
</div>
<div>
 <form action="AdaugaCarte1S.php" method="post"> 
<input type="submit" class="btn btn-primary" value=Adauga >
<div class="form-group">
	  <label>Introduceti perioada de imprutut (zile):</label>
	  <input type="number_format" name="number" class="form-control" required>
	</div>
</form>

</div>
</div>

<div class="aliniere">
<div>
<img src="c2.jpeg" alt="Sapte scurte lectii despre fizica" width="400" height="500">
</div>

<div>
<form action="AdaugaCarte2S.php" method="post"> 
<input type="submit" class="btn btn-primary" value=Adauga >
<div class="form-group">
	  <label>Introduceti perioada de imprutut (zile):</label>
	  <input type="number_format" name="number" class="form-control" required>
	</div>
</form>
</div>
</div>

<div class="aliniere">
<div>
<img src="c3.jpeg" alt="Sapte scurte lectii despre fizica" width="400" height="500">
</div>

<div>
<form action="AdaugaCarte3S.php" method="post"> 
<input type="submit" class="btn btn-primary" value=Adauga >
<div class="form-group">
	  <label>Introduceti perioada de imprutut (zile):</label>
	  <input type="number_format" name="number" class="form-control" required>
	</div>
</form>
</div>
</div>


</body>
</html>