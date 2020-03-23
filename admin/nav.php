<!doctype html>
<html>
<head>
<title>login</title>
    <style>
        .menu
        {
            margin: 0 0 0 -10%;
            width:120%;
            height:100px;
            color:blue;
            font-family:Kartika,arial,aakar;
        }
        .logo
        {
            width:100%;
        }
        .nvadjust
        {
            margin:2% 0 0 10%;
            color:white;
            font-family:Segoe UI Symbol;
            font-size: 16px;
        }
       
        @media screen and (min-device-width:320px) and (max-device-width:480px)
        {
            .menu
            {
                margin:2% 0 0 -4%;
                width:108%;
                height:100px;
                z-index:1000;
            }
            .logo
            {
                width:90%;
            }
            
        }
    </style>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" media="all"  href="css/mycss.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
    
	<div class="container">
      
        <nav class = "navbar navbar-default menu" role = "navigation" style="color:white;background:#333;">
           <div class = "navbar-header">
            <button type = "button" class = "navbar-toggle" 
                 data-toggle = "collapse" data-target = "#example-navbar-collapse">
                 <span class = "sr-only">Toggle navigation</span>
                 <span class = "icon-bar"></span>
                 <span class = "icon-bar"></span>
                 <span class = "icon-bar"></span>
            </button>
              <a class = "navbar-brand" href = "#"><img class="logo" src="images/adminlogo.PNG"/></a>
           </div>
           <div class = "collapse navbar-collapse nvadjust" id = "example-navbar-collapse" style="background:#333;">
              <ul class = "nav navbar-nav">
                 <li><a href = "adminhome.php">Home</a></li>
                
                  <li class = "dropdown">
                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
                       E-Bill
                       <b class = "caret"></b>
                    </a>
                    <ul class = "dropdown-menu">    
                       <li><a href = "addbill.php">Add Bill Information </a></li>
                
                       <li class = "divider"></li>
                       <li><a href = "displaybillinfo.php">Manage Bill Information</a></li>
                        
                       <li class = "divider"></li>
                       <li><a href = "viewbill.php">Manage Bill Payment</a></li>
                    </ul>
                 </li>
                  
                  <li class = "dropdown">
                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
                       Solar Product
                       <b class = "caret"></b>
                    </a>
                    <ul class = "dropdown-menu">    
                        <li><a href = "viewproduct.php">Solar Product</a></li>
                       <li class = "divider"></li>
                       <li><a href = "manageorder.php">Manage Order</a></li>
                    </ul>
                 </li>
                  
                <li class = "dropdown">
                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
                       Job
                       <b class = "caret"></b>
                    </a>
                    <ul class = "dropdown-menu">    
                       <li><a href = "viewjob.php"> Manage Job Info.</a></li>
                       <li class = "divider"></li>
                       <li><a href = "jobapplyadmin.php">Job Apply </a></li>
                    </ul>
                 </li>
                  
                 <li class = "dropdown">
                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
                       Tender
                       <b class = "caret"></b>
                    </a>
                    <ul class = "dropdown-menu">    
                       <li><a href = "viewtender.php">Tender Info.</a></li>
                       <li class = "divider"></li>
                       <li><a href = "tenderapplyadmin.php">Tender Apply </a></li>
                    </ul>
                 </li>

                  <li class = "dropdown">
                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
                       Connection
                       <b class = "caret"></b>
                    </a>
                    <ul class = "dropdown-menu">    
                       <li><a href = "viewconnection.php">New Connection </a></li>
                       <li class = "divider"></li>
                       <li><a href = "viewshift.php">Shifting a meter</a></li>
                    </ul>
                 </li>
                  
                  <li><a href = "viewuser.php">Manage User</a></li>
                  <li><a href = "viewcomplaint.php">Complaint</a></li>
                  <li><a href = "viewfdbk.php">Feedback</a></li>
                  <li><a href = "../logout.php">Logout</a></li>
              </ul>
           </div>
</nav>
