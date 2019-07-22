<?
define("BX_USE_MYSQLI", true);
define("DBPersistent", false);
$DBType = "mysql";
$DBHost = "db";
$DBLogin = "absolut_dev_user";
$DBPassword = "7HzMHb4mnrvnp6Ws";
$DBName = "absolut_dev_db";
$DBDebug = true;
$DBDebugToFile = false;

define('BX_SECURITY_SESSION_MEMCACHE_HOST', 'localhost');
define('BX_SECURITY_SESSION_MEMCACHE_PORT', 11211);
define('BX_SECURITY_SESSION_READONLY', true);
define('BX_SECURITY_SESSION_VIRTUAL', true);

define("DELAY_DB_CONNECT", true);
define("CACHED_b_file", 3600);
define("CACHED_b_file_bucket_size", 10);
define("CACHED_b_lang", 3600);
define("CACHED_b_option", 3600);
define("CACHED_b_lang_domain", 3600);
define("CACHED_b_site_template", 3600);
define("CACHED_b_event", 3600);
define("CACHED_b_agent", 3660);
define("CACHED_menu", 3600);
define('BX_CRONTAB_SUPPORT', true);
define("BX_CRONTAB", true);

define("BX_UTF", true);
define("BX_FILE_PERMISSIONS", 0664);
define("BX_DIR_PERMISSIONS", 0775);
//@umask(~BX_DIR_PERMISSIONS);
define("BX_DISABLE_INDEX_PAGE", true);
define("LOG_FILENAME", $_SERVER["DOCUMENT_ROOT"]."/tmp/log.txt");
