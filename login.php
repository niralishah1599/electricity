<?php
session_start();
if(isset($_SESSION['email']))
{
    $c="<a href=logout.php>Logout</span></a>";
}
else
{
$c="<span>Login</span>";
}
?>
<html>
	<head>
        <meta name="viewport" content="width-device-width,initial-scale=1.0">
		<title>Login</title>
	</head>
	<body style="background:#eee;">
	<?php
        include("navigation.php");
    ?>
		<div class="container">
				<div class="row"><br><br><br><br><br><br>
					<div class="panel panel-info col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1 loginpanel">
						<div class="panel-heading text-center">
								<h4>Login Information</h4>
						</div>
						<div class="panel-body">
						<?php
						if(isset($_POST["login"]))
							{
								$con=mysqli_connect("localhost","root","");
								if($con)
								{
									$db=mysqli_select_db($con,"eletricity");
									{	
										
										$password=mysqli_real_escape_string($con,$_POST["password"]);
										$email=mysqli_real_escape_string($con,$_POST["email"]);
										
										$f="select * from register where email='$email' and password='$password'";
										$q=mysqli_query($con, $f) or die(mysqli_error($con));
										//$q=mysqli_query($con,$f);
										$rows=mysqli_num_rows($q);
										if($rows>0)
										{
											$_SESSION["email"]=$email;
											echo $_SESSION['email'];
											header("location:homepage.php");
											
										}
										else 
										{
											$f="select * from alogin where email='$email' and password='$password'";
											$q=mysqli_query($con,$f);
											$rows=mysqli_num_rows($q);
											if($rows>0)
											{
												$_SESSION["email"]=$email;
											   header("location:admin/adminhome.php");
												
											}
											else
											{
												echo "<div style=\"font-family:Berlin Sans FB;\" class='alert alert-danger'>";
												echo "<center>SORRY , Check your password OR User Name</center>";
												echo "</div>";
											}
										}
									}
								}
							}
						?>
						<form action="login.php" method="post" class="form-horizontal">
							<div class="form-group">
								<div class="col-md-offset-1">
									<label class="control-label col-md-4"><h5>Enter Email *</h5></label>
								</div>
								<div class="col-md-6 col-xs-12">
									<input type="email"  name="email" placeholder="  Enter User Name" required class="form-control">
								</div>
							</div>
				
							<div class="form-group">
								<div class="col-md-offset-1">
									<label class="control-label col-md-4"><h5>Enter Password *<h5></label>
								</div>
								<div class=" col-md-6 col-xs-12">
									<input type="password"  name="password" placeholder="  Enter password" pattern="[a-zA-Z0-9@.]{8,}"
									title="Please Enter Minimum 8 Character." required class="form-control"><br>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-3 col-md-offset-5 col-sm-1 col-xs-offset-3">
								<input type="submit" name="login" value="LOG-IN" class="btn btn-success" ><br><br>
							</div>
						 
							<div class="col-md-6 col-md-offset-7">
								<div class="text-center">
									<a href="forgotten.php" style="color:black;"> Forgot Password ? </a>
								</div>
							</div>
                </div>
						</div>
						<div class="panel-footer text-center">
								<h5><a href="register.php">Now User ? Sign Up Now</a></h5>
						</div>
					</div>
			</div>
		</div>

		
		
		<?php
			include("footer.php");
		?>
</body>
</html>
