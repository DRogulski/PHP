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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'tE*i/UKONSH0_],B>6V;pIu<So06!C*)8sN9!Rq{%0O2MCQ=4Ls5-UWYvm%OSf:&');
define('SECURE_AUTH_KEY',  'P`86EY9dp7*vFh$w*mQ26MUJ<fJXg/DmT+*<y#}nS|53fkaQmy!svNM:C<M?L[`m');
define('LOGGED_IN_KEY',    '?@0Tbtx10G?jiM8Feh6Dg47i#0zbmXj|DsD[R+#jGj095k0]d7y3>[r,|;mi@oDk');
define('NONCE_KEY',        'Cb3NE.xX7-{Q#,f]{SqFN4Gd}0x|UeM(i@Z8#3kceWn_m2.4;t`j?fHhD&??lM-I');
define('AUTH_SALT',        '!1ch.xCnC]tA(/X,ug${5nS;e5Z1]W]6N|Vbxm^f=tc*YglCfAy|(V%[E%bJz*:g');
define('SECURE_AUTH_SALT', 't Vlqv9wE}{+>B|<7<3m~HLknsCCIwnd!o<<-5@wg*/0X=[hIuHHN}jOkFE!&^_C');
define('LOGGED_IN_SALT',   'c4/E{cS1I)AuruHn;@5efs^G3/oN_v2?Dr)R>^k`U2n)lRB4`bkia}v)r9N_iPU$');
define('NONCE_SALT',       'uSDhhBr :S.i  q[7CqpO. :7WOfx;@Frpi4jdQ(#JiGz|I}2N?:c8XQ^:OU [Zl');

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
