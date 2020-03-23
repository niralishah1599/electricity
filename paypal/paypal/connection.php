<?php
    
    $con=mysql_connect('localhost','root','') or die(mysql_error());
    if($con)
    {
        $db=mysql_select_db("eletricity",$con);
    }
?>