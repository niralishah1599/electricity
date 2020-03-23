<?php
session_start();
?>
<html>
<head>
    <title>feedback</title>
    <meta name="viewport" content="width-device-width,initial-scale=1.0">
</head>
<body style="background:#eee;">
    <?php
        include("navigation.php");
    ?>
	
	<div class="row"><br/><br/><br/><br/><br/>
					<div class="panel panel-warning col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1 loginpanel">
					<form action="feedback.php" method="post" class="form-horizontal"> 
						<div class="panel-heading text-center">
								<h3 style="color:white;">Give a Feedback</h3>
						</div>
						<div class="panel-body">	
						<br/>
						<?php
						if(isset($_POST['submit']))
							{
								include('connection.php');
								$name=$_POST['name'];
								$email=$_POST['email'];
								$contact=$_POST['contact'];
								$msg=$_POST['address'];
								$query=mysqli_query($con,"INSERT INTO feedback VALUE ('$name','$email','$contact','$msg')");
								if($query)
								{
									echo "<div style='font-family:Berlin Sans FB;' class='alert alert-success'>";
											echo "<h4 class='text-center'>Thank You , Give Your Feedback.</h4>";
											echo "</div>";
								}
								else
								{
									echo "<div style='font-family:Berlin Sans FB;' class='alert alert-danger'>";
											echo "<h4 class='text-center'>Sorry , Try Again....</h4>";
											echo "</div>";
								}
							}
						?>
						<br/>
						
							<div class="form-group">
								<div class="col-md-offset-1">
									<label class="control-label col-md-3"><h5>Enter Name :</h5></label>
								</div>
								<div class="col-md-7">
									<input type="text" name="name" value="" placeholder="Your Name*"
									pattern="[a-zA-Z]{2,}" title="Please Enter Your Name." required  class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-offset-1">
									<label class="control-label col-md-3"><h5>Enter Email</h5></label>
								</div>
								<div class="col-md-7">
									<input type="email" name="email" value="" placeholder="Your Email *" required  class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-offset-1">
									<label class="control-label col-md-3"><h5>Enter Contact</h5></label>
								</div>
								<div class="col-md-7">
									<input type="text" name="contact" value="" placeholder="Your Contact *" 
									pattern=[0-9+]{10,13} title="Please Enter Valid Contact No." required class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-offset-1">
									<label class="control-label col-md-3"><h5>Enter Message</h5></label>
								</div>
								<div class="col-md-7">
									<textarea class="form-control" name="address" placeholder="Your Message *"
									pattern="[a-zA-Z0-9.@-/\]{10,80}" title="Please Enter Valid Address.." id="message" required></textarea>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-3 col-md-offset-5 col-sm-1 col-xs-offset-3">
								<input type="submit" name="submit" value="Send Feedback" class="btn btn-success" ><br>
								</div>
							</div>
						</div>
						
						<div class="panel-footer text-center">
							
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
