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
define( 'DB_NAME', 'panda' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         '48kcYFJCeuoccX0s2eL4ZnIscWMkiOevjBX8YaO7PT1AjIcxreQANaOkUgh0icBx' );
define( 'SECURE_AUTH_KEY',  'VO9BinnHWepFTTi7IjV35JDUKQK9AdojLVz9zT6xm05Hzd6MMfSCtzCUEXXdDxe9' );
define( 'LOGGED_IN_KEY',    'rcCV8qPt87qbid5bfyy5sv1hjdhzWEC3S2hvnvz97pTNPXz6TCnzKrgh1YFDCAjv' );
define( 'NONCE_KEY',        'lbP965k3augc7mYuY2zA1MFcGS3rbL7mwhAwI7RQzAPbaKiC0iiS0CIT0g9cFvXC' );
define( 'AUTH_SALT',        'sYqRPfK5AtRnj3waQlsGzas8dvglAifL4Wj0Ohvo3goAqT0ZZVLvWkZY1zXhwtj9' );
define( 'SECURE_AUTH_SALT', 'oMY0cx6QGw6YTpF71d2zgkITLjNMgCoP7HOGyOYdvMPybrKDctkigR9Wni3Df8kS' );
define( 'LOGGED_IN_SALT',   'DSW0xiRIk9gxbX0hGa80pdRfXt91tXc9hjloeKofZTue8E7tNvoPI1asdlkSRZeU' );
define( 'NONCE_SALT',       'gv6VmOKMeZia9X14FIWrGpa9J6VPKqd4IxgSutlw9odrj4pjIjBdBZ4yAP28JTiH' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
