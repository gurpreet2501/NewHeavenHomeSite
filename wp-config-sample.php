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
 * s
 * @link https://codex.wordpres.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */ 

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'theHH');
 
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

define('BULB_SHOP_MENU_URL', 'http://theheavenhomes.com');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')%O^()nj[Md!j<s{ihQLx)`.V;O=oImf7Fj/K,Ek#]P[%@/*D@{M#LLjjx[U40<s');
define('SECURE_AUTH_KEY',  'vROz3*`&r1J*oGE|hDX4p&6]JALl[6e4C{$`CKS-&%9In%sG}k9/c]e8O7{Pg<h2');
define('LOGGED_IN_KEY',    'vL^5uFw|z+7]?3{Zf^wSgx?|K?`@g`x__^b3Eq6EgJApN}ljys1@M`imRjCmhlL#');
define('NONCE_KEY',        '|J$HU-]TZ`PhIYS&TL?[# x&K*`a~z[kN}|r!Br.M-i#w-LYteynAur&#pE| M!E');
define('AUTH_SALT',        '#~IrC(FX^00Y0`[YBgr:z&TzE},X=t|Xu2X}L @d]<_ELz+K>D@83mSQDs:7pMhx');
define('SECURE_AUTH_SALT', '?^rK{S)#[LM=4@DiCXN[Em5jgN+T,M;9|eqa[?hWRM0kg_lekHf/m~61BoJ**,i1');
define('LOGGED_IN_SALT',   '=*1f?^Cg+I<g)dPC:jk9b|c%n.XyLn=DQ/{Xt+RYx8aE,pLK g2puu$o|wLX&qHb');
define('NONCE_SALT',       '.(7]g:gJ3R>wC>9oSf8d0^rVfc04NNt/-R2M`,)2?iJ*obA(+4N8H@[_ICn_@i4e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wdf4wp_';

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
