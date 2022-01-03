<?php

require __DIR__ . '/../../vendor/autoload.php';

$pdo = new PDOConnector(
	'localhost', // server
	'root',      // user
	'',      // password
	'pirmadb'   // database
);

$pdoConn = $pdo->connect('utf8', []); // charset, options

//
// you could now interact with PDO for instance setting attributes etc:
// $pdoConn->setAttribute($attribute, $value);
//

$dbConn = new Simplon\Mysql\Mysql($pdoConn);