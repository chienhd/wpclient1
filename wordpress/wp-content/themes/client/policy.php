<?php
/**
 * Template Name: Policy
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package client
 */

get_header();
?>

	<main id="contact" class="page-body-content">
        <?php if(get_the_post_thumbnail_url()): ?>
            <section id="slideshow">
                <div class="single-banner-other-page">
                    <img class="position-image-center" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_post_thumbnail_url(); ?>">
                </div>
            </section>
        <?php endif; ?>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'policy' );
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
