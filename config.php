<?php
// HTTP
define('HTTP_SERVER', 'http://shopping-store.epizy.com/');
define('HTTP_IMAGE', 'http://shopping-store.epizy.com/image/');
define('HTTP_ADMIN', 'http://shopping-store.epizy.com/admin/');

// HTTPS
define('HTTPS_SERVER', 'https://shopping-store.epizy.com/');
define('HTTPS_CATALOG', 'https://shopping-store.epizy.com/shop/');
define('HTTPS_IMAGE', 'https://shopping-store.epizy.com/image/');

define('DIR_STORAGE', '/home/vol1_1/epizy.com/epiz_25246576/htdocs/system/storage/');
define('DIR_APPLICATION', '/home/vol1_1/epizy.com/epiz_25246576/htdocs/catalog/'); // Full server path to catalog folder ended with front-slash.
define('DIR_SYSTEM', '/home/vol1_1/epizy.com/epiz_25246576/htdocs/system/'); // Full server path to system folder ended with front-slash.
define('DIR_LANGUAGE', '/home/vol1_1/epizy.com/epiz_25246576/htdocs/catalog/language/'); // Full server path to language folder ended with front-slash.
define('DIR_TEMPLATE', '/home/vol1_1/epizy.com/epiz_25246576/htdocs/catalog/view/theme/default/template/'); // Full server path to theme folder ended with front-slash
define('DIR_CONFIG', '/home/vol1_1/epizy.com/epiz_25246576/htdocs/system/config/'); // Full server path to system/config path with ended front-slash.
define('DIR_IMAGE', '/home/vol1_1/epizy.com/epiz_25246576/htdocs/image/'); // Full server path to root image path with ended front-slash.
define('DIR_CACHE', DIR_STORAGE . 'library/cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'sql312.epizy.com'); // e.g: localhost
define('DB_USERNAME', 'epiz_25246576'); // Database user name
define('DB_PASSWORD', 'PykBbALMNwRClP'); // Database password
define('DB_DATABASE', 'epiz_25246576_patrisor'); // Opencart database name
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_'); // Opencart database tables prefix name
?>