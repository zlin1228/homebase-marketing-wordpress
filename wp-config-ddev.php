<?php

if ( getenv( 'IS_DDEV_PROJECT' ) == 'true' ) {
	define( 'BE_MEDIA_FROM_PRODUCTION_URL', 'https://joinhomebase.com' );
	
	/** The name of the database for WordPress */
	defined( 'DB_NAME' ) || define( 'DB_NAME', 'db' );

	/** MySQL database username */
	defined( 'DB_USER' ) || define( 'DB_USER', 'db' );

	/** MySQL database password */
	defined( 'DB_PASSWORD' ) || define( 'DB_PASSWORD', 'db' );

	/** MySQL hostname */
	defined( 'DB_HOST' ) || define( 'DB_HOST', 'ddev-hb-marketing-site-db' );

	/** WP_HOME URL */
	defined( 'WP_HOME' ) || define( 'WP_HOME', 'https://hb-marketing-site.ddev.site:8443' );

	/** WP_SITEURL location */
	defined( 'WP_SITEURL' ) || define( 'WP_SITEURL', WP_HOME . '/' );

	/** Enable debug */
	defined( 'WP_DEBUG' ) || define( 'WP_DEBUG', false );

	/**
	 * Set WordPress Database Table prefix if not already set.
	 *
	 * @global string $table_prefix
	 */
	if ( ! isset( $table_prefix ) || empty( $table_prefix ) ) {
		// phpcs:disable WordPress.WP.GlobalVariablesOverride.Prohibited
		$table_prefix = 'wp_';
		// phpcs:enable
	}
}
