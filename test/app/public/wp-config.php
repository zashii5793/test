<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'PGZoxUdIJb+aR5sVVtMxYM32zdV3Xdld1K3SCxpE1RyNAjmbjFAahe9QpXII32o9nGk0AniKJ0H40yiPoi3BTg==');
define('SECURE_AUTH_KEY',  'Iwe44e4aGiSBHj4OB3tfwUV12utbUm+YkTEKdIHHWfWMdZY5YlBIk/GItyblsh6UK7d8vDcBvDx8vZ+sYNAZwA==');
define('LOGGED_IN_KEY',    'XPse5qG84QfhPWorNT1iyq5RHvz9Ox/EqlOSSQexFg+dqQUQdV6dH77dSZQBoQX4XM7uyRPVmEpWq/1GY24a7A==');
define('NONCE_KEY',        'fHxLB3gV8DqttAAccb4Gc6VjobLe616zJAp/dOmpZxZVmOM01Ecn+x9680LjACkZcxo0lvVeRw/Ve0Atr5+dBQ==');
define('AUTH_SALT',        'Bqxz5lO6lPuWYAj7jeWM/yJQ12Pp6SfBujU3Ho2SGKv3wXpyfEJV+IvSFaNEq5uokPuFTYMNZ4MhI8Wwn7+RRw==');
define('SECURE_AUTH_SALT', 'YNS0uVzSJzoYPSgYpmu/UWk7OkScCGJsMeJLXpFiILQUnm8hn8Voii9QU+rMS2RSIibfFGe8KXWAPEcG09EpNQ==');
define('LOGGED_IN_SALT',   'mIm1pJ/CVgPsmdWtUNyOSWDxyC0wlpi+fGpBD8AMIOyRVwIRD2pq7OVYfWNd8pITStG8lrv78R2XX5Re/iSS8w==');
define('NONCE_SALT',       'Oq3hv7HUDkS15jB54AumrldR3DU2wcsqzDOqdTtz9ABKRQGOK5l0mOF9JJdD2uurP/Qmfw0GvPT3JV2ZqBPIcw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
