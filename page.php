<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Moni_Recipe
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="page-main-section">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

		endwhile; // End of the loop.
		?>

	</div>
	<div class="col-12 col-sm-12 col-lg-4 col-xl-4">
			<?php get_template_part( 'template-parts/content', 'monisidebar' ); ?>
	</div>
</div>
</div>
</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
