<?php
session_start();
?>
<html>
    <head>
        <link href="css/mycss.css" rel="stylesheet" type="text/css">
    </head>
    <body >
        <?php
            include("navigation.php");
        ?>
          <div class="container"><br><br><br>
			<h2 class="text-center"> Load Counter </h2><br/>
            <div class='table-responsive'>
			  <table class="table table-bordered table-hover table-striped ">
                <thead style="background:#eee;">
                <tr>
                    <th>Equipment </th>
                    <th>Apporiate Load </th>
                    <th>Load Actual</th>
                    <th>No. of Equipment</th>
                    <th>No. of Hours</th>
                    <th>Total Watt</th>
                    <th>Total Units</th>
                    <th>Charges(Rs.)</th>
                </tr>
                </thead>  
                <tbody> 
                <tr class="trfirst">
                    <td><img src="image/energy/computer.jpg"></img></td>
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="approximate" name="approximate"
                                        value="200" disabled
                                        class="col-md-5 form-control text-center loadinput"></td>
                     
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="approximate_actual" name="approximate_actual"
                                        class="form-control text-center loadinput" value="200" Disabled></td>
                    
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="equipment" name="eqipment"
                                        class="form-control text-center loadinput" value="1"></td>
                    
                    <td><input type="text" onkeyup="loadfunction()" 
                                        class="form-control text-center loadinput" id="hour" name="hour"></td>

                    
                    <td><input type="text" disabled id="t2" 
                                        class="form-control text-center loadinput" name="t2"></td>

                    
                    <td><input type="text" onkeyup="loadfunction()" 
                                        class="form-control text-center loadinput" id="watt" name="watt"></td>

                    <td><input type="text" onkeyup="loadfunction()"
                                        class="form-control text-center loadinput" id="price" name="price" ></td>
                  </tr>
                  
            
                  <tr class="trsecond">
                    <td><img src="image/energy/fan.jpg"></img></td>
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="approximate1" name="approximate1"
                                        value="100" disabled
                                        class="form-control text-center loadinput"></td>
                     
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="approximate_actual1" name="approximate_actual1"
                                        class="form-control text-center loadinput" value="100" Disabled></td>
                    
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="equipment1" name="eqipment1"
                                        class="form-control text-center loadinput" value="1"></td>
                    
                    <td><input type="text" onkeyup="loadfunction()" 
                                        class="form-control text-center loadinput" id="hour1" name="hour1"></td>

                    
                    <td><input type="text" disabled id="t21" 
                                        class="form-control text-center loadinput" name="t21"></td>

                    
                    <td><input type="text" onkeyup="loadfunction()" 
                                        class="form-control text-center loadinput" id="watt1" name="watt1"></td>

                    <td><input type="text" onkeyup="loadfunction()"
                                        class="form-control text-center loadinput" id="price1" name="price1" ></td>
                  </tr>
                  
                  <tr class="trfirst">
                    <td><img src="image/energy/fish.jpg"></img></td>
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="approximate2" name="approximate2"
                                        value="800" disabled
                                        class="form-control text-center loadinput"></td>
                     
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="approximate_actual2" name="approximate_actual2"
                                        class="form-control text-center loadinput" value="800" Disabled></td>
                    
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="equipment2" name="eqipment2"
                                        class="form-control text-center loadinput" value="1"></td>
                    
                    <td><input type="text" onkeyup="loadfunction()" 
                                        class="form-control text-center loadinput" id="hour2" name="hour2"></td>

                    
                    <td><input type="text" disabled id="t22" 
                                        class="form-control text-center loadinput" name="t22"></td>

                    
                    <td><input type="text" onkeyup="loadfunction()" 
                                        class="form-control text-center loadinput" id="watt2" name="watt2"></td>

                    <td><input type="text" onkeyup="loadfunction()"
                                        class="form-control text-center loadinput" id="price2" name="price2" ></td>
                  </tr>
                  
                  <tr class="trsecond">
                    <td><img src="image/energy/fittness.jpg"></img></td>
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="approximate3" name="approximate3"
                                        value="1650" disabled
                                        class="form-control text-center loadinput"></td>
                     
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="approximate_actual3" name="approximate_actual3"
                                        class="form-control text-center loadinput" value="1650" Disabled></td>
                    
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="equipment3" name="eqipment3"
                                        class="form-control text-center loadinput" value="1"></td>
                    
                    <td><input type="text" onkeyup="loadfunction()" 
                                        class="form-control text-center loadinput" id="hour3" name="hour3"></td>

                    
                    <td><input type="text" disabled id="t23" 
                                        class="form-control text-center loadinput" name="t23"></td>

                    
                    <td><input type="text" onkeyup="loadfunction()" 
                                        class="form-control text-center loadinput" id="watt3" name="watt3"></td>

                    <td><input type="text" onkeyup="loadfunction()"
                                        class="form-control text-center loadinput" id="price3" name="price3" ></td>
                  </tr>
                  
                  <tr class="trfirst">
                    <td><img src="image/energy/gas.jpg"></img></td>
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="approximate4" name="approximate4"
                                        value="1000" disabled
                                        class="form-control text-center loadinput"></td>
                     
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="approximate_actual4" name="approximate_actual4"
                                        class="form-control text-center loadinput" value="1000" Disabled></td>
                    
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="equipment4" name="eqipment4"
                                        class="form-control text-center loadinput" value="1"></td>
                    
                    <td><input type="text" onkeyup="loadfunction()" 
                                        class="form-control text-center loadinput" id="hour4" name="hour4"></td>

                    
                    <td><input type="text" disabled id="t24" 
                                        class="form-control text-center loadinput" name="t24"></td>

                    
                    <td><input type="text" onkeyup="loadfunction()" 
                                        class="form-control text-center loadinput" id="watt4" name="watt4"></td>

                    <td><input type="text" onkeyup="loadfunction()"
                                        class="form-control text-center loadinput" id="price4" name="price4" ></td>
                  </tr>
                  
                  <tr class="trsecond">
                    <td><img src="image/energy/heat.jpg"></img></td>
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="approximate5" name="approximate5"
                                        value="1500" disabled
                                        class="form-control text-center loadinput"></td>
                     
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="approximate_actual5" name="approximate_actual5"
                                        class="form-control text-center loadinput" value="1500" Disabled></td>
                    
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="equipment5" name="eqipment5"
                                        class="form-control text-center loadinput" value="1"></td>
                    
                    <td><input type="text" onkeyup="loadfunction()" 
                                        class="form-control text-center loadinput" id="hour5" name="hour5"></td>

                    
                    <td><input type="text" disabled id="t25" 
                                        class="form-control text-center loadinput" name="t25"></td>

                    
                    <td><input type="text" onkeyup="loadfunction()" 
                                        class="form-control text-center loadinput" id="watt5" name="watt5"></td>

                    <td><input type="text" onkeyup="loadfunction()"
                                        class="form-control text-center loadinput" id="price5" name="price5" ></td>
                  </tr>
                  
                  <tr class="trfirst">
                    <td><img src="image/energy/mixer.jpg"></img></td>
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="approximate6" name="approximate6"
                                        value="600" disabled
                                        class="form-control text-center loadinput"></td>
                     
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="approximate_actual6" name="approximate_actual6"
                                        class="form-control text-center loadinput" value="600" Disabled></td>
                    
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="equipment6" name="eqipment6"
                                        class="form-control text-center loadinput" value="1"></td>
                    
                    <td><input type="text" onkeyup="loadfunction()" 
                                        class="form-control text-center loadinput" id="hour6" name="hour6"></td>

                    
                    <td><input type="text" disabled id="t26" 
                                        class="form-control text-center loadinput" name="t26"></td>

                    
                    <td><input type="text" onkeyup="loadfunction()" 
                                        class="form-control text-center loadinput" id="watt6" name="watt6"></td>

                    <td><input type="text" onkeyup="loadfunction()"
                                        class="form-control text-center loadinput" id="price6" name="price6" ></td>
                  </tr>
                  
                  <tr class="trsecond">
                    <td><img src="image/energy/mobile.jpg"></img></td>
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="approximate7" name="approximate7"
                                        value="1500" disabled
                                        class="form-control text-center loadinput"></td>
                     
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="approximate_actual7" name="approximate_actual7"
                                        class="form-control text-center loadinput" value="1500" Disabled></td>
                    
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="equipment7" name="eqipment7"
                                        class="form-control text-center loadinput" value="1"></td>
                    
                    <td><input type="text" onkeyup="loadfunction()" 
                                        class="form-control text-center loadinput" id="hour7" name="hour7"></td>

                    
                    <td><input type="text" disabled id="t27" 
                                        class="form-control text-center loadinput" name="t27"></td>

                    
                    <td><input type="text" onkeyup="loadfunction()" 
                                        class="form-control text-center loadinput" id="watt7" name="watt7"></td>

                    <td><input type="text" onkeyup="loadfunction()"
                                        class="form-control text-center loadinput" id="price7" name="price7" ></td>
                  </tr>

                  <tr class="trfirst">
                    <td><img src="image/energy/tv.jpg"></img></td>
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="approximate8" name="approximate8"
                                        value="250" disabled
                                        class="form-control text-center loadinput"></td>
                     
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="approximate_actual8" name="approximate_actual8"
                                        class="form-control text-center loadinput" value="250" Disabled></td>
                    
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="equipment8" name="eqipment8"
                                        class="form-control text-center loadinput" value="1"></td>
                    
                    <td><input type="text" onkeyup="loadfunction()" 
                                        class="form-control text-center loadinput" id="hour8" name="hour8"></td>

                    
                    <td><input type="text" disabled id="t28" 
                                        class="form-control text-center loadinput" name="t28"></td>

                    
                    <td><input type="text" onkeyup="loadfunction()" 
                                        class="form-control text-center loadinput" id="watt8" name="watt8"></td>

                    <td><input type="text" onkeyup="loadfunction()"
                                        class="form-control text-center loadinput" id="price8" name="price8" ></td>
                  </tr>

                  <tr class="trsecond">
                    <td><img src="image/energy/wash.jpg"></img></td>
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="approximate9" name="approximate9"
                                        value="1300" disabled
                                        class="form-control text-center loadinput"></td>
                     
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="approximate_actual9" name="approximate_actual9"
                                        class="form-control text-center loadinput" value="1300" Disabled></td>
                    
                    <td><input type="text" onkeyup="loadfunction()"
                                        id="equipment9" name="eqipment9"
                                        class="form-control text-center loadinput" value="1"></td>
                    
                    <td><input type="text" onkeyup="loadfunction()" 
                                        class="form-control text-center loadinput" id="hour9" name="hour9"></td>

                    
                    <td><input type="text" disabled id="t29" 
                                        class="form-control text-center loadinput" name="t29"></td>

                    
                    <td><input type="text" onkeyup="loadfunction()" 
                                        class="form-control text-center loadinput" id="watt9" name="watt9"></td>

                    <td><input type="text" onkeyup="loadfunction()"
                                        class="form-control text-center loadinput" id="price9" name="price9" ></td>
                  </tr>
                
                  <tr>
				  <td colspan="8"><br>
					<div class="form-group col-md-3 col-md-offset-3 text-center">
					<label class="label-control">Total Charge Per Day (Rs) :</label>
					</div>
					<div class="form-group col-md-3">
                    <input type="text" name="total_charges" id="total_charges" class="form-control text-center" />
					</div>
				</td>
                  </tr>
                </tbody>
