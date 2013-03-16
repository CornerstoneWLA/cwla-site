<?php

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'YOUR_DATABASE_NAME');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

// ** Directory Settings ** //
/** URL of Homepage on your server (usually just '/') - overrides admin dashboard settings */
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/');

/** Location of Wordpress core files - overrides admin dashboard settings */
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');

/** Location of wp-content directory */
define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content' );
define('WP_CONTENT_URL', '/wp-content');

/** Location of plugins directory */
define('WP_PLUGIN_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins' );
define('WP_PLUGIN_URL', '/wp-content/plugins');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

?>