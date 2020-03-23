<?php
include 'dbconfig.php';
if(isset($_POST['billid']))
{

    $id=$_POST['id'];
    $sql="select id from billdetails where id=$id";
    $query=mysql_query("$sql");
    if($query)
        echo "success";
    else
        echo "denided";
}
?>