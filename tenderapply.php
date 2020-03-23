
<?php
session_start();
?>
<html>
<head>
    <link href="css/tender.css" type="text/css" rel="stylesheet">
</head>
    <body style="background:#eee;">
        <?php
            include("navigation.php");
        ?>
  
        </section>-->
          <div class="row"><br/><br/><br/><br/>
					<div class="panel panel-warning col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1 loginpanel">
					<form action="tenderapply.php?id=<?php echo $_GET['id']; ?> && desc=<?php echo $_GET['desc']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal"> 
						<div class="panel-heading text-center">
								<h3 style="color:white;">Apply A Tender </h3>
						</div>
						<div class="panel-body">	
						<br/>
						<?php    
							if(isset($_POST["submitbn"])) 
								{    
								     
								$con=mysqli_connect("localhost","root","") ;
								{

									mysqli_select_db($con,"eletricity");
									{       
											$id=$_GET['id'];  
											$desc=$_GET['desc'];
											
											$company=$_POST['companyname'];
											$fname=$_POST['fname'];
											$lname=$_POST['lname'];
											$address=$_POST['address'];
											$city=$_POST['city'];
											$state=$_POST['std'];
											$email=$_POST['email'];
											$contact=$_POST['contact'];
											$pan=$_POST['pan_no'];
											$price=$_POST['tenderprice'];
										
											$upload=$_FILES['upload'];  
											$path="report/job/jobs/userDocument/";
											$target=$path.basename($_FILES['upload']['name']);
											if(move_uploaded_file($_FILES['upload']['tmp_name'],$target))
												{
												
													$ins_con=mysqli_query($con,"INSERT INTO `tenderapply` values('$id','$desc','$company','$fname', '$lname', '$address', '$city', '$state', '$email', '$contact', '$pan','$target','$price')");	
													 if($ins_con)
														{

															echo "hi";
															 echo "<div style=\"font-family:Berlin Sans FB;\" class='alert alert-success'>";
															 echo "<h4 class='text-center'>Your Details Are Sending Successfully...</h4>";
															 echo "</div>";
														}
														else
														 {
														
															echo "<div style=\"font-family:Berlin Sans FB;\" class='alert alert-danger'>";
																echo "<h4 class='text-center'>Sorry , Try Again...</h4>";
															echo "</div>";
														}
											  
										}
									}
								}
									
								}
							?>
							<div class="form-group">
								<div class="col-md-10 col-md-offset-1">
									<input type="text" name="companyname" value="" pattern="[a-zA-Z]{2,}"
									title="Please Enter Valid Company Name" placeholder="Company Name" required class="form-control">
								</div>
							</div>
						
							<div class="form-group">
							<div class="col-md-5 col-md-offset-1">
									<input type="text" name="fname" value="" pattern="[a-zA-Z]{2,}"
									title="Please Enter Valid First Name" placeholder="First Name" required class="form-control">
								</div>
								<div class="col-md-5 inputpadding">
									<input type="text" name="lname" value="" pattern="[a-zA-Z]{2,}" 
									title="Please Enter Valid Last Name" placeholder="Last Name" required class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-10 col-md-offset-1">
									<textarea class="form-control" name="address" pattern="[a-zA-Z0-9]{10,80}"
									title="Please Enter Valid Address..." placeholder="Enter Address" id="message" required></textarea>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-5 col-md-offset-1">
									<input type="text" name="city" value="" placeholder="Enter City" pattern="[a-zA-Z]{2,}"
									title="Please Enter Valid City Name" required class="form-control">
								</div>
								<div class="col-md-5 inputpadding">
									<input type="text" name="std" value="" placeholder="Enter State" pattern="[a-zA-Z]{2,}"
									title="Please Enter Valid State Name" required class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-5 col-md-offset-1">
									<input type="text" name="email" value="" placeholder="Enter Email"  class="form-control">
								</div>
								<div class="col-md-5 inputpadding">
									<input type="text" name="contact" value="" pattern="[0-9+]{10,13}"
									title="Please Enter Valid Contact No..." placeholder="Enter Contact No." required class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-10 col-md-offset-1">
									<input type="text" name="pan_no" value="" placeholder="Pan Card No."  class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-3 col-md-offset-1">
									<label> Documents :</label>
								</div>
								<div class="col-md-9 col-md-offset-1 col-xs-offset-1">
									<input class="col-md-offset-1 " name="upload" id="file" type="file"></span>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-10 col-md-offset-1">
									<input type="text" name="tenderprice" value="" placeholder="Enter Actual Tender Price"  class="form-control">
								</div>
							</div>
							
							<div class="form-group"><br/>
								<div class="col-md-3 col-md-offset-4 col-sm-1 col-xs-offset-3">
								<input type="submit" name="submitbn" value="Apply NOW" class="btn btn-success" ><br>
								</div>
							</div>
							
					</div>
				</form>
			</div>
		</div>
              <?php
                include("footer.php");
              ?>
         
    </body>
</html>
    