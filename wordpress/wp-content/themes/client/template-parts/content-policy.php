<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package client
 */

?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h1><?php echo get_the_title(); ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
        	<div id="single-content" class="single-content">
	            <?php
	            the_content(
	                sprintf(
	                    wp_kses(
	                    /* translators: %s: Name of current post. Only visible to screen readers */
	                        __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'client'),
	                        array(
	                            'span' => array(
	                                'class' => array(),
	                            ),
	                        )
	                    ),
	                    wp_kses_post(get_the_title())
	                )
	            );

	            wp_link_pages(
	                array(
	                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'client'),
	                    'after' => '</div>',
	                )
	            );
	            ?>
	        </div><!-- .entry-content -->
        </div>
    </div>
    </div>
</div>
