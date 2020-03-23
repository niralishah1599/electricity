<?php
session_start();
include("nav.php");
$bid=$_GET['bill_id'];
$bno=$_GET['bill_no']; 
$cid=$_GET['customer_id'];
$bamount=$_GET['bill_amount'];
$bemail=$_GET['payer_email'];

if(isset($_REQUEST['submit']))
{
    include('dbconn.php');
    
    //$r="UPDATE `billpayment` SET bill_id='$bid',bill_no='$bno',customer_id='$cid',bill_amount='$bamount',payer_email='$bemail' WHERE payer_email='$bemail'";
    
    
    $update_bill=mysqli_query($con,"UPDATE billpayment SET bill_id='".$bid."',bill_no='".$bno."',customer_id='".$cid."',bill_amount='".$bamount."',payer_email= '".$bemail."' WHERE bill_no= '".$bno."'");
    
    if($update_bill)
    {
        echo "<div class=\"alert alert-success\"> Bill Information Updated SuccessFully</div>";
    }
    else
    {
        echo "<div class=\"alert alert-success\"> Sorry , try Again....</div>";
    }
}
?>
<div class="row"><br><br><br>
    <div class="col-md-5 col-xs-12 col-md-offset-5 col-xs-offset-2" id="info">
            EDIT BILL DETAILS
        </div><br><br><br>
<form id="form" action="#" method="GET" class="form-horizontal" ><br>
				
				<div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Enter Bill ID</label>
                    </div>
                    <div class=" col-md-4  col-xs-10">
                        <input type="text" name="bill_id" value="<?php echo $bid;?>" class="form-control col-xs-offset-1"pattern="[a-zA-Z0-9]{8}"
							title="Please Enter Valid Bill No." required >
                    </div>
				</div>
    
                <div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Enter Bill NO.</label>
                    </div>
                    <div class=" col-md-4  col-xs-10">
                        <input type="text" name="bill_no" value="<?php echo $bno; ?>" class="form-control col-xs-offset-1" pattern="[a-zA-Z0-9]{8}"
							title="Please Enter Valid Bill No." required >
                    </div>
				</div>
    
                <div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Customer ID</label>
                    </div>
                    <div class=" col-md-4  col-xs-10">
                        <input type="text" name="customer_id" value="<?php echo $cid; ?>" class="form-control col-xs-offset-1">
                    </div>
				</div>
    
                <div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Enter Bill Amount</label>
                    </div>
                    <div class=" col-md-4  col-xs-10">
                        <input type="text" name="bill_amount" value="<?php echo $bamount; ?>" class="form-control col-xs-offset-1" pattern="[0-9]{2,}" 
						title="Please Enter Valid Amount" required >
                    </div>
				</div>
    
                <div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Customer Email ID</label>
                    </div>
                    <div class=" col-md-4  col-xs-10">
                        <input type="email" name="payer_email" value="<?php echo $bemail; ?>" class="form-control col-xs-offset-1">
                    </div>
				</div>
                <br>
                <div class="form-group">
					<div class="col-md-3 col-sm-1 col-md-offset-6 col-xs-offset-4 ">
					<input type="submit" name="submit" value="Submit" class="btn btn-warning">
					</div>
				</div><br><br>
    </form>
</div>
</div>
<?php
include("footer.php");
?>