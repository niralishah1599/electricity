<?php
function conn()
{
$con=mysqli_connect("localhost", "root", "") or die ("Oops! Server not connected"); // connect to the host
mysqli_select_db($con,"eletricity") or die ("Oops! DB not connected"); // select the database
}   
?>