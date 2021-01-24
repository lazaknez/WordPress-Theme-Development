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
define('AUTH_KEY',         'KmQIEgmRW1DJ2MFXH/yyplV0l0x5HrlQmLyKGDCOR3i97r7vZQzeLQC9dkciT333B3LwMCyoWU4N+5sZhd2Z6w==');
define('SECURE_AUTH_KEY',  'ow8wQabf1KE9YlCwOv/kOcUS96Y8nbWNUO9tVrUpB3JFQ/79BmGonSC+OYt0vpUAqZ4f1j+nCh2ocfd+11xG0w==');
define('LOGGED_IN_KEY',    '8P5KfFrRtoGGkmVgWJN2y//ad1aRV+Fm268pETbLwdCqECwtM35fsgWi9vsqOwsE0m3L2ACQXXURcr0o5WZ/bg==');
define('NONCE_KEY',        'ncNSDhf8mgAcTke7x11UzSAMbJpuBDwd4oKOrRR54w+xwWqt15M8/+tD2dHX+Sb9WIMvC2B6ZaDw/Xa052BBnw==');
define('AUTH_SALT',        'cvJDLKhOi4kiChfpJk/6YstxOa4bSk4APJvHzy94XeJBGFD+ol4sGerX4xwhL7YCcrPzKcbPZsi89ZSDCz/K+g==');
define('SECURE_AUTH_SALT', '+mlkUs6P++SW0M1uSynw/1+ufteLAlv+Nt9Wo+Og44OGHdJYrVBnkIlKEg2NJdTApNzxdyTPgYkZEOecttsdQw==');
define('LOGGED_IN_SALT',   'yy40Oodz/IA/nrFGVZqbccFDmdOi/IZlcqYJFRhfLpgCRoDr29JhC+9IQwxfglCb7Mu4bEBak9JEJeiSfm4IHQ==');
define('NONCE_SALT',       '0yWgXfWL/V+Tbx2xJr+PHxLQjFLTXAlxbHZ4WPOXJqxGsk3JaIqNs/3P6DlgD7TA96CB6Rnyqb/FarHMHnHgRg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
