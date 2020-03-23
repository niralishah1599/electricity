<?php
function conn()
{
mysql_connect("localhost", "root", "") or die ("Oops! Server not connected"); // connect to the host
mysql_select_db("eletricity") or die ("Oops! DB not connected"); // select the database
}   
?>