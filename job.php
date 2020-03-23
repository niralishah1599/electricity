<?php
    session_start();
?>
<html>
	<head>
		<title>homepage</title>
        <meta name="viewport" content="width-device-width,initial-scale=1.0">
	</head>
	<body style="background:#eee;">
		<?php
            include("navigation.php");
        ?>
		<div class="container"><br><br><br>
			<h2 class="text-center"> Job Information </h2><br/>
			<?php
					$con=mysqli_Connect('localhost','root','');
					{
						mysqli_select_db($con,"eletricity");
						{

							$r="select * from job";
							$query=mysqli_query($con,"$r");
							if(mysqli_num_rows($query)>0)
								{
									echo "<div class='table-responsive'>          
										  <table class='table table-hover'>
												<thead>
													<tr>
														<th>Sr. No.</th>
														<th>Description</th>
														<th>Requirement</th>
														<th>Documents</th>
														<th></th>
													</tr>
												</thead><tbody>";	
								}
							   while($row = mysqli_fetch_array($query))
								 {
									   echo "<tr>";
										   echo "<td class=srno>" . $row['id'] . "</td>";
										   echo "<td style='font-size:16px;'>" . $row['desc'] . "</td>";
										   echo "<td style='font-size:16px;'><center>" . $row['requirement'] . "</center></td>"; 
									   
										   echo "<td>" . "<a style=\"color:black;text-decoration:none;font-size:16px;\" href=\"admin/".$row['document']."\"> Click Here </a>" . "</td>"; 
									   
										   echo "<td><a style=\"color:black;text-decoration:none;font-size:16px;\" href=\"jobapply.php?id=$row[0]&&desc=$row[1] \">Apply Now</a></td>";
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