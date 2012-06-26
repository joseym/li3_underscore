<?php

use lithium\core\Libraries;
use lithium\core\ConfigException;

// Define path to plugin and other constants
defined('__PATH') OR define('__PATH', dirname(__DIR__));

// Submodule Repos
if($options['source'] !== 'composer'){
	$_underscore_path = UNDERSCORE_LIBS . "/Underscore.php";
// Composer vendor/package repos
} else {
	$_underscore_path = LITHIUM_APP_PATH . "/libraries/_source/underscore/Underscore.php";
}

defined('__LIB') OR define('__LIB', $_underscore_path);

Libraries::add('Underscore', array(
    "path" => __LIB,
    "bootstrap" => "underscore.php",
));
