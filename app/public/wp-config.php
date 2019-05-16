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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Aeu+3tl8ROUJlnRzqDgT/uAJ0utFr17cAMSxG7d9hE1KEmW851/C57yJwigdlxQ55nk+5YaSvvWLttBTXte4BA==');
define('SECURE_AUTH_KEY',  'Hq6yAB6xd2s1loKXI+Unc2nP0dRi96aiyJ+BMzKN6ith28LUjSJg+szfydYBS8lqYkBKTW0KPiTGMnuSy/nwmQ==');
define('LOGGED_IN_KEY',    'MJe/b1qnb1h6Cqi0CnxXNZDRLMoOTmZSwXyzUmhrVs1qRl5/UjyRTyhuAJu881jgeiAqQxKJjnS5F3eqX8+Idw==');
define('NONCE_KEY',        'fZo8rMdImsGDUsAy13+B/hY2WcyARR/VNqg3oe1BrcKJVL6xP9DMq6ry/5HBHqptyLtnycsr9CfGDoDO+jz6vQ==');
define('AUTH_SALT',        'cy7EId9EZu13cfGMtRTFSMGLyAhHXEevifV771064/to8YPYqeJHK96qRJLiNPsb1RfHjUOsNlinVX0nVobCHw==');
define('SECURE_AUTH_SALT', 'PwOZhPT5OTz/LfTdZx5Yl9aX0tvHhX7JzhGKVfd2By3M0pFkFnwPTKuvpKRTmLMq2LhDkXudeVHIK45r6JjPxQ==');
define('LOGGED_IN_SALT',   'f0B93SCKMlbVUNiejFFzg3OxbTKOoMo9HdLReCgJQ344Dk6UQXu8s9BwWXkB/wXDlyc4FRsO0hXMvHuJka06FQ==');
define('NONCE_SALT',       'KvZHIcNY4AJQD3gEVnCpAOaBxwnuHskRlqxFUA9Ec+3V3EFKe48l8ehpfTUcBG8k27j8l93HSLgzPzdP/GywAA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
