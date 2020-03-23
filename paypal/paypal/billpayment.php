<?php
session_start();
?>
<html>
    <head>
        <title>bill payment demo</title>
	</head>
    <body style="background:#eee;">
        <?php
            include("navigation.php");
        ?>
		<div class="container">
				<div class="row"><br><br><br><br><br><br><br><br>
					<div class="panel panel-info col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3" id="form">
						<div class="panel-heading text-center">
								<h4>Check Your Bill Payment Information</h4>
						</div>
						<div class="panel-body">
						<?php

							if(isset($_POST['display']))
							{
								$con=mysql_connect('localhost','root','') or die(mysql_error());
									mysql_select_db("eletricity") or die(mysql_error());
									$billid=$_POST['bill_no'];
									$r="select * from billpayment where bill_no='$billid'";
									
									$query=mysql_query($r) or die(mysql_error());
									$m=mysql_fetch_row($query);
									if(mysql_num_rows($query)>0)
									{
									?>
										<input type="text" id="tr" value="1">
									<?php
									}
									else
									{
										echo "<div class='alert alert-danger'>Not Found</div>";
									}                        
							}
						
						?>   
						<form action="billpayment.php" method="post" class="form-horizontal"><br/><br/><br/>
							<div class="form-group">
								<div class="col-md-offset-1">
									<label class="control-label col-md-4"><h5>Enter Bill No *</h5></label>
								</div>
								<div class="col-md-6 col-xs-12">
									<input type="text"  name="bill_no" placeholder="  Enter Bill No." pattern="[a-zA-Z0-9]{8}"
									title="Please Valid Enter Bill No." required  class="form-control">
								</div>
							</div>

							<div class="form-group"><br/>
								<div class="col-md-3 col-md-offset-4 col-sm-1">
								<input type="submit" id="sub" name="display" value="Check Bill" class="btn btn-success col-xs-offset-4" ><br>
							</div>
						 
                </div>
						</div>
						<div class="panel-footer text-center">
								<h5><a href="register.php"></a></h5>
						</div>
					</div>
			</div>
		</div>
            
        </form>
        </center>
        <div style="display:none;"id="info">
            <br>
                <form action="billpaypal.php?sandbox=1" method="post" class="form-horizontal"> <?php // remove sandbox=1 for live transactions ?>
                <input type="hidden" name="action" value="process" />
                <input type="hidden" name="cmd" value="_cart" /> <?php // use _cart for cart checkout ?>
                <input type="hidden" name="currency_code" value="Rs." />
                <input type="hidden" name="invoice" value="<?php echo date("His").rand(1234, 9632); ?>" />
				<div class="row">
					<div class="panel panel-info col-md-6 col-md-offset-3 loginpanel">
						<div class="panel-heading text-center">
								<h4>Enter Payment Information</h4>
						</div>
						<div class="panel-body">	
							<div class="form-group">
								<div class="col-md-offset-1 col-xs-offset-1">
									<label class="control-label col-md-3"><h5>Enter Bill Id</h5></label>
								</div>
								<div class="col-md-7 col-xs-10 col-xs-offset-1">
									<input type="text" name="Bill_id"  value="<?php echo $billid; ?>" pattern="[a-zA-Z0-9]{8}"
									title="Please Valid Enter Bill No." readonly class="form-control">
								</div>
							</div>
							 <?php
								$_SESSION['bill_no']=$billid;
							?>
							<div class="form-group">
								<div class="col-md-offset-1 col-xs-offset-1">
									<label class="control-label col-md-3"><h5>Enter Bill No</h5></label>
								</div>
								<div class="col-md-7 col-xs-10 col-xs-offset-1">
									<input type="text" name="bill_no"  value="<?php echo $m[1]; ?>" pattern="[a-zA-Z0-9]{8}" title="Please Valid Enter Bill No." readonly  class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-offset-1 col-xs-offset-1">
									<label class="control-label col-md-3"><h5>Enter Contact No.</h5></label>
								</div>
								<div class="col-md-7 col-xs-10 col-xs-offset-1">
									<input type="text" name="customer_id" value="" pattern="[+0-9]{10,13}" 
									title="please Enter Valid Contact No." required class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-offset-1 col-xs-offset-1">
									<label class="control-label col-md-3"><h5>Amount (USD).</h5></label>
								</div>
								<div class="col-md-7 col-xs-10 col-xs-offset-1">
									<input type="text" name="product_amount" value="<?php $p=$m[3];
																			  $n=$p/63;
																			  echo round($n);
																				?>" readonly  class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-offset-1 col-xs-offset-1">
									<label class="control-label col-md-3"><h5>Enter First Name</h5></label>
								</div>
								<div class="col-md-7 col-xs-10 col-xs-offset-1">
									<input type="text" name="payer_fname" value="" pattern="[a-zA-Z]{2,}" 
									title="Please Enter First Name." required class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-offset-1 col-xs-offset-1">
									<label class="control-label col-md-3"><h5>Enter Last Name</h5></label>
								</div>
								<div class="col-md-7 col-xs-10 col-xs-offset-1">
									<input type="text" name="payer_lname" value="" pattern="[a-zA-Z]{2,}" 
									title="Please Enter Last Name." required class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-offset-1 col-xs-offset-1">
									<label class="control-label col-md-3"><h5>Enter Address</h5></label>
								</div>
								<div class="col-md-7 col-xs-10 col-xs-offset-1">
									<input type="text" name="payer_address" value="" pattern="[a-zA-Z0-9.@/\]{10,80}" 
									title="Please Enter Valid Address." required  class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-offset-1 col-xs-offset-1">
									<label class="control-label col-md-3"><h5>Enter City</h5></label>
								</div>
								<div class="col-md-7 col-xs-10 col-xs-offset-1">
									<input type="text" name="payer_city" value=""  pattern="[a-zA-Z]{2,}" 
									title="Please Enter Valid City Name." required class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-offset-1 col-xs-offset-1">
									<label class="control-label col-md-3"><h5>Enter State</h5></label>
								</div>
								<div class="col-md-7 col-xs-10 col-xs-offset-1">
									<input type="text" name="payer_state" value="" pattern="[a-zA-Z]{2,}"
									title="Please Enter Valid State Name." required class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-offset-1 col-xs-offset-1">
									<label class="control-label col-md-3"><h5>Enter Zip</h5></label>
								</div>
								<div class="col-md-7 col-xs-10 col-xs-offset-1">
									<input type="text" name="payer_zip" value="" pattern="[0-9]{5,9}" 
									title="Please Enter valid Zpi Code." required class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-offset-1 col-xs-offset-1">
									<label class="control-label col-md-3"><h5>Enter Country</h5></label>
								</div>
								<div class="col-md-7 col-xs-10 col-xs-offset-1">
									<input type="text" name="payer_country" value=""  pattern="[a-zA-Z]{2,}"
									title="Please valid Country Name." required class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-offset-1 col-xs-offset-1">
									<label class="control-label col-md-3"><h5>Enter Email</h5></label>
								</div>
								<div class="col-md-7 col-xs-10 col-xs-offset-1">
									<input type="email" name="payer_email" value="<?php echo $m[4]; ?>" readonly class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-3 col-md-offset-5 col-sm-1 col-xs-offset-4">
								<input type="submit" name="billpayment" value="Pay a Bill" class="btn btn-success" ><br>
								</div>
							</div>
						</div>
						
						<div class="panel-footer text-center">
							
						</div>
					</div>
			</div>
		</div>
    </form>       
        </div>
		<br><br>
            
<script>
     var tru = document.getElementById("tr").value;
    if(tru==1) 
   {
        $("#form").css("display","none");
        $("#info").css("display","block");
       $("#tr").css("display","none");
   }
    else
    {
         $("#form").css("display","block");
    }
</script>
 
<?php
    include("footer.php");
?>
   
    </body>
</html>