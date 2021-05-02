<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package client
 */

get_header();
?>
	<main id="single" class="site-single">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'single' );
			// If comments are open or we have at least one comment, load up the comment template.
		endwhile; // End of the loop.
		?>
		<?php
			get_template_part('template-parts/home', 'choose-us');
            get_template_part('template-parts/home', 'contact');
		 ?>
	</main><!-- #main -->

<?php
get_footer();
