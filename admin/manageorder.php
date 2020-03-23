<?php
session_start();
include("nav.php");

if(isset($_GET['invoice']))
{
    include("dbconn.php");
    
    $invoice=$_GET['invoice'];
    
    $manage_order=mysqli_query($con,"DELETE FROM `purchases` WHERE invoice='$invoice'");
    
    if($manage_order)
    {
        echo "<div class=\"alert alert-success\"> Order Confirm SuccessFully</div>";
    }
    else
    {
        echo "<div class=\"alert alert-success\"> Sorry ,Try Again.... </div>";
    }
}
?>
<html> 
<div class="row" >
    <div>
        <div class=col-md-12 col-sm-9 col-xs-12 col-lg-offset-12 id="info">
                    MANAGE ORDER 
        </div><br/>
        
    </div><br/>
        <div class=table-responsive id="table">
        <?php
            include("dbconn.php");
            $r="SELECT * FROM `purchases`";
			$query=mysqli_query($con,"$r");
        ?>
          <table class=table>
            <thead>
              <tr>
                <th>Invoice</th>
                <th>payer Email</th>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Product Quantity</th>
                <th>Product Amount</th>
                <th>Payer Fname</th>
                <th>Payer Lname</th>
                <th>Payer Address</th>
                <th>Payer City</th>
                <th>Contact No.</th>
                <th>Action</th>
              </tr>
            </thead>
          <tbody>
            <?php
                while($row = mysqli_fetch_array($query))
                 {
                        $invoice=$row['invoice'];
					   echo "<tr>";
					   echo "<td>".$row['invoice']."</td>";
					   echo "<td>".$row['payer_email']."</td>";
                       echo "<td>".$row['product_id']."</td>";
					   echo "<td>".$row['product_name']."</td>";
                       echo "<td>".$row['product_quantity']."</td>";
                       echo "<td>".$row['product_amount']."</td>";
                       echo "<td>".$row['payer_fname']."</td>";
                       echo "<td>".$row['payer_lname']."</td>";
                       echo "<td>".$row['payer_address']."</td>";
                       echo "<td>".$row['payer_city']."</td>";
                	   $contact=$row['payer_country'];
                       echo "<td>".$row['payer_country']."</td>";
                       echo "<td style='width:100px'>
					   
					   <a href=index.php?contact=$contact><button class=\"btn btn-primary glyphicon glyphicon-ok\" name=remove id=remove ></button></a>
                       <a href=manageorder.php?invoice=$invoice><button class=\"btn btn-danger glyphicon glyphicon-trash\" name=remove id=remove ></button></a>
                       
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