<?php
session_start();
include("nav.php");
if(isset($_GET['bill_id']))
 {
   $con=mysqli_connect('localhost','root','') ;
   mysqli_select_db($con,"eletricity") ;

       $bid=$_GET['bill_id'];
       $query="delete from billrecord where bill_id='$bid'";
       $result=mysqli_query($con,$query);
       if($result)
            {
            	echo "<div class=\"alert alert-success\">Bill Removed</div>";
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
            Bill Payment History
        </div>
    </div><br/>
        <div class=table-responsive id="table">
        <?php
            include("dbconn.php");
            $r="SELECT * FROM `billrecord`";
			$query=mysqli_query($con,"$r");
        ?>
          <table class=table>
            <thead>
              <tr>
                <th>Bill_id</th>
                <th>Bill_no</th>
                <th>Contact No.</th>
                <th>Email</th>
                <th>Bill Amount</th>
                <th>Payer Fname</th>
                <th>Payer Lname</th>
                <th>Address</th>
                <th>City</th>
                
                <th>Country</th>
                <th>Action</th>
              </tr>
            </thead>
          <tbody>
            <?php
                while($row = mysqli_fetch_array($query))
                 {
					   echo "<tr>";
                        $bid=$row['bill_id'];
						$contact=$row['customer_id'];
					   echo "<td>".$row['bill_id']."</td>";
					   echo "<td>".$row['bill_no']."</td>";
                       echo "<td>".$row['customer_id']."</td>";
                       echo "<td>".$row['payer_email']."</td>";
					   echo "<td>".$row['bill_amount']."</td>";
                       echo "<td>".$row['payer_fname']."</td>";
                       echo "<td>".$row['payer_lname']."</td>";
                       echo "<td>".$row['payer_address']."</td>";
                       echo "<td>".$row['payer_city']."</td>";
                      
                       echo "<td>".$row['payer_country']."</td>";
                       echo "<td style=width:10%;>
                       <a href=index.php?contact=$contact><button class=\"btn btn-primary glyphicon glyphicon-ok\" name=remove id=remove ></button></a>
                       <a href=viewbill.php?bill_id=$bid><button class=\"btn btn-danger glyphicon glyphicon-trash\" name=remove id=remove ></button></a>
                       
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