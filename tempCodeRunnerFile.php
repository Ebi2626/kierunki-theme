<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="container-fluid">

		
				<footer class="site-footer" id="colophon" >
					<div class="footer">
					<div class="footer-container">
					
						<!-- <img style="width: 100%;" src="<?php echo get_site_url()."/wp-content/uploads/2022/11/Picsart_22-11-20_21-15-57-304-1-2048x700.jpg";?>"> -->
						<div >
							test1
						</div>

						<div >
							test2
						</div>

					</div>
					</div>
					
					
					

				</footer><!-- #colophon -->

			

	</div><!-- .container(-fluid) -->

</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>