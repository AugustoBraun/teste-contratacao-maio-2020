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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'w16' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.Hsbx=iX+Xp[/Aq7z;eQK?e}/) %1@QkKi3x2N-=0nCoYMw2Q;,PNOg#F8@=CC)]' );
define( 'SECURE_AUTH_KEY',  'd,pMnnn~-f5adVJiViD-Vv/a1xHwjh,X*%3G@N=BG:&B&kah^w&r);T~]x?[8k>K' );
define( 'LOGGED_IN_KEY',    'Ogl[f?2Jz1V`0>ROz|oKI&#9hM0-A} 0Cm-`l]g@.[QM9mz9[{hGBpNFYGy)jM-z' );
define( 'NONCE_KEY',        ':G%keVDaZ:6Jj`Um*O6mrm3-R8x#OzWBdd.`ZHcNDnF swsUn=R<),FBWMib)e.z' );
define( 'AUTH_SALT',        'JP^LCi._s.Ck^|`=-@?G#euQlFm;*~=HinGnJsXJ:gN LrJp ]GZlp?_ LXk~aco' );
define( 'SECURE_AUTH_SALT', 'ACa6HqAHiKaSV6Y?E&jF+#l/>7;d[x}h$e:HsS+t:j=Uhh:Q~k# N2ORm!-64;E1' );
define( 'LOGGED_IN_SALT',   'p^QZMl6z.Dz8!E<QeLuQ+Q1-(XSzVz64$)Nj<$Rql@Q3jw^-3};x3E<2.-whk,6c' );
define( 'NONCE_SALT',       '@w^WoAiFt%|*9E[a% hyF4W,i<h,eDb^>{v(7bTj<>{ORt_eo$izYIwi@qzuV/];' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
