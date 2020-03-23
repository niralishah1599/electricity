<?php
session_start();
$billid=$_SESSION["bill_no"];
echo $billid;
include("connection.php");
require_once("library.php"); // include the library file
define('EMAIL_ADD', 'rknakum07@gmail'); // define any notification email
define('PAYPAL_EMAIL_ADD', 'rknakum07@gmail'); // facilitator email which will receive payments change this email to a live paypal account id when the site goes live
require_once("paypal_class.php");
$p 				= new paypal_class(); // paypal class
$p->admin_mail 	= EMAIL_ADD; // set notification email
$action 		= $_REQUEST["action"];

switch($action){
	
    case "process": // case process insert the form data in DB and process to the paypal
		mysqli_query($con,"INSERT INTO `purchases` VALUES ('".$_POST["invoice"]."', '".$_POST["Bill_id"]."', '".$_POST["bill_no"]."', '".$_POST["customer_id"]."', '".$_POST["product_amount"]."', '".$_POST["payer_fname"]."', '".$_POST["payer_lname"]."', '".$_POST["payer_address"]."', '".$_POST["payer_city"]."', '".$_POST["payer_state"]."', '".$_POST["payer_zip"]."', '".$_POST["payer_country"]."', '".$_POST["payer_email"]."', 'pending', NOW())");
		$this_script = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
        $homepageurl='http://localhost/eletricity/homepage.php';
		$pdfurl='http://localhost/eletricity/pdf.php';
		$p->add_field('business', 'rknakum07@gmail.com'); // Call the facilitator eaccount
		$p->add_field('cmd', $_POST["cmd"]); // cmd should be _cart for cart checkout
		$p->add_field('upload', '1');
		$p->add_field('return', $pdfurl.'?action=success&billid='.$billid.''); // return URL after the transaction got over
		$p->add_field('cancel_return', $homepageurl.'?action=cancel'); // cancel URL if the trasaction was cancelled during half of the transaction
		$p->add_field('notify_url', $homepageurl.'?action=ipn'); // Notify URL which received IPN (Instant Payment Notification)
		$p->add_field('currency_code', $_POST["currency_code"]);
		$p->add_field('invoice', $_POST["invoice"]);
		$p->add_field('item_name_1', $_POST["Bill_id"]);
		$p->add_field('item_number_1', $_POST["bill_no"]);
		$p->add_field('quantity_1', '1');
		$p->add_field('amount_1', $_POST["product_amount"]);
		$p->add_field('first_name', $_POST["payer_fname"]);
		$p->add_field('last_name', $_POST["payer_lname"]);
		$p->add_field('address1', $_POST["payer_address"]);
		$p->add_field('city', $_POST["payer_city"]);
		$p->add_field('state', $_POST["payer_state"]);
		$p->add_field('country', $_POST["payer_country"]);
		$p->add_field('zip', $_POST["payer_zip"]);
		$p->add_field('email', $_POST["payer_email"]);
		$p->submit_paypal_post(); // POST it to paypal
		$p->dump_fields(); // Show the posted values for a reference, comment this line before app goes live
	break;
	
	case "success": // success case to show the user payment got success
		echo '<title>Payment Done Successfully</title>';
		echo '<style>.as_wrapper{
	font-family:Arial;
	color:#333;
	font-size:14px;
	padding:20px;
	border:2px dashed #17A3F7;
	width:600px;
	margin:0 auto;
}</style>
';		echo '<div class="as_wrapper">';
		echo '<h1>$billid<br>Payment Transaction Done Successfully</h1>';
		echo '<h4>Use this below URL in paypal sandbox IPN Handler URL to complete the transaction</h4>';
        echo '<p><h4>Go To homepage click Here</h4><br>
				<h3><a href="homepage.php">Go To Homepage</a></h3><br>
				<h3><a >Download Invoice</h3></p>';
		
		echo '</div>';
	break;
	
	case "cancel": // case cancel to show user the transaction was cancelled
		echo "<h1>Transaction Cancelled";
        redirect(solarproduct.php);
	break;
	
	case "ipn": // IPN case to receive payment information. this case will not displayed in browser. This is server to server communication. PayPal will send the transactions each and every details to this case in secured POST menthod by server to server. 
			$trasaction_id  = $_POST["txn_id"];
		$payment_status = strtolower($_POST["payment_status"]);
		$invoice		= $_POST["invoice"];
		$log_array		= print_r($_POST, TRUE);
		$log_query		= "SELECT * FROM `paypal_log` WHERE `txn_id` = '$trasaction_id'";
		$log_check 		= mysqli_query($con,$log_query);
		if(mysqli_num_rows($log_check) <= 0){
			mysqli_query($con,"INSERT INTO `paypal_log` (`txn_id`, `log`, `posted_date`) VALUES ('$trasaction_id', '$log_array', NOW())");
		}else{
			mysqli_query($con,"UPDATE `paypal_log` SET `log` = '$log_array' WHERE `txn_id` = '$trasaction_id'");
		} // Save and update the logs array
		$paypal_log_fetch 	= mysqli_fetch_array(mysqli_query($con,$log_query));
		$paypal_log_id		= $paypal_log_fetch["id"];
		if ($p->validate_ipn()){ // validate the IPN, do the others stuffs here as per your app logic
			mysqli_query($con,"UPDATE `purchases` SET `trasaction_id` = '$trasaction_id ', `log_id` = '$paypal_log_id', `payment_status` = '$payment_status' WHERE `invoice` = '$invoice'");
			$subject = 'Instant Payment Notification - Recieved Payment';
			$p->send_report($subject); // Send the notification about the transaction
		}
		else
		{
			$subject = 'Instant Payment Notification - Payment Fail';
			$p->send_report($subject); // failed notification
		}
	break;
}

if(isset($_POST['billpayment']))
			 {
               include("connection.php");
			        $invoice=$_POST["invoice"];
					$pid=$_POST["Bill_id"];
					$pname=$_POST["bill_no"];
					$pquantity=$_POST["customer_id"];
					$amount=$_POST['product_amount'];
					$fname=$_POST['payer_fname'];
					$lname=$_POST['payer_lname'];
					$address=$_POST['payer_address'];
                    $city=$_POST['payer_city'];
                    $state=$_POST['payer_state'];
                    $zipcode=$_POST['payer_zip'];
                    $country=$_POST['payer_country'];
                    $email=$_POST['payer_email'];
					
                    $insert="INSERT INTO billrecord  values('$pid','$pname','$pquantity','$amount','$fname','$lname','$address','$city','$state','$zipcode','$country','$email')";
                    
                       if(mysqli_query($con,$insert))
                        {  
                           
	                    }	
						else
						{
                           
						}			
			  } 
?>

