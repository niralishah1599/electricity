<?php
session_start();
include("nav.php");

if(isset($_GET['email']))
{
    include("dbconn.php");
    
    $email=$_GET['email'];
    
    $r="DELETE FROM `shf_meter` WHERE email='$email'";
    $del_conn=mysqli_query($con,"$r");
    if($del_conn)
    {
        echo "<div class=\"alert alert-success\"> Connection Removed Successfully</div>";
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
        User Request : Shift A Meter  
    </div>
        <div class=table-responsive id="table">
        <?php
            include("dbconn.php");
            $r="SELECT * FROM `shf_meter`";
			$query=mysqli_query($con,"$r");
        ?>
          <table class=table table-responsive>
            <thead>
              <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Type Of Supply</th>
                <th>Flat no.</th>
                 <th>Society</th>
                <th>Street No.1</th>
                <th>Street No.2</th>
                <th>City</th>
                <th>Zip Code</th>
                <th>Email</th>
                <th>Contact No.</th>
                <th>Category Of Supply</th>
                <th>Documents</th>
                <th>Action</th>
              </tr>
            </thead>
          <tbody>
            <?php
                while($row = mysqli_fetch_array($query))
                 {
					   echo "<tr>";
                        $email=$row['email'];
                    
					   echo "<td>".$row['fname']."</td>";
					   echo "<td>".$row['lname']."</td>";
                       echo "<td>".$row['supply']."</td>";
					   echo "<td>".$row['flatno']."</td>"; 
                       echo "<td>".$row['society']."</td>";
                       echo "<td>".$row['streetno1']."</td>";
                       echo "<td>".$row['streetno2']."</td>";
                       echo "<td>".$row['city']."</td>";
                       echo "<td>".$row['zipcode']."</td>";
                       echo "<td>".$row['email']."</td>";
					   $contact=$row['contact'];
                       echo "<td>".$row['contact']."</td>";
                       echo "<td>".$row['catsupply']."</td>";
                       echo "<td>".$row['filename']."</td>";
                       echo "<td style='width:100px'>
					   <a href=index.php?contact=$contact><button class=\"btn btn-primary  glyphicon glyphicon-ok\" name=remove id=remove ></button></a>
					   
                       <a href=viewshift.php?email=$email><button class=\"btn btn-danger glyphicon glyphicon-trash\" name=remove id=remove ></button>
                       
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