<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrapper">

	<header class="site-header">

		<a href="#popup-cta" id="scroll-btn"></a>
	
		<div class="container">	
		
			<div class="navbar">	
				
				<h1 id="logo"><a href="/">Daruma Yoga</a></h1>
				
				<nav class="primary-menu">
					<ul class="link-list">
						<li><a href="#">Schedule</a></li>
						<li>
							<a href="#">Practice</a>
							<ul class="submenu">
								<li><a href="#">Class Styles</a></li>
								<li><a href="#">Pop-Up Yoga</a></li>
								<li><a href="#">For Beginners</a></li>
							</ul>
						</li>
						<li>
							<a href="#">About</a>
							<ul class="submenu">
								<li><a href="#">The Teacher</a></li>
								<li><a href="#">Daruma Yoga</a></li>
								<li><a href="#">Gallery</a></li>
							</ul>
						</li>
						<li><a href="#">Contact</a></li>
					</ul>
				</nav>
				
			</div> <!--END .navbar -->
			
			<button>Sign Up for Class</button>
			
			<h2>The background here will be images/video/large visuals. This will be a header to support it and create a call to action.
			<a href="#">Call to Action</a></h2>
		
		</div>

	</header>