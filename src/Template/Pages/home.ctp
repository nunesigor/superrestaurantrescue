
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Super Restaurant Rescue</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Super Restaurant Rescue" />
        <meta name="keywords" content="restaurant,supply,professional,kitchen,chef,food" />

        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory 
        <link rel="shortcut icon" href="favicon.ico"> -->

        <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>

        <!--
        <link rel="stylesheet" href="../../../webroot/css/animate.css">
        <link rel="stylesheet" href="../../../webroot/css/icomoon.css">
        <link rel="stylesheet" href="../../../webroot/css/simple-line-icons.css">
        <link rel="stylesheet" href="../../../webroot/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="../../../webroot/css/flexslider.css">
        <link rel="stylesheet" href="../../../webroot/css/bootstrap.css">
        <link rel="stylesheet" href="../../../webroot/css/style.css">
        -->

        <!--
        <script src="../../../webroot/js/modernizr-2.6.2.min.js"></script>
         -->
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        
        <?= $this->Html->script('jquery.min')?> 
    <?= $this->Html->script('bootstrap.min')?>
    <?= $this->Html->script('moment')?>
    <?= $this->Html->script('modernizr.min')?>
    <?= $this->Html->script('bootstrap-datetimepicker.min')?>
    <?= $this->Html->script('jquery.easing.1.3')?>
    <?= $this->Html->script('jquery.flexslider-min')?>
    <?= $this->Html->script('jquery.stellar.min')?>
    <?= $this->Html->script('jquery.waypoints.min')?>
    <?= $this->Html->script('main')?>
    <?= $this->Html->script('respond.min')?>  
        
    <?= $this->Html->css('animate') ?>
    <?= $this->Html->css('base') ?>
    <?= $this->Html->css('bootstrap-datetimepicker.min') ?>
    <?= $this->Html->css('bootstrap') ?>
    <?= $this->Html->css('flexslider') ?>
    <?= $this->Html->css('home') ?>
    <?= $this->Html->css('icomoon') ?>
    <?= $this->Html->css('simple-line-icons') ?>
    <?= $this->Html->css('style') ?>
    
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    </head>
    <body>

        <div id="fh5co-container">
            <div id="fh5co-home" class="js-fullheight" data-section="home">

                <div class="flexslider">

                    <div class="fh5co-overlay"></div>
                    <div class="fh5co-text">
                        <div class="container">
                            <div class="row visible-xs-block visible-sm-block" style="padding-top: 100px;">
                                <h1 class="to-animate" style="font-size: 40px;">Super Restaurant <spam style="color: #FB6E14;">Rescue</spam></h1>
                                <h2 class="to-animate">Best place for your restaurant!</h2>
                            </div>
                            <div class="row visible-md-block visible-lg-block">
                                <h1 class="to-animate" style="font-size: 100px;">Super Restaurant <spam style="color: #FB6E14;">Rescue</spam></h1>
                                <h2 class="to-animate">Best place for your restaurant!</h2>
                            </div>
                        </div>
                    </div>
                    <ul class="slides">
                        <li style='background-image: url(<?php echo $this->Url->image('slide_1.jpg');?>);' data-stellar-background-ratio="0.5"></li>
                        <li style='background-image: url(<?php echo $this->Url->image('slide_2.jpg');?>);' data-stellar-background-ratio="0.5"></li>
                        <li style='background-image: url(<?php echo $this->Url->image('slide_3.jpg');?>);' data-stellar-background-ratio="0.5"></li>
                        <li style='background-image: url(<?php echo $this->Url->image('slide_4.jpg');?>);' data-stellar-background-ratio="0.5"></li>
                    </ul>

                </div>

            </div>

            <div class="js-sticky">
                <div class="fh5co-main-nav">
                    <div class="container-fluid">
                    <div class="fh5co-logo" style="width: 50%;">
                        <a href="index.html" class="external">Super Restaurant <spam style="color: #FB6E14;">Rescue</spam></a>
                    </div>
                    <div class="fh5co-menu-2">
                        <a href="/pages/home" class="external" data-nav-section="home">Home</a>
                        <a href="/pages/about" class="external" data-nav-section="about">About</a>
                        <a href="/product/listall/0" class="external" data-nav-section="new">New Products</a>
                        <a href="/product/listall/1" class="external" data-nav-section="used">Used Products</a>
                        <a href="contact.html" class="external" data-nav-section="reservation">Contact</a>
                    </div>
                </div>

                </div>
            </div>

            <div id="fh5co-about" data-section="about">
                <div class="fh5co-2col fh5co-bg to-animate-2" style="background-image: url(<?php echo $this->Url->image('slide_5.jpg');?>);"></div>
                <div class="fh5co-2col fh5co-text">
                    <h2 class="heading to-animate">About Us</h2>
                    <p class="to-animate"><span class="firstcharacter">W</span>e are passionate about food and we are passionate about helping. Our mission is to provide all our customers with the best equipment and supplies for their restaurants. If you need the best equipment at the best price, we really want to help you. We believe that your success is our success!</p>
                    <p class="text-center to-animate"><a href="#" class="btn btn-primary btn-outline">Get in touch</a></p>
                </div>
            </div>



           


        </div>

        <div id="fh5co-footer">
            <div class="container">
                <div class="row row-padded">
                    <div class="col-md-12 text-center">
                        <p class="to-animate">&copy;All rights reserved.
                        </p>
                        <p class="text-center to-animate"><a href="#" class="js-gotop">Go To Top</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="fh5co-social">
                            <li class="to-animate-2"><a href="#"><i class="icon-facebook"></i></a></li>
                            <li class="to-animate-2"><a href="#"><i class="icon-twitter"></i></a></li>
                            <li class="to-animate-2"><a href="#"><i class="icon-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        
    </body>
</html>
