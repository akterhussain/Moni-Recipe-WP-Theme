<?php
/**
 * Template Name: Moni Contact
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Moni_Recipe
 */
get_header();


?>


<main class="page-main-section">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
				<?php the_title( '<h1 class="catagory-title">', '</h1>' ); ?>
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
						<div class="moni-contact-form">
							<?php echo do_shortcode('[contact-form-7 id="1398" title="Contact form"]'); ?>
						</div>
					</div>
				</div>

			</div>
			<div class=" col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
				<?php get_template_part( 'template-parts/content', 'monisidebar' ); ?>
			</div>
		</div>
	</div>

</main><!-- #main -->

<?php
get_footer();
