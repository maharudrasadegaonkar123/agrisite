	<?php
    extract($_GET);
    if( !isset($actlnk) )
    $actlnk = 1;
    
    $uri = $_SERVER['REQUEST_URI'];
    $uri = preg_replace('/^.+[\\\\\\/]/', '', $uri);
    $filename = substr($uri, 0, strpos($uri, '.php'));
    ?>
    

<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Pamosa</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__ball"></div>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
    
	<div class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="left-top">
						<div class="email-box">
							<a href="#." target="blank"><i class="fa fa-envelope-o" aria-hidden="true"></i> <strong></strong></a>
						</div>
						<div class="phone-box" style="color:#ffffff;">
							<a href="tel:+91"><i class="fa fa-phone" aria-hidden="true"></i>  <strong></strong></a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="right-top">
						<div class="social-box">
							<ul>
								<li><a href="#."><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
								<li><a href="#."><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#."><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
								<li><a href="#."><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
								<li><a href="#."><i class="fa fa-rss-square" aria-hidden="true"></i></a></li>
							<ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#."><h1>Rudra Creation</h1></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php" <?php if($filename == 'index' or $filename == '') {?> class="active"  <?php }?>>Home</a></li>
                        <li><a href="#." <?php if($filename == 'aboutus') {?> class="active"  <?php }?>>About us</a></li>
                        <li><a href="#."  <?php if($filename == 'visionmission') {?> class="active"  <?php }?>>Vision Mission</a></li>
                        <li><a href="#."  <?php if($filename == 'products') {?> class="active"  <?php }?>>Products</a></li>
						 <li><a href="#."  <?php if($filename == 'download') {?> class="active"  <?php }?>>Download</a></li>
                        <li><a href="#.">Login</a></li>
                        <li><a href="#."  <?php if($filename == 'contactus') {?> class="active"  <?php }?>>Contact Us</a></li>
                        
						
                    </ul>
                </div>
            </div>
        </nav>
    </header>
	
	