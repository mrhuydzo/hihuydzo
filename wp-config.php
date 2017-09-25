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
define('DB_NAME', 'gohoavnd_wp');

/** MySQL database username */
define('DB_USER', 'gohoavnd_wp');

/** MySQL database password */
define('DB_PASSWORD', '29081988');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Vy amoc~c5:J]a+OeO,5L=y-DvF.BT!~,1u<y4y*Vvlnqw,aQ.}8)* d6d!q<vbj');
define('SECURE_AUTH_KEY',  '*2uf7;n~)=.K&CA@Ey/rj1JSQ$CXvv0Z@nLFNJg6V#6dMQxA$H&{WH/`g0fURE:y');
define('LOGGED_IN_KEY',    'zNxQ;fFIk1{,0L&`#uLr#i$r.%U&YxE(23+#j:4Jm7[k3.E)t~cG/Lq8eJVs(B+e');
define('NONCE_KEY',        'ALlw`mzP /e7B#bmx@3zSSA8q*-j)#tr.7CAzec)44K/nnsBde+J(<!DdTG$`??^');
define('AUTH_SALT',        'J94w<<FyKzf2VOCsTXw5;EdN|o+c.@;DJn_x/f05: 9;@k&Z/v6WjMP41 UI~,[4');
define('SECURE_AUTH_SALT', '|oHXd2W;[7!HMHC]-^16JR<T(2BB*;@Rg:{~Rsd(m-35-ithQRxJvQo`0W^1vlcL');
define('LOGGED_IN_SALT',   'PApvOZ%I?H3ymoKG.{U!+19A+3DfhpH1Y~aP9)3N$a9vmbVZ`DvB7!<sdrQj;2jw');
define('NONCE_SALT',       'c F=#p^1)=Q|tYi?Q,P<`X,f+ta(W:Jfd{D7EcmlYq%)In#YvbQeDSGrVb3*xb{,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpg0h04_';

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
