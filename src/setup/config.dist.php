<?php

/**
 * This needs to be a long, secure, secret key.
 *
 * Use a number of different symbols, and hundreds of characters.
 */

$cookie_seed = '';

/**
 * Database name.
 */

$db_name = '';

/**
 * Database username.
 */

$db_username = '';

/**
 * Database password.
 */

$db_password = '';

/**
 * Database host.
 */

$db_host = 'localhost';

/**
 * A URL where spam-trap triggering users are redirected to.
 */

define('TEXTPATTERN_TRAP_URL', 'http://forum.textpattern.test/');

/**
 * A key needed to run tasks.
 *
 * Tasks can be run by access URL:
 * http://forum.textpattern.test/?textpattern_fluxbb_tasks={KEY}
 */

define('TEXTPATTERN_TASKS_KEY', '');

/**
 * Do not change anything after this line.
 *
 * These setting must not be altered.
 */

$db_type = 'mysqli';
$db_prefix = '';
$p_connect = false;
$cookie_name = 'textpattern-forum';
$cookie_domain = '';
$cookie_path = '/';
$cookie_secure = 0;

define('PUN', 1);
define('PUN_NEW_MEMBER', 5);

include dirname(dirname(__FILE__)) . '/src/lib/Textpattern/Bootstrap.php';
