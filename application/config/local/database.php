<?php

return array(

	'connections' => array(
		'mysql' => array(
			'driver'   => 'mysql',
			'host'     => '127.0.0.1',
			'database' => 'tgc',
			'username' => 'tgcuser',
			'password' => 'n1ckf4ld0',
			'charset'  => 'utf8',
			'prefix'   => '',
		),
	),

	'redis' => array(
		'default' => array(
			'host'     => '127.0.0.1',
			'port'     => 6379,
			'database' => 0
		),
	),

);