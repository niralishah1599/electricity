<?php
session_start();
include("nav.php");
$contact = $_GET['contact'];
?>
<br><br>	
		
		<div class="row">
		<div class="panel panel-primary">
    <div class="panel-heading text-center">
            Send Confimation Message
    </div>
    <div class="panel-body">
    	<div class="col-md-9 col-md-offset-3"><br><br>
				<form class="form-horizontal">
					<div class="form-group">
						<label class="label-control col-md-1 col-md-offset-1">Phone</label>
						<div class="col-md-5">
							<input type="text" class="form-control" id="phone" value="<?php echo $contact;?>" readonly />
						</div>
					</div><!-- form-group -->
					<div class="form-group">
						<label class="label-control col-md-1 col-md-offset-1">Message</label>
						<div class="col-md-5">
							<input type="text" class="form-control" id="msg" value=" " style="height:100px;" required />
						</div>
					</div><!-- form-group -->
					<br><br><div class="form-group">
						<label class="label-control col-md-3"></label>
						<div class="col-md-5 ">
							<button class="btn btn-success" id="send" type="button">Send Confirm Message</button>
						</div>
					</div><!-- form-group -->
				</form>
			</div><!-- col-md12 -->
	</div>
	</div>
		</div><br><br><!-- row -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>  
		<script type="text/javascript">
		$("#send").click(function(){
			var m=$("#phone").val();
			var msg=$("#msg").val();
			$.ajax({
				url:'sendsms.php',
				data:{msg:msg,phone:m},
				type:'POST',
				success:function(data){alert(data);},
				error:function(data){alert(data);}
			});
		});
		</script>
	
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>	
<?php
	include("footer.php");
?>