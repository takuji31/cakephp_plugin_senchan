<?php

class DATABASE_CONFIG {

	var $pub = array(
		'driver' => 'mysqli',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'db',
        'encoding' => 'utf8'
	);

	var $dev = array(
		'driver' => 'mysqli',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'db_dev',
        'encoding' => 'utf8'
	);
}
