<?php
  $conn = mysqli_connect("localhost","root","","stream");
  if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
?>
