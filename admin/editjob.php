<?php
session_start();
include("nav.php");

if(isset($_REQUEST['submit']))
{
    include("dbconn.php");

 
    $id=$_GET['id'];
    $desc=$_GET['desc'];
    $requirement=$_GET['requirement'];  
    $img=$_FILES['product_image'];
    $path="document/job/";
    $target=$path.basename($_FILES['product_image']['name']);
    if(move_uploaded_file($_FILES['product_image']['tmp_name'],$target))
    {
        $r="UPDATE `job` SET `id`='".$id."',`desc`='".$desc."',`requirement`='".$requirement."',`document`='".$target."' WHERE id='".$id."'";
        //$r="UPDATE job SET id='".$id."', desc='".$job_info."',requirement='".$requirement."',document='".$target."' WHERE id='".$id."'";

        $edit_job=mysqli_query($con,"$r");
        if($edit_job)
        {   
                echo "<div class=\"alert alert-success\"> Job Updated Successfully</div>";
        }
        else
        {
            echo "<div class=\"alert alert-success\"> Sorry , Try Again...</div>";
        }
    }
}
?>
<div class="row"><br><br><br>
    <div class="col-md-5 col-xs-12 col-md-offset-5 col-xs-offset-2" id="info">
            EDIT JOB DETAILS
        </div><br><br><br>
<form id="form" action="#" method="GET" enctype="multipart/form-data" class="form-horizontal" ><br>
				
				<div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Enter Job ID</label>
                    </div>
                    <div class=" col-md-4  col-xs-10">
                        <input type="text" id="jobid" name="job_id" value="<?php echo $_GET['id']; ?>" class="form-control col-xs-offset-1" disabled>
                    </div>
				</div>
    
                <div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Enter Job Info.</label>
                    </div>
                    <div class=" col-md-4  col-xs-10">
                        <input type="text" id="job_info" name="desc" value="<?php echo $_GET['desc']; ?> " class="form-control col-xs-offset-1" style="height:100px;" required>
                    </div>
				</div>
    
                <div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Requirement</label>
                    </div>
                    <div class=" col-md-4  col-xs-10">
                        <input type="text" id="req" name="requirement" value="<?php echo $_GET['requirement']; ?> " class="form-control col-xs-offset-1"  required>
                    </div>
				</div>
    
                 <div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Select Document</label>
                    </div>
                    <div class=" col-md-4  col-xs-10">
                         <input class="col-md-offset-1 col-xs-offset-1" name="product_image" value="<?php echo $_GET['document']; ?> " id="file" type="file" required></span>
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
<?php
include("footer.php");
?>