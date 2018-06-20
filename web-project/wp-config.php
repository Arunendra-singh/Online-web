<?php

/* Nettl-ised wp-config file ... see also ./nettl-config.php */

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/* Nettl deployment settings. */
require_once(dirname(__FILE__) . '/nettl-config.php');

$table_prefix = 'wp_';

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
 * See: https://core.trac.wordpress.org/browser/tags/4.8/src/wp-includes/revision.php#L484 
 * Maximum number of revisions for each post - change as necessary but doing so may slow your site down
 */
define('WP_POST_REVISIONS', 50);

/* See: https://codex.wordpress.org/WP_DEBUG */
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false); // if true, save to wp-content/debug.log
define('WP_DEBUG_DISPLAY', false); // if true, output errors inside html.

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/**
 * TURN OFF xmlrpc - 
 * see http://www.blogaid.net/disable-xml-rpc-in-wordpress-to-prevent-ddos-attack 
 * This will probably stop people using a remote app to author their site,
 * but it also stops various ping-back attacks.
 */
if (function_exists('add_filter') && !isset($_GET['w3pcloud'])) {
    add_filter('xmlrpc_enabled', '__return_false');
}
