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

<section class="py-16 bg-blue">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<img src="http://localhost/popewaller/wp-content/uploads/2025/02/pope-waller-full-logo-tan.svg" width="480" />
				<address>
					<p>222 S Mill Avenue<br>
				Suite 800<br>
				Tempe, AZ 85281</p>
				<p><a href="mailto:info@popewaller.com">info@popewaller.com</a></p>
			</address>
			</div>
			<div class="col-lg-6">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.814932090871!2d-111.9452948708295!3d33.42806898163802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x872b09287805a013%3A0xc6ba014eadaed4b3!2s222%20S%20Mill%20Ave%2C%20Tempe%2C%20AZ%2085281!5e0!3m2!1sen!2sus!4v1739305824883!5m2!1sen!2sus" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
</section>

<div class="wrapper bg-darkgray" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

<p class="copyright">&copy; <?php echo date("Y"); ?> Pope Waller, PLLC. All rights reserved.</p>
<?php // understrap_site_info(); ?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!-- col -->

		</div><!-- .row -->

	</div><!-- .container(-fluid) -->

</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

