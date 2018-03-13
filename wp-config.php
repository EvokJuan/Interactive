<?php
define('DB_NAME', 'interactive-wp-T3cDnzDS');
define('DB_USER', '3E0gHaVe7s5b');
define('DB_PASSWORD', 'SdP4HeQhT2W0BJ5l');

define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         'JMbD6bXrPTR4lWwb098rjxx8GwM742tvCj9Z5xck');
define('SECURE_AUTH_KEY',  'c50q2leh25i5NnkOjVM5KQsnKYypDSqWzPeO70WJ');
define('LOGGED_IN_KEY',    '4wLzo8m7aHklXJftEU0ZtrLrG22vktDHVndEuLdJ');
define('NONCE_KEY',        'Ne5o1BBo3gX1vvPgfUHsPETDaFhwujeX4ynWxUij');
define('AUTH_SALT',        'TGNHNLuLpqHsK9PZXVd7wZ0pdtlxPHR6Nx0nmSvh');
define('SECURE_AUTH_SALT', 'rzlJnBzEPXz9wYXFQI73gsFrV92B3vMj0CS6sltS');
define('LOGGED_IN_SALT',   'DGELcS7xDxEyQU5nWj87UL2XoBiNLtMgXlklI9US');
define('NONCE_SALT',       'TZBavtPYLGlEh2P2fjldE5cdIFXVD088AwFDqD9N');

$table_prefix  = 'wp_61a4bd2f3d_';

define('SP_REQUEST_URL', ($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['HTTP_HOST']);

define('WP_SITEURL', SP_REQUEST_URL);
define('WP_HOME', SP_REQUEST_URL);

/* Change WP_MEMORY_LIMIT to increase the memory limit for public pages. */
define('WP_MEMORY_LIMIT', '256M');

/* Uncomment and change WP_MAX_MEMORY_LIMIT to increase the memory limit for admin pages. */
//define('WP_MAX_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy blogging. */

if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
