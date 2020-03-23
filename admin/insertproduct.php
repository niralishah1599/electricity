<?php
session_start();
include("nav.php");
if(isset($_REQUEST['submit']))
{
include("dbconn.php");

$id=$_POST['product_id'];
$name=$_POST['product_name'];
$price=$_POST['product_price'];
$info=$_POST['product_info'];
$img=$_FILES['product_image'];

$path="../image/products";
$target=$path.basename($_FILES['product_image']['name']);
if(move_uploaded_file($_FILES['product_image']['tmp_name'],$target))
{
    
    $r="insert into solar_products values ('$id','$target','$name','$price','$info')";
    
    $ins_product=mysqli_query($con,$r);
    if($ins_product)
    {   
            echo "<div class=\"alert alert-success\"> Product Added Successfully</div>";
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
            Add Solar Product
    </div>
    <div class="panel-body">
    <form id="form" action="#" method="POST" class="form-horizontal" enctype="multipart/form-data"><br>
				
				<div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Enter Product ID</label>
                    </div>
                    <div class=" col-md-4  col-xs-10">
                        <input type="text" id="id" name="product_id" class="form-control col-xs-offset-1"  pattern="[0-9]{2,5}" title="Please , Enter Valid Product ID." required>
                    </div>
				</div>
    
                <div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Select Product Image</label>
                    </div>
                    <div class=" col-md-4  col-xs-10 col-xs-offset-1">
                         <input class="col-md-offset-1 " name="product_image" id="file" type="file" required></span>
                    </div>
				</div>
    
                <div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Product Name</label>
                    </div>
                    <div class=" col-md-4  col-xs-10">
                        <input type="text" id="product_name" name="product_name" pattern="[a-zA-Z0-9 ./\@-]{3,}" title="Please Enter Valid Produc Name..." class="form-control col-xs-offset-1" required>
                    </div>
				</div>
    
                <div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Product Price</label>
                    </div>
                    <div class=" col-md-4  col-xs-10">
                        <input type="text" id="product_price" name="product_price" pattern="[0-9]{2,}" title="Please Enter Valid Product Price." class="form-control col-xs-offset-1" required>
                    </div>
				</div>
    
                <div class="form-group">
                    <div>
                        <label class="control-label col-md-3 col-md-offset-2 col-xs-offset-1">Product Information</label>
                    </div>
                    <div class=" col-md-4  col-xs-10">
                        <input type="text" id="product_info" name="product_info" style="height:100px" class="form-control col-xs-offset-1" required>
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
</div><br/><br/><br/>
</div>
</div>
<?php
    include("footer.php");
?>