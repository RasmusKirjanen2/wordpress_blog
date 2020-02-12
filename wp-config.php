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
define('DB_NAME', 'wordpress3');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '91_!Dc@&OV;sMhYwc>N+pr<XJoL%Pv%8=1A0,[C<au/Y:M%J=Bc?k,cNa qTDk},');
define('SECURE_AUTH_KEY',  '=(B+wH%Tpt**=%L0mSr<cd?b}y^#5 9Vz`uRUNu(O/^}eHTMA-%,<@QolnUT3vM.');
define('LOGGED_IN_KEY',    '#%xdm8]`YoPER+9;>TdfKju` sSLU]aLxU!)/fo?0w|oHN0cb92&sd9p1 q7f24;');
define('NONCE_KEY',        'f;%JdZ,jEw?<|)ZGP]qn0i&;v6h;u!U8R7Kt;,3*$%M;Uy{1iE).tkUzR`2#HO>A');
define('AUTH_SALT',        '3qMr`9i]a+tJOK}Svq~`T1)@@4V0`/UpI2fX%i6Ao4;/&e}0<#%-qn4+a&#ELdCH');
define('SECURE_AUTH_SALT', 'w1I+|*Ot.9bfi`9j#5&eZ3{(kDYn9JNg@[1^7f?1dYlV1x|0ow&SSGswI0B:RA8u');
define('LOGGED_IN_SALT',   'geW&];;BY*&b?e!y2y]{c|Y_l([,g>Ot847`fW{{fH_N[1Ugm)mkTv$bZwT(girL');
define('NONCE_SALT',       '3iA^{7bXf.bkw>](#uJ7%j&s7sZA2{&mgOU+KPUrKEZ,:o`x3HmiQACqxT{HYi_#');

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
