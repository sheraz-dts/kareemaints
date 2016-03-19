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
define('DB_NAME', 'kareemaints');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '@Mu1M_tR,N;gA8,<Ofwk+>P&($k/X4TU}$dwNU=tu27Ye{IHpn>}EE_H[u50Nx m');
define('SECURE_AUTH_KEY',  'U#Xp5=D2 fO{Ypi|t$rXEu`lrIGGj#*(&FYr=Xyta#puiw^zO%m?0>P+=yQIio8p');
define('LOGGED_IN_KEY',    ')?5h1_Ua#mSXW])7`vC~R0aDOZJG6qs-luG5@6QT6 H]FNYrl#,[|.`sEdtII:?A');
define('NONCE_KEY',        'SU33+2s9upfsgeHu2<frOG{9Kn{P2b1%kYF:VWb&C2/>v!kOG*Al$7.4wC_f)Qnw');
define('AUTH_SALT',        '4xxFI<iS`.X;[ !X[ $kGnlkaI# S!ir2sU$IH3v_#af3ZyDsEtQ!y89A`uw(Ruu');
define('SECURE_AUTH_SALT', ';<nMzjhk=0a%zxes]C!{k$gl[uHrL8dGN$h8VBlvs3p`Ku4(!A7ctC?x@em)zj}?');
define('LOGGED_IN_SALT',   'zj3/Rm1xuq%8YyzCzwMN918Umg4.BdtOe1(elkbS|Fkv^B9%lXv1|KpE!^jx,5:B');
define('NONCE_SALT',       ']5=o(I?H>CCm|5lYDyCq{L{R`x5 5gQo;fW9?-FT8v^phG!7yD|~:l>g*qlwQ|{b');

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
