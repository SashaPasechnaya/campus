<?php
	require_once '../connection/DBProvider.php';
	require_once 'tables/Info.php';
	require_once 'tables/InfoOffer.php';

    $provider = new DBProvider;

	$tables = [
		Info::class,
		InfoOffer::class,
	];

	foreach ($tables as $table) {
		$query = call_user_func($table . "::getSQLString");
		$provider->request($query);
	}

	$provider->request(Info::defaultInsert());

	$provider->closeConnection();
?>