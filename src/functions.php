<?php

namespace Logger;

use PDO;

function Initialize(PDO $database_instance, $config = [])
{
	if(!empty($config))
	{
		echo "Configuration";
	}

	new Logger($database_instance);
}