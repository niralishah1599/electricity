<?php
session_start();
include("nav.php");
if(isset($_REQUEST['submit']))
{

include("dbconn.php");

    $tid=$_POST['tenderid'];
    $tinfo=$_POST['tenderinfo'];
    $tcity=$_POST['tendercity'];
    $tprice=$_POST['tenderprice'];
    $tdate=$_POST['tenderdate'];
    
$path="document/job/";
$target=$path.basename($_FILES['product_image']['name']);
if(move_uploaded_file($_FILES['product_image']['tmp_name'],$target))
{
    
    $r="insert into tender values ('$tid','$tinfo','$tcity','$tprice','$tdate','$target')";
    
    $ins_product=mysqli_query($con,$r);
    if($ins_product)
    {   
            echo "<div class=\"alert alert-success\"> Tender Added Successfully</div>";
    }
    else
    {
        echo "<div class=\"alert alert-success\"> Sorry , Try Again...</div>";
    }
}
}
?>
<div class="row"><br>
    <div class="panel panel-primary">
    <div class="panel-heading text-center">
            ADD TENDER DETAILS
    </div>
    <div class="panel-body">
    <form id="form" action="#" method="POST" enctype="multipart/form-data" class="form-horizontal" ><br>
				
				<div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Enter Tender ID</label>
                    </div>
                    <div class=" col-md-4  col-xs-10">
                        <input type="text" id="tenderid" name="tenderid" class="form-control col-xs-offset-1" pattern="[0-9]{1,}" title="Please Enter Valid Tender ID..."  required>
                    </div>
				</div>
    
                <div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Enter Tender Info.</label>
                    </div>
                    <div class=" col-md-4  col-xs-10">
                        <input type="text" id="tenderinfo" name="tenderinfo" class="form-control col-xs-offset-1" style="height:100px;" required>
                    </div>
				</div>
    
                <div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Enter City</label>
                    </div>
                    <div class=" col-md-4  col-xs-10">
                        <input type="text" id="tendercity" name="tendercity" class="form-control col-xs-offset-1" pattern="[a-zA-Z]{2,}" title="Please Enter Valid City Name" required>
                    </div>
				</div>
    
                <div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Enter Tender Price</label>
                    </div>
                    <div class=" col-md-4  col-xs-10">
                        <input type="text" id="tenderprice" name="tenderprice" class="form-control col-xs-offset-1" pattern="[0-9+]{10,13}" title="Please Enter Valid Contact No." required>
                    </div>
				</div>
    
                <div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Select Expire Date.</label>
                    </div>
                    <div class=" col-md-4  col-xs-10">
                        <input type="date" id="tenderdate" name="tenderdate" placeholder="YYYY/MM/DD" class="form-control col-xs-offset-1" required>
                    </div>
				</div>
    
                 <div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Select Document</label>
                    </div>
                    <div class=" col-md-4  col-xs-10">
                         <input class="col-md-offset-1 col-xs-offset-1" name="product_image" id="file" type="file"  required></span>
                    </div>
				</div>
				</div>

                <div class="form-group">
					<div class="col-md-3 col-sm-1 col-md-offset-6 col-xs-offset-4 ">
					<input type="submit" name="submit" value="Submit" class="btn btn-warning">
					</div>
				</div><br><br>
    </form>
    </div>
</div>
</div><br><br><br>
</div>
<?php
include("footer.php");
?>