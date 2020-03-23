<?php
session_start();
include("nav.php");

if(isset($_GET['id']))
{
    include("dbconn.php");
    $id=$_GET['id'];
    
    $del= mysqli_query($con,"DELETE FROM solar_products WHERE id='$id'");
    if($del)
    {
        echo "<div class=\"alert alert-success\"> Product Removed SuccessFully</div>";
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
            Solar Product
        </div><br/>
        <div class="col-md-9 col-md-offset-10 col-sm-offset-9 col-xs-offset-3">
            <a href="insertproduct.php"><button class="btn btn-primary" name="insert" type="button">Insert Tender Information</button></a>
        </div>
    </div><br/>
        <div class=table-responsive id="table">
        <?php
            include("dbconn.php");
            $r="SELECT * FROM `solar_products`";
			$query=mysqli_query($con,"$r");
        ?>
          <table class=table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Info.</th>
                <th>Action</th>
              </tr>
            </thead>
          <tbody>
            <?php
                while($row = mysqli_fetch_array($query))
                 {
					   echo "<tr>";
                        $pid=$row['id'];
                        
					   echo "<td>".$row['id']."</td>";
					   echo "<td style=width:10%;><img src=../".$row['product']." style=width:100%;></img></center></td>"; 
                       echo "<td style=width:20%;>".$row['prductname']."</td>";
                        echo "<td>".$row['productprice']."</td>";
                        echo "<td style=width:40%>".$row['productdesc']."</td>";
                       echo "<td>
                       <a href=viewproduct.php?id=$pid><button class=\"btn btn-danger glyphicon glyphicon-trash\" name=remove id=remove style=height:40px;width:40px;></button>
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