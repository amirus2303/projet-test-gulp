<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo("title"); ?></title>

    <!-- Bootstrap -->
    <link href="<?php bloginfo("stylesheet_url"); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <section class="header">
        <nav class="navbar navbar-default navbar-fixed-top js-menu">
            <div class="container">
                <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="/wp-content/themes/activebox/assets_dist/img/logo.png" alt="logo" /></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <?php 
                            $defaults = array('menu_class'=> 'nav navbar-nav navbar-right');  
                        ?>
                        <?php wp_nav_menu( $defaults ); ?>
                        
                        <!--<ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#">Features</a></li>
                            <li><a href="#">Works</a></li>
                            <li><a href="#">Our team</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Download</a></li>
                        </ul>-->
                    </div><!-- /.navbar-collapse -->
                </div>    
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container padding_top_100">
            <div class="row padding_top_100 padding_bottom_100 text-center">
                <div class="col-xs-10 col-xs-offset-1">
                    <h1 class="no_padding_top_bottom big">Your Favorite One Page<br />Multi Purpose Template</h1>
                    <p class="title_small padding_top_40">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna vel scelerisque nisl consectetur et.
                    </p>
                    <button type="button" class="btn red margin_top_80"> Find out more</button>
                </div>
                
            </div>
        </div>
    </section>