</table>
</div>
</div>
	<script>
		function loadfunction()
        {

			var ip= document.getElementById("approximate").value;
            var ep= document.getElementById("equipment").value;
			if(ip>0)
			{	

				var hour= document.getElementById("hour").value;
				var op=  ip * ep * hour * 10/*fan load*/ ;
				document.getElementById("t2").value = op;
                
                var watt = op / 1000 ;
                document.getElementById("watt").value=watt;
                
                var rupees= 0.22 * watt;
                document.getElementById("price").value=rupees;
			}			
			else
			{
				alert("Enter Valid Value (1 or more)");
			}
            
            var ip= document.getElementById("approximate1").value;
            var ep= document.getElementById("equipment1").value;
			if(ip>0)
			{	

				var hour= document.getElementById("hour1").value;
				var op=  ip * ep * hour * 10/*fan load*/ ;
				document.getElementById("t21").value = op;
                
                var watt = op / 1000 ;
                document.getElementById("watt1").value=watt;
                
                var rupees1= 0.22 * watt;
                document.getElementById("price1").value=rupees1;
			}			
			else
			{
				alert("Enter Valid Value (1 or more)");
			}
    
            var ip= document.getElementById("approximate2").value;
            var ep= document.getElementById("equipment2").value;
			if(ip>0)
			{	

				var hour= document.getElementById("hour2").value;
				var op=  ip * ep * hour * 10/*fan load*/ ;
				document.getElementById("t22").value = op;
                
                var watt = op / 1000 ;
                document.getElementById("watt2").value=watt;
                
                var rupees2= 0.22 * watt;
                document.getElementById("price2").value=rupees2;
			}			
			else
			{
				alert("Enter Valid Value (1 or more)");
			}
            
            var ip= document.getElementById("approximate3").value;
            var ep= document.getElementById("equipment3").value;
			if(ip>0)
			{	

				var hour= document.getElementById("hour3").value;
				var op=  ip * ep * hour * 10/*fan load*/ ;
				document.getElementById("t23").value = op;
                
                var watt = op / 1000 ;
                document.getElementById("watt3").value=watt;
                
                var rupees3= 0.22 * watt;
                document.getElementById("price3").value=rupees3;
			}			
			else
			{
				alert("Enter Valid Value (1 or more)");
			}
            
            
            var ip= document.getElementById("approximate4").value;
            var ep= document.getElementById("equipment4").value;
			if(ip>0)
			{	

				var hour= document.getElementById("hour4").value;
				var op=  ip * ep * hour * 10/*fan load*/ ;
				document.getElementById("t24").value = op;
                
                var watt = op / 1000 ;
                document.getElementById("watt4").value=watt;
                
                var rupees4= 0.22 * watt;
                document.getElementById("price4").value=rupees4;
			}			
			else
			{
				alert("Enter Valid Value (1 or more)");
			}
            
            
            var ip= document.getElementById("approximate5").value;
            var ep= document.getElementById("equipment5").value;
			if(ip>0)
			{	

				var hour= document.getElementById("hour5").value;
				var op=  ip * ep * hour * 10/*fan load*/ ;
				document.getElementById("t25").value = op;
                
                var watt = op / 1000 ;
                document.getElementById("watt5").value=watt;
                
                var rupees5= 0.22 * watt;
                document.getElementById("price5").value=rupees5;
			}			
			else
			{
				alert("Enter Valid Value (1 or more)");
			}
            
            
            var ip= document.getElementById("approximate6").value;
            var ep= document.getElementById("equipment6").value;
			if(ip>0)
			{	

				var hour= document.getElementById("hour6").value;
				var op=  ip * ep * hour * 10/*fan load*/ ;
				document.getElementById("t26").value = op;
                
                var watt = op / 1000 ;
                document.getElementById("watt6").value=watt;
                
                var rupees6= 0.22 * watt;
                document.getElementById("price6").value=rupees6;
			}			
			else
			{
				alert("Enter Valid Value (1 or more)");
			}
            
             var ip= document.getElementById("approximate7").value;
            var ep= document.getElementById("equipment7").value;
			if(ip>0)
			{	

				var hour= document.getElementById("hour7").value;
				var op=  ip * ep * hour * 10/*fan load*/ ;
				document.getElementById("t27").value = op;
                
                var watt = op / 1000 ;
                document.getElementById("watt7").value=watt;
                
                var rupees7= 0.22 * watt;
                document.getElementById("price7").value=rupees7;
			}			
			else
			{
				alert("Enter Valid Value (1 or more)");
			}
            
            
            var ip= document.getElementById("approximate8").value;
            var ep= document.getElementById("equipment8").value;
			if(ip>0)
			{	

				var hour= document.getElementById("hour8").value;
				var op=  ip * ep * hour * 10/*fan load*/ ;
				document.getElementById("t28").value = op;
                
                var watt = op / 1000 ;
                document.getElementById("watt8").value=watt;
                
                var rupees8= 0.22 * watt;
                document.getElementById("price8").value=rupees8;
			}			
			else
			{
				alert("Enter Valid Value (1 or more)");
			}
            
            
            var ip= document.getElementById("approximate9").value;
            var ep= document.getElementById("equipment9").value;
			if(ip>0)
			{	

				var hour= document.getElementById("hour9").value;
				var op=  ip * ep * hour * 10/*fan load*/ ;
				document.getElementById("t29").value = op;
                
                var watt = op / 1000 ;
                document.getElementById("watt9").value=watt;
                
                var rupees9= 0.22 * watt;
                document.getElementById("price9").value=rupees9;
                
                var r1 = document.getElementById("price").value;
                var r2 = document.getElementById("price1").value;
                var r3 = document.getElementById("price2").value;
                var r4 = document.getElementById("price3").value;
                var r5 = document.getElementById("price4").value;
                var r6 = document.getElementById("price5").value;
                var r7 = document.getElementById("price6").value;
                var r8 = document.getElementById("price7").value;
                var r9 = document.getElementById("price8").value;
                var r10 = document.getElementById("price9").value;

                var total=parseFloat(r1)+parseFloat(r2)+parseFloat(r3)+parseFloat(r4)+parseFloat(r5)
				+parseFloat(r6)+parseFloat(r7)+parseFloat(r8)+parseFloat(r9)+parseFloat(r10);
                document.getElementById("total_charges").value=total;
			}			
			else
			{
				alert("Enter Valid Value (1 or more)");
			}     
	   }	
        
	</script>
        <?php
            include("footer.php");
        ?>
        
    </body>
</html>