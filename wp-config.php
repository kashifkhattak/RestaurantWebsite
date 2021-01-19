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
define( 'DB_NAME', 'web' );

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
define( 'AUTH_KEY',         'C)0p^~o;:)g[&Um1%yD7Ol^IB&2dEo.ll;qbwcCBSW!a]o!E:*LgeQI<:oQ/rgV?' );
define( 'SECURE_AUTH_KEY',  'H|f+-?_%IqiXcvGzk35ndFR(o$,*l6g+b;T[_+!OZ7D]Ki+i/WGpBb@?rXbJo(1~' );
define( 'LOGGED_IN_KEY',    '] o$3E*}=qJEm5Z7I>J&kdmFbaZd]vs;rslwLJos5y2z-gv6WMsWO8NC|XHvzZve' );
define( 'NONCE_KEY',        'Xi14JHR|n&F/*&{<iLLrW}3UJ M<LqE0f|.y/GI$hDkn9>X#BNpc19V1:(4#Y#ng' );
define( 'AUTH_SALT',        ';|B5KX715|)0HW8fG1]* L*k!Mc ]+CF}Woe>drfSv2Sd*7~m0H^{SK[uvi1lZWh' );
define( 'SECURE_AUTH_SALT', '97~V)wyFYyc]v/kg@0ubEI3^JAcs|ColZfz19W.:<7!nxI lVq</4zFV0(tf&(ny' );
define( 'LOGGED_IN_SALT',   'nh)D`a/$]]bE{6uPm@X.:]JfTD$w03w$F&$4)w[jl7pyq#cc!3xO|^;4(yyz/1G6' );
define( 'NONCE_SALT',       '(O3a0<%.gM%Ecn]c1`BZ)!ACN~ vtH3Gb;PUWu4v4tzS2+M?VR<QUhRgyEvP|~Bj' );

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
