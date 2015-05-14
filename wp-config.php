<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'woo');

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
define('AUTH_KEY',         '@i{*ximoU/tinE+-M<vE-5`g7D@||HWK|#H4@c:!7-y#Qc&+IzhSys-Y2c%_/&;+');
define('SECURE_AUTH_KEY',  'mN5?xuj8_et0fi;@O;9~-UEN;S9jLiujf|DSh/lHo=&ws< A WU?r9d-NKA$PV04');
define('LOGGED_IN_KEY',    'SoLe u.n_u]s~F8({wy4i[h}=eRCGVn:V#-MvwP0K/T{3M}/[%je;m7CLy3c{NIk');
define('NONCE_KEY',        'x2:?|6f[X:l]j}$?U *%Wp+wdHT)Rqg=/|b:&_H&1$Q7O(ZU/rR7jqTOvf-=x0Q_');
define('AUTH_SALT',        'Qfo8Y)Dm#8Z:1+K|b,{PlH1m6|PLjb+T|; )}>incf4WBQ/YBqpg@7R-uQ(oE+Lv');
define('SECURE_AUTH_SALT', 'io*wF+`a]N%`=_o9fxvD(_P4lT1pr- 7K7kl+0LmC.r S3@ae5*kqV;AZ9yu!6Q.');
define('LOGGED_IN_SALT',   '2K9U4>w)46+G[?|180R2gNLW8RA]p/dIMOll`3>;_2-g;(us>s;^fN{f|]$C8v`J');
define('NONCE_SALT',       'V%?!pD%_l.oSjiHTtY$Jo-%GVoyV4pf#J$/eH]~&@{|gjT~Dnht)L:N8!+;)8|=-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

define('FS_METHOD', 'direct');
