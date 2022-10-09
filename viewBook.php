
<?php

session_start();
 //$link=$_SESSION['pdf'];
 $link=$_GET['linkPdf'];

 header('Content-type: application/pdf');
  
header('Content-Disposition: inline; filename="' . $link . '"');
  
header('Content-Transfer-Encoding: binary');
  
header('Accept-Ranges: bytes');
@readfile($link);
?>


