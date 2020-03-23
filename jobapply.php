<?php
session_start();						
?>  

<html>
<head>
    <meta name="viewport" content="width-device-width,initial-scale=1.0">
</head>
    <body  style="background:#eee;">
        <?php
            include("navigation.php");
        ?>
		<div class="row"><br/><br/><br/><br/>
					<div class="panel panel-warning col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1 loginpanel">
					<form action="jobapply.php?id=<?php echo $_GET['id']; ?>&&desc=<?php echo $_GET['desc']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal"> 
						<div class="panel-heading text-center">
								<h3 style="color:white;">Apply To A Job</h3>
						</div>
						<div class="panel-body">	
						<br/>
						<?php
							if(isset($_POST["submit"]))
								{    
									
								$con=mysqli_connect("localhost","root","");
								{
									
									mysqli_select_db($con,"eletricity");
									{   
																				
											$jid=$_GET['id'];
											$jdesc=$_GET['desc'];
											
											$fname=$_POST['fname'];
											$lname=$_POST['lname'];
											$email=$_POST['email'];
											$brithdate=date('Y-m-d',strtotime($_POST['brithdate']));
											$basiccom=$_POST['basiccom'];
											$gender=$_POST['gender'];
											$address=$_POST['address'];
											$city=$_POST['city'];
											$state=$_POST['state'];
											$mrgstatus=$_POST['mrgstatus'];
											$contact1=$_POST['contact1'];
											$contact2=$_POST['contact2'];
										
											$doc=$_FILES['upload'];  
											$path="report/job/jobs/userDocument/";
											$target=$path.basename($_FILES['upload']['name']);
											if(move_uploaded_file($_FILES['upload']['tmp_name'],$target))
												{
													$ins_con=mysqli_query($con,"INSERT INTO `jobapply` values('$jid','$jdesc','$fname', '$lname', '$email', '$brithdate', '$gender', '$state', '$address', '$city', '$state', '$mrgstatus', '$contact1', '$contact2','$target')");
														
													 if($ins_con)
														{
															echo "<div style=\"font-family:Berlin Sans FB;\">";
															echo "<h4 class='alert alert-success' >Applyed Successfully</h4>";
															echo "</div>";
															echo "<script>
																	confitm('Hello okkkkkkkkkkkkkkkkkkkkkkkkkk');
																  </script>";
														}
														else
														 {
														
															echo "<div style=\"position:absolute;width:100%;background:#db402c;color:white;padding:1%;margin:0 auto;font-family:Berlin Sans FB;\">";
													echo "<center>Sorry , Try Again...</center>";
													echo "</div>";
														}
											  
										}
									}
								}
									
								}
						?>
					 		<div class="form-group">
								<div class="col-md-5 col-md-offset-1 col-xs-12">
									<input type="text" name="fname" value=""  pattern="[a-zA-Z]{2,}"
									title="Please Enter First Name." placeholder="First Name" required class="form-control">
								</div>
								<div class="col-md-5 col-xs-12 inputpadding">
									<input type="text" name="lname" value="" pattern="[a-zA-Z]{2,}"
									title="Please Enter Last Name." placeholder="Last Name" required class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-10 col-md-offset-1">
									<input type="email" name="email" value="" placeholder="Email" required class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-10 col-md-offset-1">
									<input type="date" name="brithdate" title="Please Enter First Name." required placeholder="Date Of Birth" class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-5 col-md-offset-1">
									<label> Basic Khowlenge Of Computer ?</label>
								</div>
								<div class="col-md-6 col-xs-offset-2">
									<div class="radio">
										  <label><input type="radio" name="basiccom" value="YES" checked>Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										  <label><input type="radio" name="basiccom" value="NO">No</label>
									</div>
								</div>
							</div>
							
						    <div class="form-group">
								<div class="col-md-2 col-md-offset-1">
									<label> Gender</label>
								</div>
								<div class="col-md-6 col-xs-offset-2">
									<div class="radio">
										  <label><input type="radio" name="gender" value="Male" checked>Male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										  <label><input type="radio" name="gender" value="Female">Female</label>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-10 col-md-offset-1">
									<textarea class="form-control" name="address" placeholder="Enter Address" pattern="[a-zA-Z0-9.@/\]{10,80}"
									title="Please Enter Valid Address... " required  id="message" ></textarea>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-5 col-md-offset-1">
									<input type="text" name="city" value=""  pattern="[a-zA-Z]{2,}"
									title="Please Enter City Name."  placeholder="Enter City" required class="form-control">
								</div>
								<div class="col-md-5 inputpadding">
									<input type="text" name="state" value=""  pattern="[a-zA-Z]{2,}"
									title="Please Enter State." placeholder="Enter State" required class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-3 col-md-offset-1">
									<label> Merriage Status :</label>
								</div>
								<div class="col-md-5 col-xs-offset-2">
									<div class="radio">
										  <label><input type="radio" name="mrgstatus" value="YES" checked>Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										  <label><input type="radio" name="mrgstatus" value="NO">No</label>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-5 col-md-offset-1">
									<input type="text" name="contact1" value="" pattern="[0-9+]{10,13}" 
									title="Please Enter Valid Contact No." placeholder="Contact No.1" required class="form-control">
								</div>
								<div class="col-md-5 inputpadding">
									<input type="text" name="contact2" value="" pattern="[0-9+]{10,13}" 
									title="Please Enter Valid Contact No." placeholder="Contact N0.2" required class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-3 col-md-offset-1">
									<label> Give A Resume :</label>
								</div>
								<div class="col-md- col-md-offset-1 col-xs-offset-1	">
									<input class="col-md-offset-1 " name="upload" id="file" type="file" required></span>
								</div>
							</div>
							
							<div class="form-group"><br/>
								<div class="col-md-3 col-md-offset-4 col-sm-1 col-xs-offset-3">
								<input type="submit" name="submit" value="Apply NOW" class="btn btn-success" ><br>
								</div>
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
