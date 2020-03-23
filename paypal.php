<?php
require_once("library.php"); // include the library file
define('EMAIL_ADD', 'youremail@gmail'); // define any notification email
define('PAYPAL_EMAIL_ADD', 'youremail@gmail'); // facilitator email which will receive payments change this email to a live paypal account id when the site goes live
require_once("paypal_class.php");
include("connection.php");
$p 				= new paypal_class(); // paypal class
$p->admin_mail 	= EMAIL_ADD; // set notification email
$action 		= $_REQUEST["action"];
print_r($action);
// print_r($_GET['id']);
switch($action){
	// case "process": // case process insert the form data in DB and process to the paypal
		
	
	// 	$r1=mysqli_query($con, "INSERT INTO `purchases` VALUES 
	// 	('".$_POST["invoice"]."', '".$_POST["pid"]."', '".$_POST["pname"]."', '".$_POST["pquantity"]."', 
	// 	'".$_POST["product_amount"]."', '".$_POST["payer_fname"]."', '".$_POST["payer_lname"]."', 
	// 	'".$_POST["payer_address"]."', '".$_POST["payer_city"]."', '".$_POST["payer_state"]."', 
	// 	'".$_POST["payer_zip"]."', '".$_POST["payer_country"]."', '".$_POST["payer_email"]."', 'pending', NOW())");
	
	// 	echo "<pre>";
	// 	print_r($r1);
	// 	exit;
	// 	$this_script = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
 //        $homepageurl='http://localhost/eletricity/homepage.php';
	// 	$p->add_field('business', 'rknakum07@gmail.com'); // Call the facilitator eaccount
	// 	$p->add_field('cmd', $_POST["cmd"]); // cmd should be _cart for cart checkout
	// 	$p->add_field('upload', '1');
	// 	$p->add_field('return', $this_script.'?action=success'); // return URL after the transaction got over
	// 	$p->add_field('cancel_return', $homepageurl.'?action=cancel'); // cancel URL if the trasaction was cancelled during half of the transaction
	// 	$p->add_field('notify_url', $this_script.'?action=ipn'); // Notify URL which received IPN (Instant Payment Notification)
	// 	$p->add_field('currency_code', $_POST["currency_code"]);
	// 	$p->add_field('invoice', $_POST["invoice"]);
	// 	$p->add_field('item_name_1', $_POST["product_name"]);
	// 	$p->add_field('item_number_1', $_POST["product_id"]);
	// 	$p->add_field('quantity_1', $_POST["product_quantity"]);
	// 	$p->add_field('amount_1', $_POST["product_amount"]);
	// 	$p->add_field('first_name', $_POST["payer_fname"]);
	// 	$p->add_field('last_name', $_POST["payer_lname"]);
	// 	$p->add_field('address1', $_POST["payer_address"]);
	// 	$p->add_field('city', $_POST["payer_city"]);
	// 	$p->add_field('state', $_POST["payer_state"]);
	// 	$p->add_field('country', $_POST["payer_country"]);
	// 	$p->add_field('zip', $_POST["payer_zip"]);
	// 	$p->add_field('email', $_POST["payer_email"]);
	// 	$p->submit_paypal_post(); // POST it to paypal
	// 	$p->dump_fields(); // Show the posted values for a reference, comment this line before app goes live
	// break;
	
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
		echo "<h1>Payment Transaction Done Successfully</h1>";
		echo '<h4>Use this below URL in paypal sandbox IPN Handler URL to complete the transaction</h4>';
        echo '<h4>Go To homepage click Here</h4>';
		echo '<h3><a href="homepage.php">http://localhost/eletricity/homepage.php</a></h3>';
		echo '</div>';
	break;
	
	case "process": // case process insert the form data in DB and process to the paypal
		echo '<pre>';
		print_r($_POST);
	  $invoice = $_POST["invoice"];
	  $pid = $_POST["pid"];
	  $pname = $_POST["pname"];
	  $pquantity = $_POST["pquantity"];
	  $product_amount = $_POST["product_amount"];
	  $payer_fname = $_POST["payer_fname"];
	  $payer_lname = $_POST["payer_lname"];
	  $payer_address = $_POST["payer_address"];
	  $payer_city = $_POST["payer_city"];
	  $payer_state = $_POST["payer_state"];
	  $payer_zip = $_POST["payer_zip"];
	  $payer_country = $_POST["payer_country"];
	  $payer_email = $_POST["payer_email"];

	  $r=mysqli_query($con, "insert into purchases VALUES ('$invoice', '$pid', '$pname', '$pquantity', $product_amount, '$payer_fname', '$payer_lname', '$payer_address', '$payer_city', '$payer_state', '$payer_zip', '$payer_country','$payer_email')");
	  // echo $r;
	// exit;
	
		$this_script = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
        $homepageurl='http://localhost/eletricity/homepage.php';
		$p->add_field('business', 'youremail@gmail.com'); // Call the facilitator eaccount
		$p->add_field('cmd', $_POST["cmd"]); // cmd should be _cart for cart checkout
		$p->add_field('upload', '1');
		$p->add_field('return', $homepageurl.'?action=success'); // return URL after the transaction got over
		$p->add_field('cancel_return', $homepageurl.'?action=cancel'); // cancel URL if the trasaction was cancelled during half of the transaction
		$p->add_field('notify_url', $homepageurl.'?action=ipn'); // Notify URL which received IPN (Instant Payment Notification)
		$p->add_field('currency_code', 'INR');
		$p->add_field('invoice', $_POST["invoice"]);
		$p->add_field('item_name_1', $_POST["pname"]);
		$p->add_field('item_number_1', $_POST["pid"]);
		$p->add_field('quantity_1', $_POST["pquantity"]);
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
	
// 	case "success": // success case to show the user payment got success
// 		echo '<title>Payment Done Successfully</title>';
// 		echo '<style>.as_wrapper{
// 	font-family:Arial;
// 	color:#333;
// 	font-size:14px;
// 	padding:20px;
// 	border:2px dashed #17A3F7;
// 	width:600px;
// 	margin:0 auto;
// }</style>
// ';		echo '<div class="as_wrapper">';
// 		echo "<h1>Payment Transaction Done Successfully</h1>";
// 		echo '<h4>Use this below URL in paypal sandbox IPN Handler URL to complete the transaction</h4>';
//         echo '<h4>Go To homepage click Here</h4>';
// 		echo '<h3><a href="homepage.php">http://localhost/eletricity/homepage.php</a></h3>';
// 		echo '</div>';
// 	break;
	
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
		$log_check 		= mysql_query($log_query);
		if(mysql_num_rows($log_check) <= 0){
			mysqli_query("INSERT INTO `paypal_log` (`txn_id`, `log`, `posted_date`) VALUES ('$trasaction_id', '$log_array', NOW())");
		}else{
			mysqli_query("UPDATE `paypal_log` SET `log` = '$log_array' WHERE `txn_id` = '$trasaction_id'");
		} // Save and update the logs array
		$paypal_log_fetch 	= mysql_fetch_array(mysql_query($log_query));
		$paypal_log_id		= $paypal_log_fetch["id"];
		if ($p->validate_ipn()){ // validate the IPN, do the others stuffs here as per your app logic
			mysqli_query("UPDATE `purchases` SET `trasaction_id` = '$trasaction_id ', `log_id` = '$paypal_log_id', `payment_status` = '$payment_status' WHERE `invoice` = '$invoice'");
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

// if(isset($_POST['submit']))
// 			 {
//                 include("connection.php");
// 			        $invoice=$_POST["invoice"];
// 					$pid=$_POST["pid"];
// 					$pname=$_POST["pname"];
// 					$pquantity=$_POST["pquantity"];
// 					$amount=$_POST['product_amount'];
// 					$fname=$_POST['payer_fname'];
// 					$lname=$_POST['payer_lname'];
// 					$address=$_POST['payer_address'];
//                     $city=$_POST['payer_city'];
//                     $state=$_POST['payer_state'];
//                     $zipcode=$_POST['payer_zip'];
//                     $country=$_POST['payer_country'];
//                     $email=$_POST['payer_email'];
					
//                     $insert="INSERT INTO purchases values('$invoice','$pid','$pname','$pquantity','$amount','$fname','$lname','$address','$city','$state','$zipcode','$country','$email')";
                     
//                        if(mysqli_query($insert))
//                         {  
                           
// 	                    }	
// 						else
// 						{
                            
// 						}			
// 			  } 



?>

