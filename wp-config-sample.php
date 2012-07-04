<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH.
 *
 * It has also been modified for use with the CWLA site to include directory-specific configurations.
 * These give the ability to store the core WordPress files in a separate directory that isn't touched
 * by the development team.
 *
 * You can find more information
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
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


// ** Directory Settings ** //
// ** These settings should work on CWLA servers, but you may need to change them to run the site locally. ** //
/** URL of Homepage on your server (usually just '/') - overrides admin dashboard settings */
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/');

/** Location of Wordpress core files - overrides admin dashboard settings */
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/core');

/** Location of wp-content directory */
define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content' );
define('WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content');

/** Location of plugins directory */
define('WP_PLUGIN_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins' );
define('WP_PLUGIN_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content/plugins');


/**#@+
 * Authentication Unique Keys and Salts
 *
 * REMINDER: If you change these, be sure they are also changed on dev, staging, and production servers.
 * Keys and salts should always match across development environments.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-9|Rv|pwr9&3^cm|*e I,%i3[hAgC|#f&OZAOhuQb}:Za_ZAC0uzA3z4HCCv|ciy');
define('SECURE_AUTH_KEY',  '+ 6)OuTOE}hkz9t%RLT`^+XT4ji-mj#+udeZX0A E:TQI{(v<bhO0:+83l9w@fC}');
define('LOGGED_IN_KEY',    ';nE{2F3e0<>lUzN@/PW+>,hh:H|`LKAJ+-r;Nq-:.B[*86-g^yIkDr@s|vA+%wy|');
define('NONCE_KEY',        'zC3w$j}zO-vpknn@+i(}d_PL`L.BtNu^_J)<e+{|$:M_qfTFcmmlq?O]}`WrP@=|');
define('AUTH_SALT',        'I5CS(?,iv,]>#kd0)57.H@P3*DI-Ft_8MSX|,8=i,~F_pd_`XV|} 2HaV[C xB<A');
define('SECURE_AUTH_SALT', '2Rho}5> +]+&&{yN=UDRp|/7E3T<dk.A;YDQ{X#o=88&!y(R=U+I1tN1,AM;7|~}');
define('LOGGED_IN_SALT',   'z&6Mrey[0dz3%?7%9Z4XjoKn|R*TAcot<F&@ng1nm_d8|?R?6PqqcIy^ph(mX(2.');
define('NONCE_SALT',       't<Tv@6N:,2+`S[!T08wwI$(k)&5&-f*|0j^aDsjL|Z%@n,mC|3Txd~9#{Y4&*=+;');

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
define('WP_DEBUG', true);


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/core/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* That's all, stop editing! Happy blogging. */

?>