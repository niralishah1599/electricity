<?php
session_start();
?>


<!doctype html>
<html>
	<head>
		<title>homepage</title>
		<link type="text/css" href="css/tender.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="engine1/style.css" />
		<script type="text/javascript" src="engine1/jquery.js"></script>
	</head>
	<body style="background:#eee;">
		<?php
            include("navigation.php");
        ?>
        <div class="container"><br><br><br>
			<h2 class="text-center"> Tender Information </h2><br/>
			<?php
					$con=mysqli_Connect('localhost','root','');
					{
						mysqli_select_db($con,"eletricity");
						{

							$r="select * from tender";
							$query=mysqli_query($con,"$r");
							if(mysqli_num_rows($query)>0)
								{
									echo "<div class='table-responsive'>          
										  <table class='table table-hover'>
												<thead>
													<tr>
														<th>Sr. No.</th>
															<th>Description</th>
															<th>City</th>
															<th>Last Date</th>
															<th>Average Tender Price</th>
															<th>Documents</th>
															<th></th>
													</tr>
												</thead><tbody>";	
								}
							   while($row = mysqli_fetch_array($query))
								 {
									   echo "<tr>";
										   echo "<td>" . $row['id'] . "</td>";
										   echo "<td style='width:45%'>" . $row['desc'] . "</td>";
										   echo "<td>" . $row['city'] . "</td>";
										   echo "<td>" . $row['lastdate'] . "</td>";
										   echo "<td>" . $row['price'] . "</td>";
										   echo "<td>" . "<a style='color:black;' href=\"admin/".$row['document']."\"> Click Here </a>" . "</td>";
										   echo "<td><a style='color:black' href=\"tenderapply.php?id=$row[0]&&desc=$row[2] \"\">Apply Now</a></td>";
									   echo"</tr>";
								 }
							  echo"</tbody></table>";
							  
						}	
					}
	?>
	</div>
	</div>
		<?php
            include("footer.php");
        ?>
       
    </body>	
</html>