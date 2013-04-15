<?php

# File: chriskinch.aliases.drushrc.php
$aliases['local'] = array(
	'root' => '/wamp/www/drupal/drupal-7.21',
	'uri' => 'local.chriskinch.com',
);
$aliases['staging'] = array(
	'root' => '/public_html/drupal/drupal-7.21',
	'uri' => 'staging.chriskinch.com',
	'db-url' => 'pgsql://chriskin:qe4StMpCb>t@just48.justhost.com:2083/chriskin_d7_portfolio_stage',
	'remote-host' => 'just48.justhost.com',
    'remote-user' => 'chriskin',
    'databases' => 
		array (
			'default' => 
			array (
				'default' => 
				array (
					'driver' => 'mysql',
					'username' => 'chriskin',
					'password' => 'qe4StMpCb>t',
					'port' => '2083',
					'host' => 'just48.justhost.com',
					'database' => 'chriskin_d7_portfolio_stage',
				),
			),
		),
);
