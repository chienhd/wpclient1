<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package client
 */

?>

	<footer id="footer" class="site-footer">
		<div class="footer_top">
            <div class="container">
                <div class="row">
                    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                </div>
            </div>
        </div>
        <div class="footer_bottom">

        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
