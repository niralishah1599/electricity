<?php
session_start();
include("nav.php");

if(isset($_GET['email']))
{
    include("dbconn.php");
    
    $email=$_GET['email'];
    
    $r="DELETE FROM `tenderapply` WHERE email='$email'";
    $del_conn=mysqli_query($con,"$r");
    if($del_conn)
    {
        echo "<div class=\"alert alert-success\"> Tender canceled Successfully</div>";
    }
    else
    {
        echo "<div class=\"alert alert-success\"> Sorry , Try Again...</div>";
    }
}
?>
<html> 
<div class="row" >
    <div class=col-md-12 col-sm-9 col-xs-12 col-lg-offset-12 id="info">
        USER : Tender Apply Information
    </div><br/><br/>
        <div class=table-responsive id="table">
        <?php
            include("dbconn.php");
            $r="SELECT * FROM `tenderapply`";
			$query=mysqli_query($con,"$r");
        ?>
          <table class=table>
            <thead>
              <tr>
                <th>Company Name</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Email</th>
                <th>Contact No.</th>
                <th>Pan Card No.</th>
                <th>Experiance Certificate</th>
                <th>Tender Price</th>
                
                <th>Action</th>
              </tr>
            </thead>
          <tbody>
            <?php
                while($row = mysqli_fetch_array($query))
                 {
					   echo "<tr>";
                        $email=$row['email'];
                    
					   echo "<td>".$row['companyname']."</td>";
					   echo "<td>".$row['fname']."</td>";
					   echo "<td>".$row['lname']."</td>"; 
                       echo "<td>".$row['address']."</td>";
                       echo "<td>".$row['city']."</td>";
                       echo "<td>".$row['state']."</td>";
                       echo "<td>".$row['email']."</td>";
					   $contact=$row['contact'];
                       echo "<td>".$row['contact']."</td>";
                       echo "<td>".$row['pan_no']."</td>";
                       echo "<td>".$row['excertificate']."</td>";
                       echo "<td>".$row['tenderprice']."</td>";
                      
                       echo "<td style='width:100px'>
					    <a href=index.php?contact=$contact><button class=\"btn btn-primary  glyphicon glyphicon-ok\" name=remove id=remove ></button></a>
                       
                       <a href=tenderapplyadmin.php?email=$email><button class=\"btn btn-danger glyphicon glyphicon-trash\" name=\"remove\" id=remove></button></a>
                       
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
