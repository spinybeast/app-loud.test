<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------
define('CACHING', false);
define('PROFILING', true);
define('PATH_TO_REVIEW_IMAGES', DOCROOT . 'reviews' . DIRECTORY_SEPARATOR);


// Load the core Kohana class
require SYSPATH . 'classes/Kohana/Core' . EXT;

if (is_file(APPPATH . 'classes/Kohana' . EXT)) {
    // Application extends the core
    require APPPATH . 'classes/Kohana' . EXT;
} else {
    // Load empty core extension
    require SYSPATH . 'classes/Kohana' . EXT;
}

/**
 * Set the default time zone.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/timezones
 */
date_default_timezone_set('America/Chicago');

/**
 * Set the default locale.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/function.setlocale
 */
setlocale(LC_ALL, 'en_US.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @link http://kohanaframework.org/guide/using.autoloading
 * @link http://www.php.net/manual/function.spl-autoload-register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Optionally, you can enable a compatibility auto-loader for use with
 * older modules that have not been updated for PSR-0.
 *
 * It is recommended to not enable this unless absolutely necessary.
 */
spl_autoload_register(array('Kohana', 'auto_load_lowercase'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @link http://www.php.net/manual/function.spl-autoload-call
 * @link http://www.php.net/manual/var.configuration#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('en-us');

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
if (isset($_SERVER['KOHANA_ENV'])) {
    Kohana::$environment = constant('Kohana::' . strtoupper($_SERVER['KOHANA_ENV']));
}

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - integer  cache_life  lifetime, in seconds, of items cached              60
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 * - boolean  expose      set the X-Powered-By header                        FALSE
 */
Kohana::init(array(
    'base_url' => '/',
    'index_file' => '',
    'charset' => 'utf-8',
    'profile' => PROFILING,
    'caching' => CACHING,
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH . 'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

/**
 * A valid cookie salt is required. For session.
 */
Cookie::$salt = '123456654123...';

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
    // 'auth'       => MODPATH.'auth',       // Basic authentication
    // 'cache'      => MODPATH.'cache',      // Caching with multiple backends
    // 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
    'database' => MODPATH . 'database', // Database access
    // 'image'      => MODPATH.'image',      // Image manipulation
    // 'minion'     => MODPATH.'minion',     // CLI Tasks
    'orm' => MODPATH . 'orm', // Object Relationship Mapping
    // 'unittest'   => MODPATH.'unittest',   // Unit testing
    // 'userguide'  => MODPATH.'userguide',  // User guide and API documentation
    'pagination' => MODPATH . 'pagination', // pagination
    'captcha' => MODPATH . 'captcha', //Captcha
    // 'asset'        => MODPATH.'asset',        // asset
    // 'email' => MODPATH . 'email', // email
));

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
Route::set('ajax', 'ajax/<action>')
    ->defaults(array(
        'controller' => 'ajax',
        'action' => 'contact'
    ));

Route::set('images', 'images/icon/icon-<id>.<format>')
    ->defaults(array(
        'controller' => 'images',
        'action' => 'icon',
        'format' => '\w+',
    ));

Route::set('images-new', 'images/<action>')
    ->defaults(array(
        'controller' => 'images',
    ));

Route::set('images-list', 'images/list/<id>/<file>.<format>')
    ->defaults(array(
        'controller' => 'images',
        'action' => 'list',
        'file' => '\w+',
        'format' => '\w+',
    ));

Route::set('user_add_review', 'review/add/<hash>')
    ->defaults(array(
        'controller' => 'review',
        'action' => 'add',
        'hash' => '\w+'
    ));

Route::set('admin_auth', 'admin/auth(/<action>)')
    ->defaults(array(
        'directory' => 'admin',
        'controller' => 'auth',
        'action' => 'auth',
    ));

Route::set('admin', 'admin(/<controller>(/<action>(/<id>)))')
    ->defaults(array(
        'directory' => 'admin',
        'controller' => 'common',
        'action' => 'index',
    ));

Route::set('static', '<action>', array('action' => 'about|contact|browsers'))
    ->defaults(array(
        'controller' => 'static',
    ));

Route::set('rss', 'rss')
    ->defaults(array(
        'controller' => 'rss',
        'action' => 'index'
    ));

Route::set('add_review', 'review/add/<hash>')
    ->defaults((array(
        'directory' => 'admin',
        'controller' => 'review',
        'action' => 'add',
        'hash' => '\w+'
    )));

Route::set('review', 'review/<id>/<name>')
    ->defaults(array(
        'controller' => 'review',
        'action' => 'read',
        'id' => '\d+',
    ));

Route::set('review_preview', 'review/preview')
    ->defaults(array(
        'controller' => 'review',
        'action' => 'preview'
    ));

Route::set('reviews', '<platform>(/<filter>)(/<category>)', array('filter' => implode('|', Model_Review::getFilters())))
    ->defaults(array(
        'controller' => 'review',
        'action' => 'index',
        'platform' => false,
        'category' => Filter_Category::ALL,
        'filter' => false
    ));

Route::set('default', '')
    ->defaults(array(
        'controller' => 'static',
        'action' => 'platforms'
    ));

