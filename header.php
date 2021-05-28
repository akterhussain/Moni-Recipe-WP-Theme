<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moni_Recipe
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="forallpage header-section">
		<div class="container">
			<div class="row">
				<div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="logo-area">
						<?php the_custom_logo(); ?>
					</div><!-- Logo area -->
				</div><!-- col-xl-3 -->
				<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-5">
					<div class="mobile-header">
						<button class="search-mobile"><i class="fas fa-search"></i></button>
						<div class="mobile-search-content">
							<form action="<?php echo home_url('/'); ?>" method="get">
								<input class="input-search-text" type="search" placeholder="Search keyword..." name="s">
								<input type="submit" name="" value="Search">
							</form>
							<div class="mobile-search-hide"></div>
						</div>
						<button class="category-mobile"><i class="fas fa-list-ul"></i></button>
						<div class="mobile-category-content">
							<h2 class="top-catagories-title">All Categories</h2>
							<nav class="mobile-cate-menu">
								<?php 
								wp_nav_menu( array(
									'theme_location' => 'category_menu'
								) );

								?>
							</nav>
							<div class="mobile-cate-content-hide"></div>
						</div>
						<button class="main-menu-btn"><i class="fas fa-bars"></i></button>
						<div class="mobile-main-maneu-cont">
							<nav class="mobile-main-menu">
								<?php 
								wp_nav_menu( array(
									'theme_location' => 'main_menu'
								) );

								?>
							</nav>
							<div class="mobile-main-mau-hide"></div>
						</div>
						
					</div>
					<div class="category-search-area">

						<div class="category-content">
							<h2 class="top-catagories-title">All Categories</h2>
							<div class="close-btn">+</div>
							<nav class="header-catagories-menu">
								<?php 
								wp_nav_menu( array(
									'theme_location' => 'category_menu'
								) );

								?>
							</nav>
						</div>
						<form action="<?php echo home_url('/'); ?>" method="get">
							<input class="search-text" type="search" placeholder="Search keyword..." name="s">
							<input type="submit" name="" value="Search">
						</form>
					</div>


				</div><!-- col-xl-8 -->

				<div class="col-lg-3 col-xl-4">
					<div class="top-menu-area">
						<button class="categories-btn"><i class="fas fa-list-ul"></i> Categories</button>
						<div class="moni-categories-menu-stucture">
							<nav class="moni-categories-menu">
								<?php 
								wp_nav_menu( array(
									'theme_location' => 'category_menu'
								) );

								?>
							</nav>
							<div class="categories-hide-content"></div>
						</div>

						<button class="main-menu-btn"><i class="fas fa-bars"></i> Menu</button>
						<div class="moni-main-menu-stucture">
							<nav class="moni-main-menu">
								<?php 
								wp_nav_menu( array(
									'theme_location' => 'main_menu'
								) );

								?>
							</nav>
							<div class="main-menu-hide"></div>
						</div>
					</div>
				</div><!-- col-xl-1 -->
			</div><!-- Row -->
		</div><!-- Container -->

	</header><!-- header-section -->
