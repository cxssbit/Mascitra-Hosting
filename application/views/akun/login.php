<?php 
$this->load->view('Layout/header');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>CloudServer - Responsive HTML5 Technology, Web Hosting and WHMCS Template</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- ==== Favicons ==== -->
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="icon" href="favicon.png" type="image/x-icon">

    <!-- ==== Google Font ==== -->
    <link href='<?php echo base_url(); ?>fonts.googleapis.com/css?family=Roboto:300,400,500,700,900%7CMontserrat:700' rel='stylesheet' type='text/css'>

    <!-- ==== Font Awesome ==== -->
    <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet">
    
    <!-- ==== Bootstrap ==== -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    
    <!-- ==== jQuery UI ==== -->
    <link href="<?php echo base_url(); ?>css/jquery-ui.min.css" rel="stylesheet">

    <!-- ==== Animate CSS Library ==== -->
    <link href="<?php echo base_url(); ?>css/animate.min.css" rel="stylesheet">

    <!-- ==== Owl Carousel Plugin ==== -->
    <link href="<?php echo base_url(); ?>css/owl.carousel.css" rel="stylesheet">
    
    <!-- ==== Magnific Popup Plugin ==== -->
    <link href="<?php echo base_url(); ?>css/magnific-popup.css" rel="stylesheet" type='text/css'>
    
    <!-- ==== FakeLoader Plugin ==== -->
    <link href="<?php echo base_url(); ?>css/fakeLoader.css" rel="stylesheet" type='text/css'>
    
    <!-- ==== Main Stylesheet ==== -->
    <link href="<?php echo base_url(); ?>style.css" rel="stylesheet">
    
    <!-- ==== Responsive Stylesheet ==== -->
    <link href="<?php echo base_url(); ?>css/responsive-style.css" rel="stylesheet">
    
    <!-- ==== Theme Color Stylesheet ==== -->
    <link href="<?php echo base_url(); ?>css/colors/theme-color-1.css" rel="stylesheet" id="changeColorScheme">
    
    <!-- ==== Custom Stylesheet ==== -->
    <link href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
    <!-- Page Title Area Start -->
    <div id="pageTitle" class="bg--overlay" data-bg-img="<?php echo base_url(); ?>img/page-header-img/bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title">
                        <h2>Login</h2>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <ul class="breadcrumb">
                        <li><span>You are here:</span></li>
                        <li><a href="#">Home</a></li>
                        <li class="active">Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title Area End -->
    
    <!-- Login Area Start -->
    <div id="login">
        <div class="container">
            <div data-form-validation="true">
                <form action="<?= site_url('Login/masuk'); ?>" method="post" id="loginForm">
                    <div class="form-group">
                        <label for="loginEmail">Email address *</label>
                        <input type="email" name="username" class="form-control" id="loginEmail" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">Password *</label>
                        <input type="password" name="password" class="form-control" id="loginPassword" placeholder="Password" required>
                    </div>
                    <p class="help-block clearfix">
                        <a href="http://billing.ywhmcs.com/pwreset.php?systpl=CloudServer01" class="pull-left"><i class="fa fa-fw fa-key"></i>Forget Password ?</a>
                    </p>
                    <button type="submit" class="btn btn-block submit-button">login</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Login Area End -->
    
    <?php 
        $this->load->view('Layout/footer');
    ?>

    <!-- ==== jQuery Library ==== -->
    <script src="<?php echo base_url(); ?>js/jquery-3.1.0.min.js"></script>

    <!-- ==== jQuery UI ==== -->
    <script src="<?php echo base_url(); ?>js/jquery-ui.min.js"></script>
    
    <!-- ==== jQuery UI Touch Punch Plugin ==== -->
    <script src="<?php echo base_url(); ?>js/jquery.ui.touch-punch.min.js"></script>

    <!-- ==== Bootstrap ==== -->
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

    <!-- ==== FakeLoader Plugin ==== -->
    <script src="<?php echo base_url(); ?>js/fakeLoader.min.js"></script>

    <!-- ==== StickyJS Plugin ==== -->
    <script src="<?php echo base_url(); ?>js/jquery.sticky.js"></script>

    <!-- ==== Owl Carousel Plugin ==== -->
    <script src="<?php echo base_url(); ?>js/owl.carousel.min.js"></script>
    
    <!-- ==== jQuery Tubuler Plugin ==== -->
    <script src="<?php echo base_url(); ?>js/jquery.tubular.1.0.js"></script>
    
    <!-- ==== Magnific Popup Plugin ==== -->
    <script src="<?php echo base_url(); ?>js/jquery.magnific-popup.min.js"></script>

    <!-- ==== jQuery Validation Plugin ==== -->
    <script src="<?php echo base_url(); ?>js/jquery.validate.min.js"></script>

    <!-- ==== Animate Scroll Plugin ==== -->
    <script src="<?php echo base_url(); ?>js/animatescroll.min.js"></script>

    <!-- ==== jQuery Waypoints Plugin ==== -->
    <script src="<?php echo base_url(); ?>js/jquery.waypoints.min.js"></script>

    <!-- ==== jQuery CounterUp Plugin ==== -->
    <script src="<?php echo base_url(); ?>js/jquery.counterup.min.js"></script>
    
    <!-- ==== jQuery CountDown Plugin ==== -->
    <script src="<?php echo base_url(); ?>js/jquery.countdown.min.js"></script>
    
    <!-- ==== RetinaJS ==== -->
    <script src="<?php echo base_url(); ?>js/retina.min.js"></script>

    <!-- ==== Main JavaScript ==== -->
    <script src="<?php echo base_url(); ?>js/main.js"></script>
</body>
</html>
