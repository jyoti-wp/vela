<?php
/**
 * Header template.
 *
 * @package vela
 */

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Vela</title>
	<?php wp_head(); ?>
</head>
<body>
<header>
	<div class="header-box">
		<div class="wrapper">
			<div class="main-header">
				<div class="header-container">
					<div class="logo-image">
						<?php if ( function_exists( 'the_custom_logo' ) ) {the_custom_logo();} ?>
					</div>
					<div class="header-menu-wrap">
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
					</div>
<!--					<div class="burger-menu-icon">☰</div>-->
				</div>
			</div>
		</div>
	</div>
</header>
