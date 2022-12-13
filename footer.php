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
<script defer type="text/javascript" src="/wp-content/themes/kierunki/src/js/footer-padding.js"></script>
<div class="wrapper" id="wrapper-footer">

	<div class="container-fluid">

				<footer class="site-footer" id="colophon" >

					<div id="footerB" class="footer-container">

						<img src="<?php echo get_site_url()."/wp-content/uploads/2022/11/Picsart_22-11-20_21-15-57-304-1-2048x700.jpg";?>"> <!--ta grafika jest za duża na pc i za mała na telefony-->
						<div class="footer-grid">

							<div id="footerA" class="footer-inner-containerA">
								Kierunki - portal społeczno-kulturalny 
								<br/>
								Redaktorzy naczelni:
								<br/>
								Adrianna Gąsiorek 
								<br/>
								Adam Seweryn
								<br/>
								Napisz do nas: <a href="mailto:redakcja@kierunki.info.pl">redakcja@kierunki.info.pl</a>
							</div>

							<div class="footer-inner-containerB">
								Polub nas 
								<a href="https://www.facebook.com/kierunki.info/">
								<svg xmlns="http://www.w3.org/2000/svg" width="20%" height="20%" viewBox="0 0 24 24">
									<path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
								</svg>
								</a>
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

