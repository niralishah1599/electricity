<?php
session_start();
include("nav.php");

if(isset($_GET['contact']))
{
    include("dbconn.php");
    
    $name=$_GET['contact'];
    $r="DELETE FROM `quickcomplaint` WHERE contact='$name'";
    $del_complaint=mysqli_query($con,"$r");
    if($del_complaint)
    {
       echo "<div class=\"alert alert-success\"> Complaint Removed SuccessFully</div>"; 
    }
    else
    {
        echo "<div class=\"alert alert-success\"> Sorry ,Try Again.... </div>";
    }
}
?>
<html> 
<div class="row" >
    <div class=col-md-12 col-sm-9 col-xs-12 col-lg-offset-12 id="info">
        User Complaint 
    </div><br/><br/>
        <div class=table-responsive id="table">
        <?php
            include("dbconn.php");
            $r="SELECT * FROM `quickcomplaint`";
			$query=mysqli_query($con,"$r");
        ?>
          <table class=table>
            <thead>
              <tr>
                  <th>Name</th>
                <th>Contact Info.</th>
                <th>Message</th>
                <th>Action</th>
              </tr>
            </thead>
          <tbody>
            <?php
                while($row = mysqli_fetch_array($query))
                 {
                    $contact=$row['contact'];
					   echo "<tr>";
					   echo "<td>".$row['name']."</td>";
					   $contact=$row['contact'];
					   echo "<td>".$row['contact']."</center></td>"; 
                       echo "<td>".$row['address']."</td>";
                       echo "<td>
					   
					   <a href=index.php?contact=$contact><button class=\"btn btn-primary glyphicon glyphicon-ok\" name=remove id=remove ></button></a>
                       
                       <a href=viewcomplaint.php?contact=$contact ><button class=\"btn btn-danger glyphicon glyphicon-trash\" name=remove id=remove></button></a>
                       
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