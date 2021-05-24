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

// ** MySQL settings - You can get this info from your web host ** //
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
define('AUTH_KEY',         'L+1r2cqGoosjr5O5vnIuiJULM95hvWuTZdFmZ6swJAzp4oi4C1sDY7KIxX9hQqjkEdq7Y3rEl7/xUIg4UnAS6w==');
define('SECURE_AUTH_KEY',  'dfLcbKTj4yyEK6bvy5b49EzdhVQhX2o+u6Jc2iDChi61dnACI9xNbbA9hTaNj5QSPMCrBPJKc/fa01XkWa0v3A==');
define('LOGGED_IN_KEY',    '+QwXsc240RkBQuQrxVVx+kurwMdWAzY+48BjTZmiaZkWXP9rZJDqfffehVLHSRv9jB50/t+HDGzUern2Z0gtlw==');
define('NONCE_KEY',        'WvdETsDyVaBHOKleXAvQBSiuAjHDiJXnLu7KgNRAFFoUxzh8NWA+ycR4+X5Nnhdy5cgy6cxOM42TjUDfSDpK1g==');
define('AUTH_SALT',        'HhspIQd8ewuap3/yNOrEK13S2sH+5FKvCoA4PZumdzuN41s+O/Y8kHz5pEmIn8BP5tK6tukX7qHd7uQ+lM+o4w==');
define('SECURE_AUTH_SALT', 'sv43DGnQrj4Qxn6N6zbSbsLCoS/E0PDQcZEvnfSCljMIljiyH2mQCk9/+Ivo9UdhH1zTS77a2B2/fX1N3aoEqA==');
define('LOGGED_IN_SALT',   'EpGpG2i685EPL6AC1wyqs6+dhiJGdpiydAOoB/C8MwkSj5NOJrK31LuzN3sVBPCnJ/JEYR+ONoQM3EfRlIwYNw==');
define('NONCE_SALT',       'mhzl575vKptBxXRj0X6gUqXzVwE9aAQL3gTVIh4mGEj+aYCQci3DrDqimeGwnhMcecr1YNEOw7IUS6y3+mHVeg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
