<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">   
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="msvalidate.01" content="9DDBB947C0850E3A05C7D2385EE2507E" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link href="<?php echo get_template_directory_uri() ?>/css/style.css" rel="stylesheet">
<?php wp_head(); ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo get_template_directory_uri(); ?>/javascripts/modernizr.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/javascripts/detectizr.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />  
<style type="text/css">
    .ui-corner-all{
        z-index: 10000;
        font-size: 10px;
    }
</style>
</head>
<body <?php body_class(); ?>>
<div class="container">
 <header class="page-head">
            <div class="row">
                <div class="col-sm-3">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="brand" alt="Connect Your Home"></a>
                </div>
                <div class="col-md-8 col-md-offset-1 col-sm-offset-0 col-sm-9 double-row">
                    <div class="row top-search">
                        <div class="col-md-12 col-sm-7 col-sm-offset-5 col-md-offset-0">
                        </div>
                    </div>
                    <!-- /row -->
                    <div class="row" cf>
                        <div class="col-md-9 col-md-offset-3 col-sm-7 col-sm-offset-5">
                        <!-- BACKEND TODO: Dynamic Phone Number -->
                            <div class="phone">
                                <span class="phone-label">Call Us At:</span>
                <?php
                if(get_field('cyl_phone_number', 'option')){ ?>
                    <a href="tel:<?php echo get_field('cyl_phone_number', 'option');?>" onClick="ga('send', 'event', 'Call', 'ClicktoCall');" class="phone-number">
                    <?php
                        echo get_field('cyl_phone_number', 'option');
                }elseif(get_field('phone_number_one_brand')){ ?><a href="tel:<?php echo get_field('phone_number_one_brand');?>" onClick="ga('send', 'event', 'Call', 'ClicktoCall');" class="phone-number">
                <?php
                        echo get_field('phone_number_one_brand');
                }else{ ?><a href="tel:<?php echo get_field('home_phone_number', 'option');?>" onClick="ga('send', 'event', 'Call', 'ClicktoCall');" class="phone-number">
                <?php
                        echo "test";
                } ?>
                    </a>                                
                            </div>
                            <!-- /phone -->
                        </div>
                        <!-- col-md-5 col-md-offset-7 -->
                    </div>
                    <!-- /row -->
                </div>
            </div>
            <!-- /row -->
            <div class="row">
                <nav class="top-nav">
               <a href="#" class="nav-toggle" id="nav-toggle" aria-hidden="false">Menu</a>
                   <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                </nav>
            </div>
        </header>