<?php
   $hostname=$_ENV["HOSTNAME"];
   $un=$_ENV["USERNAME"];
   $ps=$_ENV["PASSWORD"];
   $dbname=$_ENV["DATABASE"];
     
   $ref= new mysqli($hostname,$un,$ps,$dbname); 
?>
