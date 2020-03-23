<?php
session_start();
include("nav.php");
if(isset($_GET['email']))
 {
   $con=mysqli_connect('localhost','root','') or die(mysql_error());
   mysqli_select_db($con,"eletricity") or die(mysql_error());

       $email=$_GET['email'];
       $query="delete from feedback where email='$email'";
       $result=mysqli_query($con,$query);
       if($result)
            {
                 echo "<div class=\"alert alert-success\"> Feedback Remove SuccessFully</div>";
            }
        else
            {
                echo "<div class=\"alert alert-danger\">Sorry , Try Again...</div>";
            }

}
?>
<html> 
<div class="row" >
    <div class=col-md-12 col-sm-9 col-xs-12 col-lg-offset-12 id="info">
        User Feedback Information 
    </div><br/><br/>

        <div class=table-responsive id="table">
        <?php

            include("dbconn.php");
            $r="SELECT * FROM `feedback`";
			$query=mysqli_query($con,"$r");

        ?>
          <table class=table>
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Contact Info.</th>
                <th>Message</th>
                <th>Action</th>
              </tr>
            </thead>
          <tbody>
            <?php
                while($row = mysqli_fetch_array($query))
                 {
                    $email=$row['email'];
					   echo "<tr>";
					   echo "<td>".$row['name']."</td>";
					   echo "<td>".$row['email']."</td>";
					   $contact=$row['contact'];
					   echo "<td>".$row['contact']."</center></td>"; 
                       echo "<td>".$row['message']."</td>";
                       echo "<td>
					   
					   <a href=index.php?contact=$contact><button class=\"btn btn-primary glyphicon glyphicon-ok\" name=remove id=remove ></button></a>
                       
                       <a href='viewfdbk.php?email=$email'><button  class=\"btn btn-danger glyphicon glyphicon-trash\" name=remove id=remove></button></a>
                       
                       </td>";
					   echo"</tr>";
                 }
            ?>
          </tbody>
        </table>
        </div>
</div>
</div>
<?php
    include("footer.php");
?>
</html>