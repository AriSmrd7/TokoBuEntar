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
define( 'DB_NAME', 'tokobuentar_db' );
/** MySQL database username */
define( 'DB_USER', 'root' );
/** MySQL database password */
define( 'DB_PASSWORD', '' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
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
define( 'AUTH_KEY',         'nqbmbbmub1rencdy4ol48vnmvyrr340exrpe10k9sdspguxuvxlum5qi2dvqm9ao' );
define( 'SECURE_AUTH_KEY',  'pfj6sormv4m7idbkbum9fowulsmeugogzwav5owat8xvm6gt2s4ttgqzhkfxpkp4' );
define( 'LOGGED_IN_KEY',    'kmg9l3htrizq6z5n5bsgfl4iueq7lkj7dunqqjcl6z6jpdertied1kmeoepzushb' );
define( 'NONCE_KEY',        'gs7f3poa1tbnxwixwoet5ep3ytvamr3o44zo4fexlcgeynssxrobmnkpmkii198y' );
define( 'AUTH_SALT',        'ukhwda7pcpz79r7s7owjljt6ju5oexbsn5yx434t7spunia9fess2fiur2rbnj9n' );
define( 'SECURE_AUTH_SALT', 'fgxej98jgynddntykguistliqtefcsuhrlhllhla9ibjbxek3ibburon94v8f2hv' );
define( 'LOGGED_IN_SALT',   'tngn1er4ygtvv1fbp3em1ksp1lj7zqbiebms44q1ycqdrpocepug8nxt6ysocetu' );
define( 'NONCE_SALT',       'lozojgn13ovofu3ncrorxb4aaijsewvsvboxqvnyj22bk1txgiin0uspzzywhxxj' );
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wppt_';
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
define( 'WP_DEBUG', true );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
