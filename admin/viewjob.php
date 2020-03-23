<?php
session_start();
include("nav.php");

if(isset($_GET['id']))
 {
   $con=mysqli_connect('localhost','root','') or die(mysql_error());
   mysqli_select_db($con,"eletricity") or die(mysql_error());

       $bid=$_GET['id'];
       $query="delete from job where id='$bid'";
       $result=mysqli_query($con,$query);
       if($result)
            {
                 echo "<div class=\"alert alert-success\"> Job Remove SuccessFully</div>";
            }
        else
            {
                echo "<div class=\"alert alert-danger\">Sorry , Try Again...</div>";
            }

}

?>
<html> 
<div class="row" >
    <div>
        <div class=col-md-12 col-sm-9 col-xs-12 col-lg-offset-12 id="info">
            JOB INFORMATION 
        </div><br/>
        <div class="col-md-9 col-md-offset-10 col-sm-offset-9 col-xs-offset-4">
            <a href="insertjob.php"><button class="btn btn-primary" name="insert" type="button">Insert Job Information</button></a>
        </div>
    </div><br/>
        <div class=table-responsive id="table">
        <?php
            include("dbconn.php");
            $r="SELECT * FROM `job`";
			$query=mysqli_query($con,"$r");
        ?>
          <table class=table>
            <thead>
              <tr>
                <th>id</th>
                <th>Description</th>
                <th>Requirement</th>
                <th>Document</th>
                <th>Action</th>
              </tr>
            </thead>
          <tbody>
            <?php
                while($row = mysqli_fetch_array($query))
                 {
                        $id=$row['id'];
                        $desc=$row['desc'];
                        $requirement=$row['requirement'];
                        $document=$row['document'];
                        
					   echo "<tr>";
					   echo "<td>".$row['id']."</td>";
					   echo "<td>".$row['desc']."</td>";
					   echo "<td>".$row['requirement']."</center></td>"; 
                       echo "<td>".$row['document']."</td>";
                       echo "<td>
                       <a href=viewjob.php?id=$id><button class=\"btn btn-danger glyphicon glyphicon-trash\" name=remove id=remove ></button></a>
                       <a href='editjob.php?id=$id&&desc=$desc&&requirement=$requirement&&document=$document'><button class=\"btn btn-success glyphicon glyphicon-edit\" name=remove id=remove></button>
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