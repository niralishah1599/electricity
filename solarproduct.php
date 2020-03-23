<html>
    <head>
        <title>Solar Products</title>
    </head>
    <body>
	<?php
        include("navigation.php");
    ?>
	<header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in1">Welcome to Our Site	</div>
                <div class="intro-heading1">Eletricity is most powerful company.it is India's largest private power distribution company,
				serving 64 lakh consumers with 24 x 7 uninterrupted, reliable and quality power.Eletricity subsidiary companies have
				commissioned three transmission projects by installing eight national grid lines,
				being the first set of lines commissioned in India by the private sector. </div>
            </div>
        </div>
    </header>
		
        <section>
            <div id="solarproduct">
			 <!-- solar Product Section -->
    <section id="portfolio"	style="margin:-20% 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Solar Products</h2>
                    <h3 class="section-subheading text-muted">Save Energy , Save Environment...	</h3>
                </div>
            </div>
			
			 <?php
            $con=mysqli_connect('localhost','root','');
            {
                mysqli_select_db($con,"eletricity");
                
                    $s=mysqli_query($con,"select * from solar_products");
                    {
                    echo "<table border='0' align='center' cellspacing='15' ><tbody>";

                    $n=1;
                    while($arr=mysqli_fetch_array($s))
                    {
                     $i=$arr['product'];
                     
                     if($n%3==1)
                      {
                         echo "<tr>";
                      }
			?>
			
			<div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <h5 style='margin:-10% 0 0 0%;'><?php echo $arr['productdesc']; ?></h5>
                            </div>
                        </div>
                        <?php echo "<img class='img-centered img-responsive' src=\"$i\"/>"; ?>
                    </a>
                    <div class="col-md-12">
							<div class="form-group">
								<div class="col-md-8">
									<h4><?php echo "<p> ".$arr['prductname']."</p>"; ?></h4><br/>
								</div>
								<div class="col-md-4">
									<h4><?php echo "<p> Rs. ".$arr['productprice']."</p>"; ?></h4><br/>
								</div>
								<div class="col-md-4 col-md-offset-3">
									<?php	
									?>
									<a href='productinvoice.php?id=<?php echo $arr['id']; ?>&&productname=<?php echo $arr['prductname']; ?>&&price= <?php echo $arr['productprice']; ?>'><button class='btn btn-info'><b> Buy Now</b></button></a>
								</div>
							</div>
					</div>
            </div>
			<?php
                     if($n%3==0)
                      {
                         echo "</tr>";
                      }

                    $n++;
                     
                    }
                    echo "</tbody><table>";
                    }
            }
			?>
			</div>	
           <?php
				include("footer.php");
		   ?>
    </body>
</html>
