<!DOCTYPE html>
<?php
session_start();
include "functie.php";
check();


?>

<html lang="en">
<head>
<meta charset="UTF-8">
<title> Home Page </title>
<link rel="stylesheet" type="text/css" href="styleD.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div id="main">

<div id="parent">




<div  class="banner1">
<img src="f3.jpg">;
<div  class="container poz" > 
<h1>Welcome <?php echo $_SESSION['username']; ?> </h1>

</div>
  
</div>
<div  class="banner2">
<img src="f5.jpg">;
<div class="poz">
<h1>Today a reader, tomorrow a leader</h1>
</div>
  
</div>
<div  class="banner3">
<img src="f2.jpg">;
<div class="poz">
<h1>Sit back and relax, all you need is a book</h1>
</div>
  
</div>
<div class="banner4">
<img src="f7.jpg">;
  <div class="poz">
<h1>The world belongs to those who read</h1>
</div>
</div>


<div class="over1">

<?php include 'navigation.php' ?>

</div>



<div class="over">

<div>
<?php include 'navigation2.php' ?>
</div>


 
</div>


</div>


 


</div>


</body>

</html>
