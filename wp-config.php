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
define('DB_NAME', 'lavishlawn');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'VlOaB#ouURQ_S5mR<,5f.Ax:]%q,>oFJsV<Ec,?iMw:=TjK]h~@o@}70]LC@yr^d');
define('SECURE_AUTH_KEY',  '.- bJ8|WDj>Y38@QnRX%-~SUyc1dp_kRTJL |A9IP*Uu1i&tnq)LE4%kZs0o!t%N');
define('LOGGED_IN_KEY',    'f]f;UN;-_rGYSP7#FnFIwLo+4Xc|@4t8S{2&|grbFof>YjvC.A+|3#i>]?z-lyI(');
define('NONCE_KEY',        'OERKIsGdKV|fCd4<E,Ndc -#-+|T#2p=et6q|?zz|4]i-CBB?+`v|QZAGh7F}mKI');
define('AUTH_SALT',        'Ly+w;rGlJaipRqhw|7|~`Eo(687|c%7Qq%R)_|Sa?[LMyXAKcIVj=hH]jYEg[>[:');
define('SECURE_AUTH_SALT', 'ukpq@&z,gI<n!>goDh-{GfE3Vu[j/o|A~rA]K=87WUK<V#4?6)?[N12&!bx#-diW');
define('LOGGED_IN_SALT',   'w,vB{E(Hu9-~6BjGHs1TvHPD9~t5m`1IGf:O+PIME{S}tpvZ-B~z|! +#MinGViB');
define('NONCE_SALT',       'ZHlBFzsy+>au)HnQb<n HJFFAa-k:[z)&{&pV+ug4|0Euk4.,I1n2HEsfc+w(G~J');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

