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
define('AUTH_KEY',         'nwKD4AZrAiQJBv93fZ8qySka2ZNrVUEGYiRn+0aqbNNQ08FUvqmeusFaZ54ODcWp8SS7QNRXk5AvniDhfoEy1A==');
define('SECURE_AUTH_KEY',  '6IXI3fIr3Se7Cq7BBF7DajBbhOBSUSCKDi5CmP2IaCRy1JT32PUzkaNV/u/varKLWSPAY03MJj75/HRK6g12QA==');
define('LOGGED_IN_KEY',    'M7PlNVjnZ9NL3sHVqq46MhhRet3E1lHPQS0KaOiC202NbnAy3++xUSsOqBbxq/qVOo7xFlIsaRJheo6esjPFTw==');
define('NONCE_KEY',        'syFKY10yWzZlhsSNzT4uEicSY7QJMu6Quxu4CUoib/+YTthMR/5F1DqUCHJt6T408zYuuSlE2/MDcmP1BCIe3A==');
define('AUTH_SALT',        '+7IG3S80I2JvuX4u9j3fAcXTncFfS7YsAxj9yjQGIuHhcmTTzkNcZTcoJvb9pdDjoDpK1ialjzAUwRpx2DZUCQ==');
define('SECURE_AUTH_SALT', 'GrelzhkUnIXNkzkyh0+yJj/juYKfL5pUIyWCiZOr8fe8cWsG5JuHthZspfzvYftkPDH4qFiPNzFjiWPHN6PoLA==');
define('LOGGED_IN_SALT',   'ZqlswMZuvHldTLi+fuzLdNmJk5Lf9GHu0A4HpZ+onQAiVa5WhQrmaQKNRKQHmrpAzwqNM3bNMo1o6fsLWs7fTQ==');
define('NONCE_SALT',       'iTgZhgxAycB4LTdRNEHd1JciAAk2HTMKWR7JYVSheh8HTM9qkymOluB2ZiAs3CRJkF2SmIvE6yYTB06IEomcjQ==');

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
