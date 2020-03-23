<?php
session_start();
?>
<!doctype html>
<html>
	<head>
        <title>forgotten</title>
	</head>
	<body style="background:#eee;">
	<?php
		include("navigation.php");
	?>
           <div class="container">
				<div class="row"><br><br><br><br><br><br>
					<div class="panel panel-primary col-md-6 col-xs-10 col-xs-offset-1 col-md-offset-3">
						<div class="panel-heading text-center">
								<h4 style="color:white;">Forgot Password ?</h4>
						</div>
						
						<div class="panel-body">
						
						<form action="forgotten.php" method="post" class="form-horizontal">
						
							<div class="form-group">
							
							<?php   
							if(isset($_POST['submit']))
							{
								$con=mysql_connect('localhost','root','') or die(mysql_error());
								mysql_select_db("eletricity") or die(mysql_error());
								
								include("connection.php");
										$email=$_POST["email"];
										$question=$_POST["sec_question"];
										$answer=$_POST["answer"];
										$r="select email,sec_question,answer from register where email='$email' and sec_question='$question' and answer='$answer'";
										$query=mysql_query($r);
										$num=mysql_num_rows($query);
										if($num>0)
										{
											if($question!=$answer)
											{
											   header("location:forgotchanged.php?email=$email");
											}
										}
										else
										{
											echo "<div 
											style=\"width:100%;
											background:#db402c;
											color:white;
											position:absolute;
											padding:1%;
											margin:-23% 0 0 0;
											<div style=\"font-family:Berlin Sans FB;\">";
											echo "<h4 class='text-center'>Your password Do Not Match ...!</h4>";
											echo "</div>";
											
										}
							}
							?>
								<div class="col-md-offset-1">
									<label class="control-label col-md-4"><h5>Enter Email *</h5></label>
								</div>
								<div class="col-md-6 col-xs-12">
									<input type="email"  name="email" placeholder="  Enter User Name"  class="form-control" required>
								</div>
							</div>
							
							 <div class="form-group">
							 <div class="col-md-offset-1">
									<label class="control-label col-md-4"><h5>Select Question*</h5></label>
							 </div>
							 <div class="col-md-6 col-xs-12">
							  <select class="form-control" type="dropdown" id="question" name="sec_question" required>
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
								<div class="col-md-offset-1">
									<label class="control-label col-md-4"><h5>Enter Answer *<h5></label>
								</div>
								<div class=" col-md-6 col-xs-12">
									<input type="password"  name="answer" placeholder="  Enter password" class="form-control" required><br>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-3 col-md-offset-5 col-xs-offset-4 col-sm-1">
								<input type="submit" name="submit" value="Next" class="btn btn-success" ><br>
							</div>
						 
                </div>
						</div>
						
					</div>
			</div>
		</div>
			<!--<section id="forgot">
                    <form action="forgotten.php" method="post">
                        <table>
                            <tr>
                                <td><input type="text"  name="email" placeholder="Enter User Name" class="forgotunm" ></td>
                            </tr>
                       <tr>
						<td><select class="dropdown" type="dropdowm" name="sec_question">
						<option value="---Select Any One---" selected>---select Any One---</option>
                        <option value="what is your First mobile Number ?">what is your First mobile Number ?</option>
						<option value="what is your Favoriate color ?">what is your Favoriate color ?</option>
						<option value="what is your your Best Friend ?">what is your your Best Friend ?</option>
						<option value="what is your first Dream Job ?">what is your first Dream Job ?</option>
						<option value="what is your favoriate hobby ?">what is your favoriate hobby ?</option>	
                            </select></td>
                            </tr>
                        <tr>
                            <td><input class="forgotpwd" type="text"  name="answer" placeholder="  Answer here"></td>
                            </tr>
                        <tr>
                            <td><input class="forgotbtn" type="submit" name="submit" value="Submit" /></td>
                        </tr>
                        </table>
				</form>
                </section>-->
		<?php
		include("footer.php");
	?>
	</body>
</html>




?>