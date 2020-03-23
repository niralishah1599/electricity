<?php
session_start();
include("nav.php");
if(isset($_REQUEST['submit']))
{
include("dbconn.php");

$id=$_POST['bill_id'];
$no=$_POST['bill_no'];
$cid=$_POST['customer_id'];
$price=$_POST['bill_amount'];
$email=$_POST['payer_email'];

$r="insert into billpayment values ('$id','$no','$cid','$price','$email')";
$ins_bill=mysqli_query($con,$r);
if($ins_bill)
{   
    echo "<div class=\"alert alert-success\"> Bill Detail Added Successfully</div>";
}
else
{
    echo "<div class=\"alert alert-success\"> Sorry , Try Again...</div>";
}
}
?>
<div class="row"><br><br><br>
<div class="panel panel-primary">
    <div class="panel-heading text-center">
            ADD BILL DETAILS
    </div>
    <div class="panel-body">
        <form id="form" action="#" method="POST" class="form-horizontal" ><br>
                
                <div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Enter Bill ID</label>
                    </div>
                    <div class=" col-md-4  col-xs-10">
                        <input type="text" id="email" name="bill_id" class="form-control col-xs-offset-1 " pattern="[a-zA-Z0-9]{8}"
							title="Please Enter Valid Bill No." required>
                    </div>
                </div>
    
                <div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Enter Bill NO.</label>
                    </div>
                    <div class=" col-md-4  col-xs-10">
                        <input type="text" id="email" name="bill_no" class="form-control col-xs-offset-1" pattern="[a-zA-Z0-9]{8}" 
							title="Please Enter Valid Bill No." required>
                    </div>
                </div>
    
                <div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Customer ID</label>
                    </div>
                    <div class=" col-md-4  col-xs-10">
                        <input type="text"  name="customer_id" class="form-control col-xs-offset-1" required>
                    </div>
                </div>
    
                <div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Enter Bill Amount</label>
                    </div>
                    <div class=" col-md-4  col-xs-10">
                        <input type="text"  name="bill_amount" class="form-control col-xs-offset-1" pattern="[0-9]{2,}" 
						title="Please Enter Valid Amount" required>
                    </div>
                </div>
    
                <div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Customer Email ID</label>
                    </div>
                    <div class=" col-md-4  col-xs-10">
                 
				 <input type="email" name="payer_email" class="form-control col-xs-offset-1" required>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-md-3 col-sm-1 col-md-offset-6 col-xs-offset-4 ">
                    <input type="submit" name="submit" value="Submit" class="btn btn-warning">
                    </div>
                </div>
    </form>
    </div>
</div>
</div><br><br>
</div>
<?php
include("footer.php");
?>