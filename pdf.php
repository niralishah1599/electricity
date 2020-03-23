<?php
session_start();
include "connection.php";

if(isset($_GET['billid']))
{
	$id = $_GET['billid'];
		$select="SELECT * FROM billrecord where bill_id='$id'";
			$result=mysql_query($select) or die (mysql_error());
			if(mysql_num_rows($result)==0)
			{
				echo "<center><div class'alert alert-danger'>No records found</div></center>";
			}
			else
			{
					$row=mysql_fetch_object($result);
						$bno = $row->bill_no;
						$cid = $row->customer_id;
						$bamount = $row->bill_amount;
						$fname = $row->payer_fname;
						$lname = $row->payer_lname;
						$address = $row->payer_address;
						$city = $row->payer_city;
						$state = $row->payer_state;
						$zip = $row->payer_zip;
						$country = $row->payer_country;
						$email = $row->payer_email;
					
			}

}
	$style11="margin-left:235px;margin-top:5px;font-size:13px;";
	$style12="margin-left:500px;margin-top:5px;font-size:13px;";
	$style2="padding:3px";
	$style3="padding-left:315px;color:gray;";
	$style4="padding-top:100px;padding-left:285px";
	$style5="padding-top:100px;";
	$link="color:gray;";	
    $content = "
<page style='style5'>
	<table>
		<tr>
		
			<td style='$style3'>
				<a href='http://localhost/eletricity2/homepage.php'><h1 style='$link'>Eletricity.com</h1></a>
			</td>
			<td style='padding-left:-205px;padding-top:25px;padding-right:0px;'>
				<h4> <br><br><br><br><br><br>Eletricity Bill Payment Invoice</h4><hr>
			</td>
		</tr>
		<tr>
			<td colspan='2' style='padding-left:330px;'>
				<h5>Welcome. $fname $lname</h5>
			</td>
		</tr>
		
	</table>
	
	<table border='0.3' style='$style11'>
		<tr><br><br>
			<td style='padding:10px;'>
				Bill Id
			</td>
			<td style='font-size:13px;padding:10px;'>
				<b>$id</b>
			</td>
		</tr>
		<tr>
			<td style='	padding:10px;'>
				Bill No.
			</td>
			<td style='padding:10px;'>
				<b>$bno</b>
			</td>
		</tr>
		<tr>
			<td style='padding:10px;'>
				Contact No.
			</td>
			<td style='padding:10px;'>
				<b>$cid</b>
			</td>
		</tr>
		<tr>
			<td style='padding:10px;'>
				Bill Amount (USD)
			</td>
			<td style='padding:10px;'>
				<b>$bamount</b>
			</td>
		</tr>
		
		<tr>
			<td style='padding:10px;'>
				Payer First Name
			</td>
			<td style='padding:10px;'>
				<b>$fname</b>
			</td>
		</tr>
		<tr>
			<td style='padding:10px;'>
				Payer Last Name
			</td>
			<td style='padding:10px;'>
				<b>$lname</b>
			</td>
		</tr>
		<tr>
			<td style='padding:10px;'>
				Address
			</td>
			<td style='padding:10px;'>
				<b>$address</b>
			</td>
		</tr>
		<tr>
			<td style='padding:10px;'>
				City
			</td>
			<td style='padding:10px;'>
				<b>$city</b>
			</td>
		</tr>
		<tr>
			<td style='padding:10px;'>
				State 
			</td>
			<td style='padding:10px;'>
				<b>$state</b>
			</td>
		</tr>
		<tr>
			<td style='padding:10px;'>
				Zip Code
			</td>
			<td style='padding:10px;'>
				<b>$zip</b>
			</td>
		</tr>
		<tr>
			<td style='padding:10px;'>
				Country
			</td>
			<td style='padding:10px;'>
				<b>$country</b>
			</td>
		</tr>
		<tr>
			<td style='padding:10px;'>
				Payer Email
			</td>
			<td style='padding:10px;'>
				<b>$email</b>
			</td>
		</tr>
	</table><br><hr>
	
	<table style='$style12'>
		<tr>
			<td style='padding:5px;'>
					<br><br>Total Bill Amount : USD. $bamount<br><hr>
					
			</td>
		</tr>
		
	</table>
	
	<table style='$style4'>
		<tr>
			<td>
				&copy;Copyright By : Eletricity.com
			</td>
		</tr>
	</table>
		
</page>";

    require_once('html2pdf/html2pdf.class.php');
    
$html2pdf = new HTML2PDF('P','A4','en',true, 'UTF-8', array(0, 0, 0, 0)); 
$html2pdf->WriteHTML($content);
$html2pdf->Output("$id.pdf");
?>