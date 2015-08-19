<?php

define('DB_NAME', '');
define('DSN', 'mysql:host=localhost;dbname=' . DB_NAME);
define('DB_USER', '');
define('DB_PASSWORD', '');

function connectDB() {
	try {
		$options = array(
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
		);

		return new PDO(DSN, DB_USER, DB_PASSWORD, $options);
	} catch (PDOException $e) {
		$e->getMessage();
		exit;
	}
}

$dbh = connectDB();

$sql = 'select * from news;';

$stmt = $dbh->prepare($sql);

$stmt->execute();

$results = $stmt->fetch();

foreach ($results as $key => $value) {
	echo $key . ' : ' . $value . '<br>';
}



