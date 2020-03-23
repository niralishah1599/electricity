<!DOCTYPE html>
<html lang="en">
<?php
include("navigation.php");
if(isset($_SESSION['email']))
{
    $c="<a href=logout.php>Logout</span></a>";
}
else
{
$c="<span>Login</span>";
}
	
?>
<body id="page-top" class="index" style="background:#eee;">
    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text" id="content">
                <div class="intro-lead-in1" style="text-shadow: 5px 5px 5px rgba(0,0,0,0.9);font-size:30px;">Welcome To Our Site	</div>
                <div class="intro-heading1">Eletricity is most powerful company.it is India's largest private power distribution company,
				serving 64 lakh consumers with 24 x 7 uninterrupted, reliable and quality power.Eletricity subsidiary companies have
				commissioned three transmission projects by installing eight national grid lines,
				being the first set of lines commissioned in India by the private sector. </div>
            </div>
			</script>
        </div>
    </header>
	
	<content class="slider slideimage">
			<div id="wowslider-container1">
				<div class="ws_images"><ul>
					<li><img src="data1/images/banner1.jpg" alt="header5" title="2" id="2"/></li>
					<li><img src="data1/images/banner2.jpg" alt="css slider" title="3" id="wows1_2"/></a></li>
					<li><img src="data1/images/project_clp_11.jpg" alt="project_clp_11" title="1" id="wows1_0"/></li>
					<li><img src="data1/images/banner3.jpg" alt="css slider" title="3" id="wows1_2"/></a></li>
				</ul></div>
				<div class="ws_bullets">
				<div>
					<a href="#"><span><img src="data1/tooltips/project_clp_11.jpg" />1</a>
					<a href="#"><span><img src="data1/tooltips/header5.jpg" />2</a>
					<a href="#"><span><img src="data1/tooltips/picview_image_document_tmp_1454836245092.jpg" />3</a>
					<a href="#"><span><img src="data1/tooltips/windenergy.jpg" />4</a>
				</div>
				</div>
				<script type="text/javascript" src="engine1/wowslider.js"></script>
				<script type="text/javascript" src="engine1/script.js"></script>
			</div>
		</content>
		<!--  slider end  -->
		
		<!-- left bar -->
			<!-- news -->
				<div class="col-md-3 col-md-offset-1 news" style="background:#fff;"><br/>
					<h4 class="text-center">Latest News </h4><br>
					<marquee direction="up"><?php include "newsprocess.php"; ?></marquee>
				</div>
			<!-- news end -->
			<!--section content -->
				<div class="news col-md-7" style="margin:0 2%;background:#fff;">
					<div class="content">
						<br/><img class="img-responsive img-centered contentimg" src="image/imageofmain.jpg" /><br/>
						<p style="font-size:16px;">The Gujarat Electricity Board has been restructured into seven companies.
						One generation (GSEC), one transmission (GETCO), four distribution companies and GUVNL.
						The Eletricity pvt. limited is one of the distribution companies which started functioning from 1st April, 2005.
						Area served by Eletricity pvt. limited is the largest of all four distribution companies.
						The area of operation under Eletricity pvt. limited includes Saurashtra and Kachchh regions.
						Gujarat Urja Vikas Nigam Ltd. is the company under which all the six companies are working, 
						created after restructuring of erstwhile GEB.</p>
					</div>
				</div>
			<!-- section content End--> 
		<!-- left bar end -->
		
		<!-- link -->
				<div class="col-md-3 col-md-offset- whatnew" style="background:#fff;" ><br/>
					<h4 class="text-center">What New !</h4><br>
					<div class="link">
						<ul class='col-md-offset-2'>
							<li><a href="newconnection.php"> New Connection</a></li>
							<li><a href="shiftingmeter.php">Shifting Connection</a></li>
							<li><a href="LoadCounter.php">Load Counter</a></li>
							<li><a href="solarproduct.php">Solar Product</a></li>
						</ul>
					</div>
				</div>
		<!-- link end -->
		
    <!-- Services Section -->
            <div class="row">
			</div><br/><br/>

    <!-- Contact Section -->
	<?php
               
                if(isset($_POST['quickcomplaint']))
                {
					
                    $con=mysqli_connect("localhost","root","");
                    {
                        $nm=$_POST['nm'];
                        $no=$_POST['contact'];
                        $add=$_POST['address'];
                        mysqli_select_db("eletricity",$con);
                        {
                            $r="insert into quickcomplaint values ('$nm','$no','$add')";
                            $query=mysqli_query("$r",$con);
                            if($query)
                            {
                            echo "<div style=\"font-family:Berlin Sans FB;\" class='alert alert-success'>";
                            echo "<center>Your Complaint Are Send Successfully.</center>";
                            echo "</div>";
                            }
                            else
                            {
                                 echo "<div style=\"font-family:Berlin Sans FB;\" class='alert alert-danger'>";
                                echo "<center>Sorry Try Again...</center>";
                                echo "</div>";
                            }
                        }
                    }
                }
                ?>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Quick Complaint</h2>
                    <h3 class="section-subheading text-muted">make Complaint any time and Everything.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="homepage_now.php" method="post" name="sentMessage" id="contactForm" >
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nm" placeholder="Your Name *" id="name" required >
                                </div>
                               
                                <div class="form-group">
                                    <input type="text" class="form-control" name="contact" placeholder="Your Phone *" id="phone" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="address" placeholder="Your Message *" id="message" required></textarea>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <button type="submit" name="quickcomplaint" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
	
	<?php	
		include("footer.php");
	?>
    
    <!-- jQuery -->
      <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <script src="js/contact_me.js"></script>
    <script src="js/agency.js"></script>

</body>

</html>
