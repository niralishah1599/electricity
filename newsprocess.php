<?php
					$con=mysqli_connect("localhost","root","");
					{	
						$sel_db=mysqli_select_db($con,"eletricity");
						{
							$r="SELECT `id`, `news`, `image` FROM `news`";
							$query=mysqli_query($con,"$r") or die ("error");
							
								while($av=mysqli_fetch_array($query, MYSQLI_ASSOC))
								{
									
										echo "<table border=0>
												<tr>
													<td style=\"width:70%;color:black;\">".$av['news']."</td>
												</tr>
											  </table>";
									
									
								}
							
						}
					}
?>