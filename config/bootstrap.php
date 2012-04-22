<?php

use lithium\core\Libraries;
use lithium\core\ConfigException;

// Define path to plugin and other constants
defined('__PATH') OR define('__PATH', dirname(__DIR__));
defined('__LIB') OR define('__LIB', dirname(__DIR__) . "/libraries/Underscore");

Libraries::add('Underscore', array(
    "path" => __LIB,
    "bootstrap" => "underscore.php",
));