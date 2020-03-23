<?php
    
    $con=mysqli_connect('localhost','root','') or die(mysqli_error());
    if($con)
    {
        $db=mysqli_select_db($con,"eletricity");
    }
?>