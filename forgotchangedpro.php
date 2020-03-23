<?php
session_start();
if(isset($_POST['submit']))
{
    $con=mysql_connect('localhost','root','') or die(mysql_error());
    mysql_select_db("eletricity") or die(mysql_error());
    
    include("connection.php");
			$email=$_POST["email"];
			$question=$_POST["sec_question"];
			$answer=$_POST["answer"];
			$r="select email,sec_question,answer from register where email='$email'";
            echo $r;
			$query=mysql_query($r);
            $num=mysql_num_rows($query);
			if($num>0)
            {
				   header("location:forgotchanged.php");
			}
			else
			{
                echo "<div 
                style=\"width:100%;
                background:#db402c;
                color:white;
                position:absolute;
                padding:1%;
                margin:16% 0 0 0;
                font-family:Berlin Sans FB;\">";
				echo "<center>Your password Do Not Match ...!</center>";
				echo "</div>";
			}

}

?>