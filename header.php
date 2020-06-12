<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<title>Trident Academy</title>
	<meta name="description" value="Trident Academy">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="icon" href="<?php echo get_template_directory_uri() ?>/front-end/images/favicon.png" >
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
	<div class="header--social">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<p class="tel-link">
						<a href="tel:+91-7578011234">
							<i class="fa fa-phone"></i> +91-7578011234
						</a>&nbsp;&nbsp;
						<a href="mailto:info@thetridentacademy.com">
							<i class="fa fa-envelope-o"></i>
						info@thetridentacademy.com</a>
					</p>
				</div>
				<div class="col-md-6">
					<ul class="link">
						<li><a href="https://www.facebook.com/thetridentacademy/" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="header--menu">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-8 col-8">
					<div class="header--logo">
						<a href="<?php echo esc_url(home_url('/')) ?>">
							<img src="<?php echo get_template_directory_uri() ?>/front-end/images/logo-trident.png">
						</a>
					</div>
				</div>
				<div class="col-4 text-right d-block d-sm-block d-md-none">
					<a href="javascript:;" class="menuToggle"><img src="<?php echo get_template_directory_uri() ?>/front-end/images/menu.png"></a>
				</div>
				<div class="col-md-9 col-xs-12">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu','container_class' => 'header--nav' ) ); ?>
				</div>
				
			</div>
		</div>
	</div>
</header>