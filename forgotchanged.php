<?php
$email=$_GET['email'];
?>
<html>
	<head>
        <title>forgotten</title>
	</head>
    <body style="background:#eee;">
   				<div class="container">
				<div class="row"><br><br><br><br><br><br><br><br>
					<div class="panel panel-primary col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1 loginpanel">
						<div class="panel-heading text-center">
								<h4>Login Information</h4>
						</div>
						<div class="panel-body">
						<?php
							include("navigation.php");
							if(isset($_POST['submit']))
							{
								mysql_connect('localhost','root','') or die(mysql_error());
								mysql_select_db("eletricity") or die(mysql_error());
								$pwd=$_POST['password1'];
								$pwd2=$_POST['password2'];

								if($pwd==$pwd2)
								{
									$r="update register set password='$pwd' where email='$email'";   
									$query=mysql_query($r) or die(mysql_error());
									if($query)
									{
										header("location:homepage.php");    
									}
								}
								else
								{
									echo "<div style=\"font-family:Berlin Sans FB;\" class='alert alert-danger'>";
									echo "<h4 class='text-center'>SORRY , Your Password Don't Match ! </center>";
									echo "</div>";
								}
							}
						?>
						<form action="forgotchanged.php?email=<?php echo $email ?>" method="post" class="form-horizontal"><br><br>
							<div class="form-group">
								<div class="col-md-offset-1">
									<label class="control-label col-md-4"><h5>Enter Password*</h5></label>
								</div>
								<div class="col-md-6 col-xs-12">
									<input type="password"  name="password1" placeholder="  Enter Password" pattern="[a-zA-Z0-9@.]{8,}" title="Please Enter Minimum 8 Character."  class="form-control">
								</div>
							</div>
				
							<div class="form-group">
								<div class="col-md-offset-1">
									<label class="control-label col-md-4"><h5>Confirm Password *<h5></label>
								</div>
								<div class=" col-md-6 col-xs-12">
									<input type="password"  name="password2" placeholder="  Confirm password" pattern="[a-zA-Z0-9@.]{8,}" title="Please Enter Minimum 8 Character." class="form-control"><br>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-3 col-md-offset-5 col-sm-1 col-xs-offset-2">
								<input type="submit" name="submit" value="Change Password" class="btn btn-success" ><br><br><br>
							</div>
							
                </div>
						</div>
					</div>
			</div>
		</div>
			   
            <?php
                include("footer.php");
            ?>
        
	</body>
</html>


