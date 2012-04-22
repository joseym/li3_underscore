# Plugin to add [Underscore.php](http://brianhaveri.github.com/Underscore.php/) magic to [Lithium PHP](http://lithify.me)

***
__Notice__: The Underscore.php library currently throws [Static invocations warnings](https://github.com/brianhaveri/Underscore.php/issues/4) when reporting level includes E_Strict. To use make sure your error reporting level does not include E_Strict
***

## Installation
1. Clone/Download the plugin into your app's ``libraries`` directory.
2. Tell your app to load the plugin by adding the following to your app's ``config/bootstrap/libraries.php``:

	Libraries::add('li3_underscore');

3. Pull the seperate [Underscore.php](http://brianhaveri.github.com/Underscore.php) project into the lithium plugin

~~~ shell
$ cd app/libraries/li3_underscore
$ git submodule init
$ git submodule update
~~~

That's basically it, to use just call the underscore class wherever you needed it, like so:

## Usage

~~~ php
<?php
namespace app\models;
use __; // expose underscore.php to our controller

class PageModel extends BaseModel {
	
	...

	public function underscore(){

		error_reporting(E_ALL); // exclude strict warnings, otherwise underscore reports static invocation warnings.

		$myArray = array('1', 'two', 3);
		$object = __::isObject($myArray); // returns false
		$array = __::isArray($myArray); // returns true

	}

	...

}

?>
~~~

Naturally I'd choose the simpliest of examples, check out the [Underscore Docs](http://brianhaveri.github.com/Underscore.php/) to discover all the super awesome features and method helpers.