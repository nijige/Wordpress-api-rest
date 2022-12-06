<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'teste_db');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 define('JWT_AUTH_SECRET_KEY', 'your-top-secret-key');
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'a92Q~)76iuUWBk9< ^WZBG7Y~*Nw?v;CFV(+BhFdE6SN=%jc|Z*3>EG00WA$Z6U,');
define('SECURE_AUTH_KEY',  '7m4^)%ZJd>85Yv/z]pJ?SyBUdieWNMa&{h^wrN#ej&yCt[7Vf-~@+kJj2N^><29l');
define('LOGGED_IN_KEY',    'cN-n~W;Gh!C^h &3IFeU7%7j<3iicTNW#%+Q-B85djIgf+rjuNlFC(q>?t[iQOG#');
define('NONCE_KEY',        'D^OrIIdU[%O_5kyRvgy6v$dz$)@D=DZp)=ZVpyAC!&,n4mb(-w&q44GV;RDzEk_<');
define('AUTH_SALT',        '>Xi1Ql>_JPtO)G=/iVCRr4wWq>qPBnW.sxZ/,pyx33ZOnZ |~&H5G&/;Pro]%_r=');
define('SECURE_AUTH_SALT', 'w;Luu$~$Dh$x1G4G$_]?u1V`[D:g*?){vk;tKW9z4#qz~C0w)r-~!C5!r13VD_-&');
define('LOGGED_IN_SALT',   't8@(@=Y+qd@Jzt+AaztnA?d#kKE7D;3Y{m`0qvQ$Vdbs,D`JtL3JKV>@]Dy 8?3?');
define('NONCE_SALT',       'M$;%nlCpC22Bn<AoP?7;msU-]rJ#wdmGr<.571ShX_C9UK /JY+6LPH6m=fNDJuZ');
define('JWT_AUTH_SECRET_KEY', '4t1)7:eEe0]{l5v+|]N-7l^G+AWo56o1hqor_{|>OSUU{zBR!T8Il>/UAd]PeZ13');
define('JWT_AUTH_CORS_ENABLE', true);

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';