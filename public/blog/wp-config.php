<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'startups_WP');

/** MySQL database username */
define('DB_USER', 'startups_admin');

/** MySQL database password */
define('DB_PASSWORD', 'startupadmin');

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
define('AUTH_KEY',         'VFe2/XPU0LDA4_+7y:juzb/Ngmde-u}&|B6-/@cJ`>hF2O322j$mXUu-K[l*!(G$');
define('SECURE_AUTH_KEY',  '%FsmF&Spf8F5+,Zs7=Tb0bKewl~JU(bd{GU/}j-jm9&q2_--M&0^jF<q`kLY/4n@');
define('LOGGED_IN_KEY',    'Vq0t*]m@ 9PS:D):A[VIbhi}!Sv8K%l-f350}%m-Vu-{88dJ*da9_W7q>yU-a0ZK');
define('NONCE_KEY',        'r@~>D`t?X/e*xpC$tg1(oK32-qJ]qg.M1&y$lzU@Ds5^OQAlA#3K8?F`1qj>T[YL');
define('AUTH_SALT',        '0eXtCpCF#b~+u#Ucd}Xpb$@ CTv_+Mb[:<JK+Ce%Z&!o PRHZ8_{3d_$W;_ns{AG');
define('SECURE_AUTH_SALT', 'Z:M?{7rNKYM&5yY[%-x_4f7WL$ <+@gykD+y&fo+S[oij7p6s-dSowVENB.i|ns@');
define('LOGGED_IN_SALT',   'K9)~v|0%p]^~dYl~7K>$rEjlsQE*^`1Ji^6d1pm%a{JxwXPVO3dt3+[n`+Y_e:-V');
define('NONCE_SALT',       'Hb-eUppuWv|j7rLQ(61&a^-E=2N4?HkvhDE_X}m3 )H}Vc/@Or2Ks7B#q_Ks@Jm6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
