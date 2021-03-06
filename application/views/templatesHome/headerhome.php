<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

    <!--- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Woo - Free Responsive HTML5/CSS3 Template</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?php echo base_url();?>resources/css/default.css">
    <link rel="stylesheet" href="<?php echo base_url();?>resources/css/layout.css">
    <link rel="stylesheet" href="<?php echo base_url();?>resources/css/media-queries.css">
    <link rel="stylesheet" href="<?php echo base_url();?>resources/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url();?>resources/css/prettyPhoto.css">
    <link rel="stylesheet" href="<?php echo base_url();?>resources/css/sidebar.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Script
    ================================================== -->
    <script src="<?php echo base_url();?>resources/js/modernizr.js"></script>
    <!-- Favicons
     ================================================== -->
    <link rel="shortcut icon" href="<?php echo base_url();?>resources/favicon.png" >

</head>

<body>

<div id="preloader">
    <div id="status">
        <img src="<?php echo base_url();?>resources/images/preloader.gif" height="64" width="64" alt="">
    </div>
</div>

<!-- Header
================================================== -->
<header>

    <div class="logo">
        <a class="smoothscroll" href="<?php echo base_url("index.php/pages/base");?>"><img alt="" src="<?php echo base_url();?>resources/images/logo.png"></a>
    </div>
    <nav id="nav-wrap">
        <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show Menu</a>
        <a class="mobile-btn" href="#" title="Hide navigation">Hide Menu</a>
        <ul id="nav" class="nav">
            <li><a href="<?php echo base_url("index.php/Utente_controller");?>/"><?php echo $_SESSION['username'] ?></a></li>
            <li><a href="<?php echo base_url("index.php/pages");?>/login">Ricerca</a></li>
            <li><a href="<?php echo base_url("index.php/pages/base");?>/">Base</a></li>
            <li><a href="<?php echo base_url("index.php/Torneo");?>/">Tornei</a></li>
            <li><a href="<?php echo base_url("index.php/pages");?>/logout"><i class="fa fa-power-off"></i></a></li>
        </ul> <!-- end #nav -->
    </nav> <!-- end #nav-wrap -->
        
   <div id="site-wrapper">
      <nav class="menu" role="navigation">
            <ul>
             <?php foreach($_SESSION['online'] as $online_user): ?>
                <?php if($online_user['username']!=$_SESSION['username']):?>   
                    <li><a><?php echo $online_user['username'] ?></a></li>
                <?php endif; ?>
             <?php endforeach; ?>   
            </ul>
      </nav>
    <a href="#" class="nav-toggle"><span class="fa fa-bars"></span></a>
</div> 
</header> <!-- Header End -->

