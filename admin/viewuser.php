<?php
session_start();
include("nav.php");

if(isset($_GET['email']))
{
    include("dbconn.php");
    $id=$_GET['email'];
    
    $del= mysqli_query($con,"DELETE FROM register WHERE email='$id'");
    if($del)
    {
        echo "<div class=\"alert alert-success\"> User Removed SuccessFully</div>";
    }
    else
    {
        echo "<div class=\"alert alert-danger\"> Sorry , Try Again....</div>";
    }
}
?>
<html> 
<div class="row" >
    <div>
        <div class=col-md-12 col-sm-9 col-xs-12 col-lg-offset-12 id="info">
            Manage User
        </div><br/>
       
    </div><br/>
        <div class=table-responsive id="table">
        <?php
            include("dbconn.php");
            $r="SELECT * FROM `register`";
			$query=mysqli_query($con,"$r");
        ?>
          <table class=table>
            <thead>
              <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Security Question</th>
                <th>Security Answer</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
              </tr>
            </thead>
          <tbody>
            <?php
                while($row = mysqli_fetch_array($query))
                 {
					   echo "<tr>";
                        $email=$row['email'];
                        
					   echo "<td>".$row['fname']."</td>";
					   echo "<td >".$row['lname']."</td>"; 
                       echo "<td>".$row['email']."</td>";
                        echo "<td>".$row['password']."</td>";
                        echo "<td>".$row['sec_question']."</td>";
                        echo "<td>".$row['answer']."</td>";
                        echo "<td>".$row['address']."</td>";
                         echo "<td>".$row['city']."</td>";
                     echo "<td>".$row['state']."</td>";
                       echo "<td>
                       <a href=viewuser.php?email=$email><button class=\"btn btn-danger glyphicon glyphicon-trash\" name=remove id=remove ></button>
                       
                       
                       </td>";
					   echo"</tr>";
                 }
            ?>
          </tbody>
        </table>
        </div>
    </form>
</div>

</div>
<?php
    include("footer.php");
?>
</html>