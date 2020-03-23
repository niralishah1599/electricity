<?php
session_start();
include("nav.php");

if(isset($_GET['id']))
{
    $tid=$_GET['id'];
    
    include("dbconn.php");
    
    $r="DELETE FROM `tender` WHERE id='$tid'";
   
    $del_tender=mysqli_query($con,"$r");
    if($del_tender)
    {
        echo "<div class=\"alert alert-success\"> Tender Remove SuccessFully</div>";
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
            TENDER INFORMATION 
        </div><br/>
        <div class="col-md-9 col-md-offset-10 col-sm-offset-9 col-xs-offset-3">
            <a href="inserttender.php"> <button class="btn btn-primary" name="insert" type="button">Insert Tender Information</button></a>
        </div>
    </div><br/>
        <div class=table-responsive id="table">
        <?php
            include("dbconn.php");
            $r="SELECT * FROM `tender`";
			$query=mysqli_query($con,"$r");
        ?>
          <table class=table>
            <thead>
              <tr>
                <th>id</th>
                <th>Description</th>
                <th>City</th>
                <th>Price</th>
                <th>Expire Date</th>
                <th>Document</th>
                <th>Action</th>
              </tr>
            </thead>
          <tbody>
            <?php
                while($row = mysqli_fetch_array($query))
                 {
                        $tid=$row['id'];
                    
					   echo "<tr>";
					   echo "<td>".$row['id']."</td>";
					   echo "<td style=width:40%;>".$row['desc']."</td>";
                       echo "<td>".$row['city']."</td>";
					   echo "<td>".$row['price']."</td>";
                       echo "<td>".$row['lastdate']."</td>";
                       echo "<td style=width:40%;>".$row['document']."</td>";
                       echo "<td style=width:40%;>
                       <a href=viewtender.php?id=$tid><button class=\"btn btn-danger glyphicon glyphicon-trash\" name=remove id=remove ></button>
                       <a href=edittender.php?id=$tid><button class=\"btn btn-warning glyphicon glyphicon-edit\" name=remove id=remove ></button>
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