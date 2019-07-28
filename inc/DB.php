<?php

namespace inc;

class DB {
	private static $database;
	private $connection;

	// singletone, get database
	public static function get() {
		if(!self::$database) {
			self::$database = new self();
		}

		return self::$database;
	}

	public function getConnection() {
		return $this->connection;
	}

	public function __construct() {
		$config = require ROOT_PATH. "config.php";

		$this->connection = new \mysqli(
			$config['db']['host'], 
			$config['db']['username'], 
			$config['db']['password'], 
			$config['db']['name']
		);

		if(mysqli_connect_error()) {
			die("Eroare la conectarea MySQL!");
		}

		return $this;
	}
}