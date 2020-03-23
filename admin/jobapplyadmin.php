<?php
session_start();
include("nav.php");

if(isset($_GET['email']))
{
    include("dbconn.php");
    
    $email=$_GET['email'];
    
    $r="DELETE FROM `jobapply` WHERE email='$email'";
    $del_conn=mysqli_query($con,"$r");
    if($del_conn)
    {
        echo "<div class=\"alert alert-success\">Job canceled Successfully</div>";
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
        USER : Job Apply Information
    </div><br/><br/>
        <div class=table-responsive id="table">
        <?php
            include("dbconn.php");
            $r="SELECT * FROM `jobapply`";
			$query=mysqli_query($con,"$r");
        ?>
          <table class=table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Job Info.</th>
                <th>Fname</th>
                <th>Lname</th>
                <th>Email</th>
                <th>Birth Date</th>
                <th>Computer knowlenge </th>
                <th>Contact1</th>
                <th>Contact2</th>
                <th>User File</th>
                
                <th>Action</th>
              </tr>
            </thead>
          <tbody>
            <?php
                while($row = mysqli_fetch_array($query))
                 {
					   echo "<tr>";
                        $email=$row['email'];
                    
					   echo "<td>".$row['id']."</td>";
					   echo "<td>".$row['document']."</td>";
					   echo "<td>".$row['fname']."</td>"; 
                       echo "<td>".$row['lname']."</td>";
                       echo "<td>".$row['email']."</td>";
                       echo "<td>".date('d-m-Y',strtotime($row['bdate']))."</td>";
                       echo "<td>".$row['basic']."</td>";
                       $contact=$row['contact1'];
                       echo "<td>".$row['contact1']."</td>";
                       echo "<td>".$row['contact2']."</td>";
                       echo "<td>".$row['upload']."</td>";
                       echo "<td style='width:100px;'>
					   <a href=index.php?contact=$contact><button class=\"btn btn-primary  glyphicon glyphicon-ok\" name=remove id=remove ></button></a>
                       
                       <a href=jobapplyadmin.php?email=$email><button class=\"btn btn-danger  glyphicon glyphicon-trash\" name=\"remove\" id=remove ></button></a>
                       
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
