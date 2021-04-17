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
define('AUTH_KEY',         'b1YUr1QWXTZm+LAD3e9Q6ibsXGdDLVfUbp4yep5ViOGCC6XH1voL/9kc1uaVstubEAmntACDZe1OHWpcoXnhrQ==');
define('SECURE_AUTH_KEY',  'NVAuKxWtPz6lzRtYVONXF9iOsbzxrRrtZLDQpDYxa+l51HKICJu0mI8OGExKNQkzNb26l5aPYOkQ5yfzLU49Mg==');
define('LOGGED_IN_KEY',    'CxRIaomUQwsNRrdD357y6ps4XVcqkX1j64Rc1n/0hYNtcztvAjvJ5KG/YXKMwVLNkISCwxU7hiYvpPYQnFrLSw==');
define('NONCE_KEY',        'XmqZ7f9kfh9kjWCH+XzYFoJc2V7WKSzLan1iJI0+/dwbKmFUZCpkmzg9Wp0RhUmgg2XuKaSEFGN+N4MQ0xvndg==');
define('AUTH_SALT',        '1NKNnsDNTq9Dv4+Twa3tqXKjPjVcpJmoifpQHkSGmjjrlpQqvrdybVnn1iR4B27Esl53+AMvQJlRAKdsicWcIg==');
define('SECURE_AUTH_SALT', 'afgTQozX/DJQsJ6YqhsTWwqRADMXSUh98ENRrDcU7BvkjAQXbXkrX9Qva5+EtIkIM6WsSXvOU0Ap9Bd0k33kUw==');
define('LOGGED_IN_SALT',   '3rXA+iFA3+52qreeyuB5+N+gJvmDoS/D0vHcMgnTOaOGo8iVS94ugNp6vShONjG6uj1WTnYCiTBSGgRSxVIHtg==');
define('NONCE_SALT',       '7DCZEeP3JNpNE5U94RxrwNZyXYJSXCNXnAik50ptQloN9wpmCjfFroDX1fgh8CdAUiE0Wbnc+hilssDLhr9ysQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define('JWT_AUTH_SECRET_KEY', 'A$={da>FY:SOO[UwZ=VvREzkK]Ey{fWf>9~5vZ+Pg^+zB35PM=%(I139(%2IySpK');
define('JWT_AUTH_CORS_ENABLE', true);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
