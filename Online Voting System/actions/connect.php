<?php
// creating connection  to database
// syntax for connect to database ("server name","username","password","database name")
 
$con=mysqli_connect("localhost","nameofvoter","demo123","votingsystem");
if(!$con){
   die("Connection failed: " . mysqli_connect_error($con));
}
?>