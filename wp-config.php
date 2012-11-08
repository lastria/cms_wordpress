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
define('DB_NAME', 'cms_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'xfnVSrVch75REJKs');

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
define('AUTH_KEY',         'W!r8}:z`4lhWG7N6:|p}83eZF?r<#g4I]nxtRQNYx~(a[p]N1>@[[|1%_hfb~7]K');
define('SECURE_AUTH_KEY',  '::|mZX6G:_}5ku,9V9{)2Si7b ypDf@-/twYC9~R3yeqyp$7wQ]cLc;LN`f`FI&a');
define('LOGGED_IN_KEY',    ' mS_sx^=f-2is[}V@~#1C5e:0rZFm9=?(x:xcrz/DYx.e$rR-fVQ%:JEiI[wR;7V');
define('NONCE_KEY',        'c`bIbR*R4EMMxb* ~mt|)Uc:).-U^Mh!dNiwH)lrD8:jM@&EejB||9s=:n1d%Qo:');
define('AUTH_SALT',        '7nWhk]]&K~.[1?+9)oF~i]fnW/uc{nPp3C>)+uW:O}Xe{V29SjS.=eP$ST=/.MQD');
define('SECURE_AUTH_SALT', '?_#1k!0.!23p%FJ^5cJg]i7:D?5Pq7:%!`K|B9m)pE{d]V4(fXMKYG7iSDxg`NdG');
define('LOGGED_IN_SALT',   'RXf@s/ave F&2kSM#<Kehtu=V!qh@hW(/`rNzrh(1IMJp>6oz%2Ue<1iqE0&X8e]');
define('NONCE_SALT',       ' 3JT><}P5}46H1;&r8}D(ReD+7F+~K2!8Jor n;CRKEuZ*xA:xMX^_@?QgxBfbuK');

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
define('WPLANG', 'de_DE');

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
