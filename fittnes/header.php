<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fittnes
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>FitnessTime</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans%7COswald:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/dist/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/dist/css/app.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- BEGIN HEADER -->
   	<header id="header" class="main_header">
		<div class="container">
			<div class="headerWrap">
				<div class="header_logo">
					<a href="<?php echo get_home_url() ?>">
						<img src="<?php echo get_template_directory_uri()?>/dist/images/logo.png" alt="FitnessTime Logo">
					</a>
				</div>
				<nav class="nav_wrapper">
                    <?php wp_nav_menu( array(
                        'menu'            => 'main-menu',
                        'container_class' => 'main-menu-container',
                        'menu_class'      => 'menu',
                    ) ); ?>
				</nav>
				<div class="hamburger show-mob"> 
				    <span></span>
				    <span></span> 
				    <span></span> 
				</div>
				<a href="tel:+1-800-555-1234" class="call_button"><span>1-800-555-1234</span></a>
			</div>
        </div>
    </header>
    <!-- END HEADER -->
    <!-- BEGIN MAIN -->
    <main id="main" class="main_content">
        <div class="mainWrap">