<?php
    session_start();
?>  


<html>
    <head>
        <title>Shift a Meter</title>
    </head>
    <body>
        <?php
            include("navigation.php");
        ?>
		
		<div class="row"><br/><br/><br/><br/>
					<div class="panel panel-warning col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1 loginpanel">
					<form action="shiftingmeter.php" method="post" enctype="multipart/form-data" class="form-horizontal"> 
						<div class="panel-heading text-center">
								<h3 style="color:white;">Shifting Connection Form</h3>
						</div>
						<div class="panel-body">	
						<br/>
						<?php
						if(isset($_POST["submit"]))
									{
									$con=mysql_connect("localhost","root","") or die(mysql_error());
									{
										mysql_select_db("eletricity",$con) or die(mysql_error());
										{   
												$fname=$_POST['fname'];
												$lname=$_POST['lname'];
												$supply=$_POST['supply'];
												$flatno=$_POST['flatno'];
												$society=$_POST['society'];
												$streetno1=$_POST['streetno1'];
												$streetno2=$_POST['streetno2'];
												$city=$_POST['city'];
												$zipcode=$_POST['zipcode']; 
												$email=$_POST['email'];
												
												$contact=$_POST['contact'];
												$catsupply=$_POST['catsupply'];
												
												$doc=$_FILES['upload'];
												$path="report/ShiftingMeter/";
												$target=$path.basename($_FILES['upload']['name']);
												$image=pathinfo($target,PATHINFO_EXTENSION);
												if(move_uploaded_file($_FILES['upload']['tmp_name'],$target))
													{
													   
														$ins_con=mysql_query("INSERT INTO shf_meter values('$fname', '$lname', '$supply', '$flatno', '$society', '$streetno1', '$streetno2', '$city', '$zipcode', '$email', '$contact', '$catsupply','$target')");
															
														 if($ins_con)
															{
																echo "<div style=\"font-family:Berlin Sans FB;\" class='alert alert-success'>";
														echo "<h4 class='text-center'>Your Details Are Sending Successfully...</h4>";
														echo "</div>";
															}
														else
														{
															echo "<div style=\"font-family:Berlin Sans FB;\" class='alert alert-danger'>";
														echo "<h4 class='text-center'>Sorry Try Again....</h4>";
														echo "</div>";
														}
											}
										}
									}   
								}
?>
						
					 		<div class="form-group">
								<div class="col-md-5 col-md-offset-1">
									<input type="text" name="fname" value="" placeholder="First Name"  class="form-control">
								</div>
								<div class="col-md-5 inputpadding">
									<input type="text" name="lname" value="" placeholder="Last Name"  class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-3 col-md-offset-1">
									<label> Select Supply Type</label>
								</div>
								<div class="col-md-6 col-xs-offset-1">
									<div class="radio">
										  <label><input type="radio" name="supply" value="Single" checked>Single Phase</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										  <label><input type="radio" name="supply" value="Three">Three Phase</label>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-5 col-md-offset-1">
									<label class="text-left">Type A New Address *</label>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-5 col-md-offset-1">
									<input type="text" name="flatno" value="" placeholder="Flat No."  class="form-control">
								</div>
								<div class="col-md-5 inputpadding">
									<input type="text" name="society" value="" placeholder="Society Name"  class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-5 col-md-offset-1">
									<input type="text" name="streetno1" value="" placeholder="Street No.1"  class="form-control">
								</div>
								<div class="col-md-5 inputpadding">
									<input type="text" name="streetno2" value="" placeholder="Street No.2"  class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-5 col-md-offset-1">
									<input type="text" name="city" value="" placeholder="Enter City"  class="form-control">
								</div>  
								<div class="col-md-5 inputpadding">
									<input type="text" name="zipcode" value="" placeholder="Enter Zip Code"  class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-5 col-md-offset-1">
									<input type="text" name="email" value="" placeholder=" Email"  class="form-control">
								</div>
								<div class="col-md-5 inputpadding">
									<input type="text" name="contact" value="" placeholder=" Contact No."  class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-3 col-md-offset-1">
									<label> Supply Category</label>
								</div>
								<div class="col-md-6 col-xs-offset-1">
									<div class="radio">
										  <label><input type="radio" name="catsupply" value="Residental" checked>Residental</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										  <label><input type="radio" name="catsupply" value="Industrial">Industrial</label>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-3 col-md-offset-1">
									<label></label>
								</div>
								<div class="col-md-6 col-xs-offset-1">
									<div class="radio">
										  <label><input type="radio" name="catsupply" value="Malls" checked>Malls</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										  <label><input type="radio" name="catsupply" value="Temporary">Temporary</label>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-3 col-md-offset-1">
									<label> Document :</label>
								</div>
								<div class="col-md- col-md-offset-1 col-xs-offset-1">
									<input class="col-md-offset-1 " name="upload" id="file" type="file"></span>
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
                                                                                                  