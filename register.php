<?php
    session_start();
?>

<!doctype html>
<html>
	<head>
		<link href="main2.css" type="text/css" rel="stylesheet">
        <meta name="viewport" content="width-device-width,initial-scale=1.0">
	</head>
<body>
    <?php
        include("navigation.php");
    ?>
	<div class="row"><br/><br/><br/><br/><br/>
					<div class="panel panel-warning col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1 loginpanel">
					<form action="register.php" method="post" class="form-horizontal"> 
						<div class="panel-heading text-center">
								<h3 style="color:white;">REGISTER NOW</h3>
						</div>
						<div class="panel-body">	
						<br/>
					<?php
						if(isset($_POST['submit']))
							{
								$con=mysqli_connect("localhost","root","");
								{
									$db=mysqli_select_db($con,"eletricity");
									{
										$fnm=$_POST["fname"];
										$lnm=$_POST["lname"];
										$pwd1=$_POST["password"];
										$pwd2=$_POST["password2"];
										$email=$_POST["email"];
										$que=$_POST["sec_question"];
										$ans=$_POST["answer"];
										$add=$_POST["address"];
										$city=$_POST["city"];
										$state=$_POST["state"];
										if($pwd1 != $pwd2)
										{
										echo "<div style=\"position:absolute;width:100%;background:#db402c;color:white;padding:1%;margin:0 auto;font-family:Berlin Sans FB;\">";
										echo "<center>SORRY , Your Password Don't Match .</center>";
										echo "</div>";
										}
										else
										{
													$r="INSERT INTO `register`(`fname`, `lname`, `email`, `password`, `sec_question`, `answer`, `address`,`city`, `State`) VALUES ('$fnm','$lnm','$email','$pwd1','$que','$ans','$add','$city','$state')";
													$query=mysqli_query($con,"$r");
													if($query)
													{
													header("location:homepage.php");
													}
													else
													{
													echo "<div style=\"font-family:Berlin Sans FB;\" class='alert alert-danger'>";
													echo "<h4 class='text-center'>Please , Fill Valid Information.</h4>";
													echo "</div>";
													}
										}
									}
								}
							}

?>
							<div class="form-group">
								<div class="col-md-5 col-md-offset-1">
									<input type="text" name="fname" value="" placeholder="Enter Frist Name"  class="form-control">
								</div>
								<div class="col-md-5 inputpadding">
									<input type="text" name="lname" value="" placeholder="Enter Last Name"  class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-10 col-md-offset-1">
									<input type="text" name="email" value="" placeholder="Enter Email"  class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-5 col-md-offset-1">
									<input type="password" name="password" value="" placeholder="Enter Password"  class="form-control">
								</div>
								<div class="col-md-5 inputpadding">
									<input type="password" name="password2" value="" placeholder="Enter Confirm Password"  class="form-control">
								</div>
							</div>
							
							<div class="form-group">
							 <div class="col-md-10 col-md-offset-1 col-xs-12">
							  <select class="form-control" type="dropdown" id="question" name="sec_question">
								<option value="---Select Any One---" selected>---select Any One---</option>
								<option value="what is your First mobile Number ?">what is your First mobile Number ?</option>
								<option value="what is your Favoriate color ?">what is your Favoriate color ?</option>
								<option value="what is your your Best Friend ?">what is your your Best Friend ?</option>
								<option value="what is your first Dream Job ?">what is your first Dream Job ?</option>
								<option value="what is your favoriate hobby ?">what is your favoriate hobby ?</option>
							   </select>
							  </div>
							</div>
							
							<div class="form-group">
								<div class="col-md-10 col-md-offset-1">
									<input type="password" name="answer" value="" placeholder="Enter Security Answer"  class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-10 col-md-offset-1">
									<textarea class="form-control" name="address" placeholder="Enter Address" id="message" required></textarea>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-5 col-md-offset-1">
									<input type="text" name="city" value="" placeholder="Enter City"  class="form-control">
								</div>
								<div class="col-md-5 inputpadding">
									<input type="text" name="state" value="" placeholder="Enter State"  class="form-control">
								</div>
							</div>
							
							<div class="form-group"><br/>
								<div class="col-md-3 col-md-offset-4 col-xs-offset-2 col-sm-1">
								<input type="submit" name="submit" value="REGISTER NOW" class="btn btn-success" ><br>
								</div>
							</div>
						</div>
						
						<div class="panel-footer text-center">
							 <h4>Already User ?<a href="login.php"> Login Now </a></h4>
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
