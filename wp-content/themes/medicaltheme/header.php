<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>
        <?php wp_title('|','true','right') ?>
        <?php bloginfo('name'); ?>
    </title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
-->
    <?php wp_head(); ?>
</head>

<body>
    <!-- header -->
    <div class="header_w3l">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                    <h1>
                        <a href="<?php bloginfo('url'); ?>">
                            <?php bloginfo('name'); ?>
                        </a>
                    </h1>
                </div>
                <!-- top-nav -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php medicaltheme_bootstrap_nav_menu() ?>
                    <div class="clearfix"> </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- header -->
