<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'digi64_wp76' );

/** Database username */
define( 'DB_USER', 'digi64_wp76' );

/** Database password */
define( 'DB_PASSWORD', '9n0].SC2np' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'skzsyuqytmvwemgkdqtg2umwrdqtw76krjgpmw8j3cj938oyfkqahrz820pdg7au' );
define( 'SECURE_AUTH_KEY',  'ntfqp3tepiqpdr30ea3z7qza4hdggmddrsnhjzoox5gpjclgvubtmcdrho6pwv55' );
define( 'LOGGED_IN_KEY',    'dy4m8xnednegjsd5pk8um4ygtgmh9io6rir1xto4zq6b0mxgrtudz1t6ezcnmsge' );
define( 'NONCE_KEY',        'jslcloss2nvt6i8qofoc2msjzejmprr93iuthnr9wwwbdsmtpdeyer3knrbaelyv' );
define( 'AUTH_SALT',        'pdd1qthnbzlici8g221q1nl9pekubmmtnoeb9bjluvhrj4x5lbti3kplewvcankz' );
define( 'SECURE_AUTH_SALT', 'vgsxjlifnbqb0smvv88w0hoomrhfdvv39wy0okdhze5zngx5kqqmnci0bwxny0pt' );
define( 'LOGGED_IN_SALT',   'tptfnvodgvmrlurnfhxrt1bhdqiriqktel5ygsozo1mrc3epe089eox5outb5aqr' );
define( 'NONCE_SALT',       '6vqmxtnctzutgcbo97glm5xf9a1n1bvdrqmb70qgz3h8sb1w8wrrlm2moeymyojv' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdf_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
