<?php
session_start();
include("nav.php");
?>

<html> 
<div class="row" >
    <div class=col-md-12 col-sm-9 col-xs-12 col-lg-offset-12 id="info">
        Manage Bill Information
    </div><br/><br/>

        <div class=table-responsive id="table">
        <?php

            include("dbconn.php");
            $r="SELECT * FROM `billpayment`";
			$query=mysqli_query($con,"$r");

        ?>
          <table class=table>
            <thead>
              <tr>
                <th>Bill_ID</th>
                <th>Bill_No</th>
                <th>Custoomer_Id</th>
                <th>Bill_Amount</th>
                <th>Payer_Email</th>
                
                <th>Action</th>
              </tr>
            </thead>
          <tbody>
            <?php
                while($row = mysqli_fetch_array($query))
                 {
                    $bid=$row['bill_id'];
                    $bno=$row['bill_no'];
                    $cid=$row['customer_id'];
                    $bprice=$row['bill_amount'];
                    $email=$row['payer_email'];

					   echo "<tr>";
					   echo "<td>".$row['bill_id']."</td>";
					   echo "<td>".$row['bill_no']."</td>";
					   echo "<td>".$row['customer_id']."</center></td>"; 
                       echo "<td>".$row['bill_amount']."</td>";
                       echo "<td>".$row['payer_email']."</td>";
                       echo "<td>
                       <a href='displaybillinfo.php?payer_email=$email'><button  class=\"btn btn-danger glyphicon glyphicon-trash\" name=remove id=remove ></button></a>
                       
                       <a href='editbillinfo.php?bill_id=$bid&&bill_no=$bno&&customer_id=$cid&&bill_amount=$bprice&&payer_email=$email'><button  class=\"btn btn-success glyphicon glyphicon-edit\" name=remove id=remove ></button></a>
                       </td>";
					   echo"</tr>";
                 }
            ?>
          </tbody>
        </table>
        </div>
</div>
</div>
<?php
if(isset($_GET['payer_email']))
 {
   mysqli_connect('localhost','root','') or die(mysql_error());
   mysqli_select_db($con,"eletricity") or die(mysql_error());

       $email=$_GET['payer_email'];
       $query="delete from billpayment where payer_email='$email'";
    
       $result=mysqli_query($con,$query);
       if($result)
            {
                
                 echo "<div class=\"alert alert-success\"> Bill Information Remove SuccessFully</div>";
            }
        else
            {
                echo "<div class=\"alert alert-danger\">Sorry , Try Again...</div>";
            }

}

?>
<?php
    include("footer.php");
?>
</html>

