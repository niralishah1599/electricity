<?php
SESSION_START();
include("connection.php");
?>
<html>
<?php
    include("navigation.php");
?>
<body style="background:#eee;">

<div class="container">
    <form action="paypal.php?sandbox=1" method="POST"> <?php // remove sandbox=1 for live transactions ?>
    <input type="hidden" name="action" value="process" />
    <input type="hidden" name="cmd" value="_cart" /> <?php // use _cart for cart checkout ?>
    <input type="hidden" name="currency_code" value="Rs." />
    <input type="hidden" name="invoice" value="<?php echo date("His").rand(1234, 9632); ?>" />
				<div class="row"><br><br><br><br><br>
					<div class="panel panel-info col-md-10 col-md-offset-1 loginpanel">
						<div class="panel-heading text-center">
								<h4>Provide a Payment Details</h4>
						</div>
						<div class="panel-body">
						
						<form action="login.php" method="post" class="form-horizontal">
							
							<div class="form-group">
								<div class="col-md-3 col-md-offset-1">
									<label class="text-center">Product ID</label>
								</div>
								<div class="col-md-7">
									<input type="text" name="pid" value="<?php echo $_GET['id'] ?>" class="form-control">
								</div><br/><br/>
							</div>
	
							<div class="form-group">
								<div class="col-md-3 col-md-offset-1">
									<label class="text-center">Product Name</label>
								</div>
								<div class="col-md-7">
									<input type="text" name="pname" value="<?php echo $_GET['productname'] ?>" class="form-control">
								</div><br/><br/>
							</div>
							
							<div class="form-group">
								<div class="col-md-3 col-md-offset-1">
									<label class="text-center">Quantity</label>
								</div>
								<div class="col-md-7">
									<input type="text" name="pquantity" value="1" class="form-control">
								</div><br/><br/>
							</div>
							
							<div class="form-group">
								<div class="col-md-3 col-md-offset-1">
									<label class="text-center">Amount(Rs.)</label>
								</div>
								<div class="col-md-7">
									<input type="text" name="product_amount" value="<?php 
                                                                $p=$_GET['price'];
                                                                $m=$p/63;
                                                                $price = round($m,2);
                                                                echo $price; 
                                                                ?>" class="form-control">
								</div><br/><br/>
							</div>
							
							<div class="form-group">
								<div class="col-md-3 col-md-offset-1">
									<label class="text-center">First Name</label>
								</div>
								<div class="col-md-7">
									<input type="text" name="payer_fname" placeholder="Enter First Name" value="" class="form-control">
								</div><br/><br/>
							</div>
							
							<div class="form-group">
								<div class="col-md-3 col-md-offset-1">
									<label class="text-center">Last Name</label>
								</div>
								<div class="col-md-7">
									<input type="text" name="payer_lname" placeholder="Enter Last Name" value="" class="form-control">
								</div><br/><br/>
							</div>
							
							<div class="form-group">
								<div class="col-md-3 col-md-offset-1">
									<label class="text-center">Address </label>
								</div>
								<div class="col-md-7">
									<textarea class="form-control" name="payer_address" placeholder="Enter Address" id="message" required></textarea><br>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-3 col-md-offset-1">
									<label class="text-center">City Name</label>
								</div>
								<div class="col-md-7">
									<input type="text" name="payer_city" placeholder="Enter City" value="" class="form-control"><br>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-3 col-md-offset-1">
									<label class="text-center">State</label>
								</div>
								<div class="col-md-7">
									<input type="text" name="payer_state" placeholder="Enter State" value="" class="form-control"><br>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-3 col-md-offset-1">
									<label class="text-center">zip Code</label>
								</div>
								<div class="col-md-7">
									<input type="text" name="payer_zip" placeholder="Enter Zip Code" value="" class="form-control"><br>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-3 col-md-offset-1">
									<label class="text-center">Country</label>
								</div>
								<div class="col-md-7">
									<input type="text" name="payer_country" placeholder="Enter Country." value="" class="form-control"><br>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-3 col-md-offset-1">
									<label class="text-center">Email</label>
								</div>
								<div class="col-md-7">
									<input type="text" name="payer_email" placeholder="Enter Email" value="" class="form-control"><br>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-3 col-md-offset-4 col-sm-1">
								<input type="submit" name="login" value="Checkout" class="btn btn-success" ><br>
							</div>
                </div>
						</div>
						<div class="panel-footer text-center">
								
						</div>
					</div>
			</div>
		</div>
	</form>
		
<?php
    include("footer.php");
?>
</body>
</html>
