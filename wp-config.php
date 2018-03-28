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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'benitoite');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'EQu<|[?ZAm%Il}_e8Zmav|ZjNI/W.f`k%YWP}7LV=D|(/^6}$~zO;1SWS4n%Dl?c');
define('SECURE_AUTH_KEY',  'iUN{3-4c.}Tw%&/%AW}vc]sGGaVhzYNUcjI<3-+S-_BAM5wo(2m,62G4&M|.9+D|');
define('LOGGED_IN_KEY',    'o6I1kP8Ccr{+M4qBF~LThYB`M|L-$|i1OZ>ZGr*FI_JVOY+ns7c[2-q1.t/x@ym?');
define('NONCE_KEY',        'Ag3irab-Z+|fh+t2yiHaIM6*lB0NN-pE+S4+mmHdYOCV}1bH|o.s5o)eMsbhHPTo');
define('AUTH_SALT',        'ih|`_i2NuA-fu|x09|6j}qLN]p2nCNqRTg*bivSB~--&(Rd*c!W+lh1!$:K.[e8U');
define('SECURE_AUTH_SALT', '+_@ymSQbWlwxjL3}NnTK{wig)ffNu.JUuZ&C!tQs,_8xv|Nu$/}3A=nP]<olP~)@');
define('LOGGED_IN_SALT',   '(|aN!Q@]aW5m|IK;$N(?EAQ^7!N4tkBxfdxtjSr}OsKT,Dy<QG*E7l-W0m<Lwihy');
define('NONCE_SALT',       'dW!}{iVY$`1|rzqYg+is[SP/6M(H^|{tKKv}G?U|/(:,mn`Q=d9>_UQ++~P_+?,L');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
