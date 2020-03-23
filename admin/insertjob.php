<?php
session_start();
include("nav.php");
if(isset($_REQUEST['submit']))
{
include("dbconn.php");

$id=$_POST['job_id'];
$no=$_POST['job_info'];
$cid=$_POST['requirement'];
$img=$_FILES['product_image'];

$path="document/job/";
$target=$path.basename($_FILES['product_image']['name']);
if(move_uploaded_file($_FILES['product_image']['tmp_name'],$target))
{
    
    //$r="insert into job values ('$id','$no','$cid','$target')";
    
    $ins_product=mysqli_query($con,"insert into job values ('$id','$no','$cid','$target')");
    print_r ($ins_product); 
    if($ins_product)
    {   
            echo "<div class=\"alert alert-success\"> Job Added Successfully</div>";
    }
    else
    {
        echo "<div class=\"alert alert-success\"> Sorry , Try Again...</div>";
    }
}
}
?>
<div class="row"><br><br><br>
<div class="panel panel-primary">
    <div class="panel-heading text-center">
            ADD JOB DETAILS
    </div>
    <div class="panel-body">
    <form id="form" action="#" method="POST" enctype="multipart/form-data" class="form-horizontal" ><br>
				
				<div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Enter Job ID</label>
                    </div>
                    <div class=" col-md-4  col-xs-10">
                        <input type="text" id="jobid" name="job_id" class="form-control col-xs-offset-1" pattern="[0-9]{1,}" title="Please Enter Valid Job ID..." required>
                    </div>
				</div>
    
                <div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Enter Job Info.</label>
                    </div>
                    <div class=" col-md-4  col-xs-10">
                        <input type="text" id="job_info" name="job_info" class="form-control col-xs-offset-1" style="height:100px;" required>
                    </div>
				</div>
    
                <div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Requirement</label>
                    </div>
                    <div class=" col-md-4  col-xs-10">
                        <input type="text" id="req" name="requirement" class="form-control col-xs-offset-1" pattern="[0-9]{1,}" title="Please Enter requiment" required>
                    </div>
				</div>
    
                 <div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Select Product Image</label>
                    </div>
                    <div class=" col-md-4  col-xs-10">
                         <input class="col-md-offset-1 col-xs-offset-1" name="product_image" id="file" type="file" required></span>
                    </div>
				</div>
				</div><br><br>

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