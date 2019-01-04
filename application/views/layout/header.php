<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>MASCITRAHOSTING - Web Hosting Indonesia, Murah, Terbaik 2018</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- ==== Favicons ==== -->
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?=base_url()?>assets/favicon.png" type="image/x-icon">

    <!-- ==== Google Font ==== -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900%7CMontserrat:700' rel='stylesheet' type='text/css'>

    <!-- ==== Font Awesome ==== -->
    <link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- ==== Bootstrap ==== -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- ==== jQuery UI ==== -->
    <link href="<?=base_url()?>assets/css/jquery-ui.min.css" rel="stylesheet">

    <!-- ==== Animate CSS Library ==== -->
    <link href="<?=base_url()?>assets/css/animate.min.css" rel="stylesheet">

    <!-- ==== Owl Carousel Plugin ==== -->
    <link href="<?=base_url()?>assets/css/owl.carousel.css" rel="stylesheet">
    
    <!-- ==== Magnific Popup Plugin ==== -->
    <link href="<?=base_url()?>assets/css/magnific-popup.css" rel="stylesheet" type='text/css'>
    
    <!-- ==== FakeLoader Plugin ==== -->
    <link href="<?=base_url()?>assets/css/fakeLoader.css" rel="stylesheet" type='text/css'>
    
    <!-- ==== Main Stylesheet ==== -->
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
    
    <!-- ==== Responsive Stylesheet ==== -->
    <link href="<?=base_url()?>assets/css/responsive-style.css" rel="stylesheet">
    
    <!-- ==== Theme Color Stylesheet ==== -->
    <link href="<?=base_url()?>assets/css/colors/theme-color-1.css" rel="stylesheet" id="changeColorScheme">
    
    <!-- ==== Custom Stylesheet ==== -->
    <link href="<?=base_url()?>assets/css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.assets/js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- FakeLoader Start -->
    <div id="fakeLoader"></div>
    <!-- FakeLoader End -->

    <!-- Menu Area Start -->
    <div id="menu">
        <!-- Promo Area Start -->
        <div id="promo" class="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        
            <div class="container">
                <p><strong>Promo Hosting Murah </strong>Up To<strong> 30% Off</strong> Berlaku Semua Produk. Kode: "<strong>CIT2018</strong>". Berakhir: <strong data-counter-down="2018/03/10">00:00:00</strong></p>

                <a href="#" class="btn btn-custom">Promo</a>
            </div>
        </div>
        <!-- Promo Area End -->
    
        <!-- Primary Menu Start -->
        <nav id="primaryMenu" class="navbar">
            <div class="container">
                <div id="primaryNavbar" class="reset-padding">
                    <!-- Primary Menu Links Start -->
                    <ul class="primary-menu-links nav navbar-nav">
                        <li class="hidden-xs"><span>Web Hosting Indonesia</span></li>
                        <li><span class="phone"><i class="fa fa-phone"></i>0331 - 4350050</span></li>
                        <li><span class="email"><i class="fa fa-envelope"></i>info@mascitra.com</span></li>
                    </ul>
                    <!-- Primary Menu Links End -->
                    
                    <!-- Primary Social Links Start -->
                    <ul class="primary-social-menu-links nav navbar-nav navbar-right">
                        <li><a href="https://www.facebook.com/mascitra.com.it"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                    <!-- Primary Social Links End -->
                </div>
            </div>
        </nav>
        <!-- Primary Menu End -->

        <!-- Secondary Menu Start -->
        <nav id="secondaryMenu" class="navbar" data-sticky="true">
            <div class="container">
                <div class="navbar-header">
                    <!-- Logo Start -->
                    <a href="index.php" class="navbar-brand">
                        <img src="<?=base_url()?>assets/img/logo.png" alt="" class="img-responsive"/>
                    </a>
                    <!-- Logo End -->
                </div>
                
                <!-- Off-Canvas Menu Toggle Button Start -->
                <button class="btn menu-toggle-btn">
                    <i class="fa fa-navicon"></i> Menu
                </button>
                <!-- Off-Canvas Menu Toggle Button End -->
                
                <!-- Secondary Menu Links Start -->
                <div id="secondaryNavbar" class="navbar-right reset-padding hidden-sm hidden-xs">
                    <ul class="secondary-menu-links nav navbar-nav">
                        <li class="<?php if($this->router->fetch_class()=='home'){echo'active';}?>">
                            <a href="<?=base_url()?>">Home</a>
                        </li>

                        <li class="<?php if($this->router->fetch_class()=='hosting'){echo'active';}?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hosting <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?=base_url('hosting/shared')?>">Shared Hosting</a></li>
                                <li><a href="<?=base_url('hosting/reseller')?>">Reseller Hosting</a></li>
                                <li><a href="<?=base_url('hosting/vps')?>">VPS Hosting</a></li>
                                <li><a href="<?=base_url('hosting/dedicated')?>">Dedicated Hosting</a></li>
                            </ul>
                        </li>

                        <li class="<?php if($this->router->fetch_class()=='domain'){echo'active';}?>">
                            <a href="<?=base_url('domain')?>">Domain</a>
                        </li>

                        <li class="<?php if($this->router->fetch_class()=='pages'){echo'active';}?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?=base_url('pages/about')?>">About</a></li>
                                <li><a href="<?=base_url('pages/service')?>">Service Details</a></li>
                                <li><a href="<?=base_url('pages/gallery')?>">Gallery</a></li>
                                <li><a href="<?=base_url('pages/faq')?>">FAQ</a></li>
                                <li><a href="<?=base_url('pages/datacenter')?>">Datacenter</a></li>
                                <li><a href="<?=base_url('pages/testimonial')?>">Testimonial</a></li>
                                <li><a href="<?=base_url('auth/login')?>">Login</a></li>
                                <li><a href="<?=base_url('pages/affiliate')?>">Affiliate</a></li>
                            </ul>
                        </li>

                        <li class="<?php if($this->router->fetch_class()=='blog'){echo'active';}?>">
                            <a href="<?=base_url()?>blog">Blog</a>
                        </li>

                        <li class="<?php if($this->router->fetch_class()=='contact'){echo'active';}?>">
                            <a href="<?=base_url('contact')?>">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- Secondary Menu Links End -->
            </div>
        </nav>
        <!-- Secondary Menu End -->
        
        <!-- Off-Canvas Menu Start -->
        <div class="off-canvas-menu">
            <!-- Off-Canvas Menu Close Button Start -->
            <button type="button" class="off-canvas-menu--close-btn"><i class="fa fa-close"></i></button>
            <!-- Off-Canvas Menu Close Button End -->
            
            <!-- Off-Canvas Menu Logo Start -->
            <div class="off-canvas-menu-logo">
                <a href="index.php">
                    <img src="<?=base_url()?>assets/img/logo.png" alt="" class="img-responsive center-block" />
                </a>
            </div>
            <!-- Off-Canvas Menu Logo End -->
            
            <!-- Off-Canvas Menu Links Start -->
            <ul class="nav nav-pills nav-stacked">
                <li class="<?php if($this->router->fetch_class()=='home'){echo'active';}?>">
                    <a href="<?=base_url()?>"><i class="fa fa-fw fa-home"></i> Home</a>
                </li>

                <li class="<?php if($this->router->fetch_class()=='hosting'){echo'active';}?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-fw fa-server"></i> Hosting <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?=base_url('hosting/shared')?>"><i class="fa fa-fw fa-angle-right"></i> Shared Hosting</a></li>
                        <li><a href="<?=base_url('hosting/reseller')?>"><i class="fa fa-fw fa-angle-right"></i> Reseller Hosting</a></li>
                        <li><a href="<?=base_url('hosting/vps')?>"><i class="fa fa-fw fa-angle-right"></i> VPS Hosting</a></li>
                        <li><a href="<?=base_url('hosting/dedicated')?>"><i class="fa fa-fw fa-angle-right"></i>Dedicated Hosting</a></li>
                    </ul>
                </li>

                <li class="<?php if($this->router->fetch_class()=='domain'){echo'active';}?>">
                    <a href="<?=base_url('domain')?>"><i class="fa fa-fw fa-at"></i> Domain</a>
                </li>

                <li class="<?php if($this->router->fetch_class()=='pages'){echo'active';}?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-copy"></i> Pages <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?=base_url('pages/about')?>"><i class="fa fa-fw fa-angle-right"></i> About</a></li>
                        <li><a href="<?=base_url('pages/service')?>"><i class="fa fa-fw fa-angle-right"></i> Service Details</a></li>
                        <li><a href="<?=base_url('pages/gallery')?>"><i class="fa fa-fw fa-angle-right"></i> Gallery</a></li>
                        <li><a href="<?=base_url('pages/faq')?>"><i class="fa fa-fw fa-angle-right"></i> FAQ</a></li>
                        <li><a href="<?=base_url('pages/datacenter')?>"><i class="fa fa-fw fa-angle-right"></i> Datacenter</a></li>
                        <li><a href="<?=base_url('pages/testimonial')?>"><i class="fa fa-fw fa-angle-right"></i> Testimonial</a></li>
                        <li><a href="<?=base_url('auth/login')?>"><i class="fa fa-fw fa-angle-right"></i> Login</a></li>
                        <li><a href="<?=base_url('pages/affiliate')?>"><i class="fa fa-fw fa-angle-right"></i> Affiliate</a></li>
                    </ul>
                </li>

                <li class="<?php if($this->router->fetch_class()=='blog'){echo'active';}?>">
                    <a href="<?=base_url('blog')?>"><i class="fa fa-fw fa-newspaper-o"></i> Blog</a>
                </li>

                
               <li class="<?php if($this->router->fetch_class()=='contact'){echo'active';}?>">
                    <a href="<?=base_url('contact')?>"><i class="fa fa-fw fa-envelope-o"></i> Contact</a>
                </li>

            </ul>
            <!-- Off-Canvas Menu Links End -->

            <a href="<?=base_url('auth/login')?>" class="btn btn-default login-button"><i class="fa fa-user"></i> Login</a>
        </div>
        
        <div class="off-canvas-menu-overlay"></div>
        <!-- Off-Canvas Menu End -->
    </div>
    <!-- Menu Area End -->