<?php

/**
 * Main Entry point of the Application
 * @author Maik Steiger
 * @license MIT
 * @version 1.0
 */

namespace Logger;

use PDO;

class Logger
{
	private $db;

	public function __construct(PDO $database_instance)
	{
		$this->db = $database_instance;
	}

}