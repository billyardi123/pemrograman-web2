<?php 
$con = mysql_connect("localhost","root",""); 
if (!$con) 
 { 
 die('Could not connect: ' . mysql_error()); 
 } 
mysqli_select_db("lat_dbase", $con); 
mysqli_query("INSERT INTO tbl_mhs (FirstName, LastName, Age) 
VALUES ('muhamad', 'fazri', '29')"); 
mysqli_query("INSERT INTO tbl_mhs (FirstName, LastName, Age) 
VALUES ('fani', 'putri', '32')"); 
mysqli_close($con); 
?>