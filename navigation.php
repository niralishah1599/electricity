<?php
session_start();
if(isset($_SESSION['email']))
{
    $c="<a href=logout.php id=login>logout</span></a>";
}
else
{
$c="<span style=\"margin-left:20px;\">login</span>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Electricity</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/agency.css" rel="stylesheet">
	<link href="css/mystyle.css" rel="stylesheet">
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
</head>
<body id="page-top" class="index">
<!-- Navigation -->	
    <nav class="navbar navbar-default navbar-fixed-top" style="background:#333;">
	<div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle toggleclass" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll logo" href="homepage.php">E-Electricity</a>
            </div>
			<?php
                    if(isset($_SESSION['email']))
                    {
                    ?>
						<div class="menulist">
						<div class="collapse navbar-collapse menulist" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								
								<li>
									<a class="page-scroll" href="homepage.php">Home</a>
								</li>
								
								<li>
									<a class="page-scroll" href="billpayment.php">e-bill</a>
								</li>
						
								<li>
									<a href ="job.php">Job</a>
								</li>
								   
								<li>
									<a href = "tender.php">tender</a>
								</li>
								
								<li>
									<a class="page-scroll" href="feedback.php">Feedback</a>
								</li>
								
								<li>
									<a class="page-scroll" href="about.php">service</a>
								</li>
								
								<li>
									<a class="page-scroll" href="logout.php">Logout</a>
								</li>
								
							</ul>
						</div>
					<?php
                    }
                    else
                    {
                    ?>
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								
								<li>
									<a class="page-scroll" href="homepage.php">Home</a>
								</li>
								
								<li>
									<a class="page-scroll" href="login.php">Bill-payment</a>
								</li>
								   
								<li>
									<a href ="job.php">Job</a>
								</li>
								   
								<li>
									<a href = "tender.php">tender</a>
								</li>
								
								<li>
									<a class="page-scroll" href="feedback.php">Feedback</a>
								</li>
								
								<li>
									<a class="page-scroll" href="about.php">service</a>
								</li>
								
								<li>
									<a class="page-scroll" href="login.php">login</a>
								</li>
								
							</ul>
						</div>
					<?php
                    }
                    ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	
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