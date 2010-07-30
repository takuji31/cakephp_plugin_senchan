<?php

class DATABASE_CONFIG {

	var $default = array(
		'driver' => 'mysqli',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'db_dev',
        'encoding' => 'utf8'
	);

	var $pub = array(
		'driver' => 'mysqli',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'db',
        'encoding' => 'utf8'
	);

}
