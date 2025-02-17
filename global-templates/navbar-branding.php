<?php
/**
 * Navbar branding
 *
 * @package Understrap
 * @since 1.2.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! has_custom_logo() ) { ?>

	<?php if ( is_front_page() && is_home() ) : ?>

		<h1 class="navbar-brand mb-0">
			<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url">
				<img src="http://localhost/popewaller/wp-content/uploads/2025/02/pope-waller-logo-mark-tan.svg" width="100" alt="" role="presentation" />
			</a>
		</h1>

	<?php else : ?>

		<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url">
			<img src="http://localhost/popewaller/wp-content/uploads/2025/02/pope-waller-logo-mark-tan.svg" width="100" alt="" role="presentation" />
		</a>

	<?php endif; ?>

	<?php
} 