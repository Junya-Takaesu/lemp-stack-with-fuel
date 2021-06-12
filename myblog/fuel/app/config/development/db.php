<?php

/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.2
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

/**
 * -----------------------------------------------------------------------------
 *  Database settings for development environment
 * -----------------------------------------------------------------------------
 *
 *  These settings get merged with the global settings.
 *
 */

return array(
	'default' => array(
		'connection' => array(
			'dsn'      => 'mysql:host=mysql;dbname=myblog',
			'username' => 'root',
			'password' => 'password',
		),
	),
	"redis" => array(
		"default" => [
			"hostname" => "redis",
			"port" => 6379,
			"timeout" => null,
			"database" => 0,
			"integer" => 0,
			"password" => null
		]
	)
);
