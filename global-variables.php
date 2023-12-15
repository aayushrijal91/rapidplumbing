<?php
define('V_SITE_URL', config::site_url());
define('V_THEME_URL', config::theme_url());
define('V_THEME_DIR', config::theme_dir());
define('V_CDN_URL', config::site_url());
define('V_RECAPTCHA_CLIENT_SECRET', '');
define('V_RECAPTCHA_SERVER_SECRET', '6LceIBwkAAAAAOqRS49ww9XRHV3FR8wCssejhbbc');
define('TABLE_PREFIX', 'vital_');
/*define('V_CDN_URL', 'https://ik.imagekit.io/qjttjqku09a/sydneyreliningcompany');*/

/* define('V_CDN_URL', 'https://ik.imagekit.io/qjttjqku09a/sydneyreliningcompany/'); */

$isLocalhost = ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == '127.0.0.1');

$root_theme = $isLocalhost ? $_SERVER['DOCUMENT_ROOT'] . '/rapid/themes/' : $_SERVER['DOCUMENT_ROOT'] . '/themes/';

define('V_ROOT_THEME', $root_theme);

?>