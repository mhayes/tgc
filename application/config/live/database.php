<?php

return array(

	'connections' => array(
		'mysql' => array(
			'driver'   => 'mysql',
			'host'     => 'tunnel.pagodabox.com',
			'database' => 'tgc',
			'username' => 'maple',
			'password' => 'KNInXSOa',
			'charset'  => 'utf8',
			'prefix'   => '',
		),
	),

	'redis' => array(
		'default' => array(
			'host'     => 'tunnel.pagodabox.com',
			'port'     => 6379,
			'database' => 0
		),
	),	

);