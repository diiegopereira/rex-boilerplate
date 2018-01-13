<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>DotRex BoilerPlate</title>

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="favicon2.ico" type="image/x-icon">
<link rel="icon" href="favicon2.ico" type="image/x-icon">
<!-- / Favicons
================================================== -->

<!-- >> CSS
============================================================================== -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Google Web Fonts -->
<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>-->
<!-- Font Awesome -->
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- animate.css -->
<link href="vendor/animate.css" rel="stylesheet">
<!-- fancybox.css -->
<link href="vendor/fancybox/jquery.fancybox.css" rel="stylesheet">
<!-- owl carousel -->
<link href="vendor/owl.carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="vendor/owl.carousel/owl-carousel/owl.theme.css" rel="stylesheet">
<!-- Main Styles -->
<link href="css/styles.css" rel="stylesheet">

<!-- >> /CSS
============================================================================== -->
</head>
<body class="">
<!-- Loader
================================================== -->

<!-- /Loader
================================================== -->


<!-- Header
================================================== -->
<header id="header">
    <!-- top bar -->
    <div class="hd-top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                        <div class="contact-info">
                            <ul class="list-inline hd-top-bar-infos">
                                <li><i class="fa fa-phone"></i> 15| 3231.1415 </li>
                                <li><i class="fa fa-phone"></i> 15| 3231.1521 </li>
                                <li><i class="fa fa-envelope"></i> contato@avirtualsp.com.br</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- /top bar -->
    <!-- Navbar -->
	<nav class="navbar">
        <div class="container">

            <!-- Navbar Header -->
            <div class="navbar-header">
            	<!-- Collapse Button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- /Collapse Button -->
                <!-- logo -->
                <a class="navbar-brand" href="index.php">
                   <img src="img/logo.png" alt="">
                </a>
                <!-- /logo -->
            </div>
            <!-- / Navbar Header -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">                  
                    <li>
                        <a href="page-about.php">About</a>
                    </li>
                    <li>
                        <a href="page-portfolio.php">Portfolio</a>
                        <!-- Submenu -->
                        <ul>
                            <li><a href="page-portfolio.php">Portfolio - Grid</a></li>
                            <li><a href="page-portfolio-modal.php">Portfolio - Modal</a></li>
                            <li><a href="page-portfolio-masonry.php">Portfolio - Mansonry</a></li>
                            <li><a href="single-portfolio.php">Portfolio - Single</a></li>
                        </ul>       
                        <!-- /Submenu -->    
                    </li>
                    <li>
                        <a href="archive.php">Blog</a>
                        <!-- Submenu -->
                        <ul>
                            <li><a href="archive.php">Blog - Style 1</a></li>
                        	<li><a href="archive-2.php">Blog - Style 2</a></li>
                            <li><a href="archive-masonry.php">Blog - masonry</a></li>
                        	<li><a href="single.php">Blog - Single</a></li>
                        	<li><a href="single-focus.php">Blog - Single - Focus</a></li>
                        </ul>       
                        <!-- /Submenu -->                
                    </li>
                    <li class="dropdown-mega">
                        <a href="#">Pages</a>
                        <ul>
                            <li>
                                <!-- Mega Menu Content -->
                                <div class="dropdown-mega-content">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <span class="dropdown-mega-sub-title">Default pages</span>
                                            <ul class="dropdown-mega-sub-nav">
                                                <li><a href="page.php">Default Page</a></li>
                                                <li><a href="page-with-sidebar.php">Page with Sidebar</a></li>                            
                                                <li><a href="page-boxed.php">Boxed</a></li>                    
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <span class="dropdown-mega-sub-title">Examples</span>
                                            <ul class="dropdown-mega-sub-nav">
                                                <li><a href="example-onepage.php">One Page</a></li>
                                                <li><a href="example-resume.php">Cv / Resume</a></li>  
                                                 <li><a href="example-coming-soon.php">Coming Soon</a></li>                          
                                                <li><a href="404.php">404</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <span class="dropdown-mega-sub-title">Elements</span>
                                            <ul class="dropdown-mega-sub-nav">
                                                <li><a href="page-elements.php">Elements</a></li>
                                                <li><a href="page-icons.php">icons</a></li>
                                                <li><a href="page-grid.php">Typography</a></li>
                                                <li><a href="page-grid.php">Grid</a></li>
                                                <li><a href="page-grid.php">Tables</a></li>                                               
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <span class="dropdown-mega-sub-title">Title 4</span>
                                            <ul class="dropdown-mega-sub-nav">
                                                <li><a href="#">Item</a></li>                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- / Mega Menu Content -->
                            </li>
                        </ul>
                        <!-- Submenu -->
                        <ul>
                            
                        </ul>       
                        <!-- /Submenu -->
                    </li>
                     <li>
                        <a href="page-shop.php">Shop</a>
                        <!-- Submenu -->
                        <ul>
                            <li><a href="page-shop.php">Products</a></li>
                            <li><a href="single-product.php">Product Single</a></li>
                            <li><a href="archive-2.php">Cart</a></li>
                        </ul>       
                        <!-- /Submenu -->
                    </li>
                    <li>
                        <a href="page-contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /Navbar -->
</header>
<!-- / Header
================================================== -->