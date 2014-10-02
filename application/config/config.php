<?php
/**
 * Configuration for: Base URL
 * This is the base url of the app.
 */
define('URL', 'http://genesis-rebirth');

/**
 * Configuration for: Folders
 */
define('LIBS_PATH', 'application/libs/');
define('CONTROLLER_PATH', 'application/controllers/');
define('MODELS_PATH', 'application/models/');
define('VIEWS_PATH', 'application/views/');
define('IMG_PATH', 'public/img');
// Make this folder writable ( chmod 777)
define('AVATAR_PATH', 'public/avatars/');


/**
 * Configuration for: Database Connection
 */
define('DB_TYPE', 'mysql');
define("DB_HOST", "localhost");
define("DB_NAME", "genesis-rebirth");
define("DB_USER", "root");
define("DB_PASS", "");

/**
 * Configuration for: Cookies
 * The COOKIE_DOMAIN needs the domain where the app is,
 * in a format like this: .mydomain.com
 * @see http://stackoverflow.com/q/9618217/1114320
 * @see php.net/manual/en/function.setcookie.php
 */
// 1209600 seconds = 2 weeks
define('COOKIE_RUNTIME', 1209600);
// the domain where the cookie is valid for, for local development ".127.0.0.1" and ".localhost" will work
define('COOKIE_DOMAIN', '.localhost');

