<?php

// https://en.wikipedia.org/w/api.php?action=tokens&format=json

$token = isset($_COOKIE['authenticated']) && $_COOKIE['authenticated'] ? 'ABCDEFG' : '+';

$output = array(
	'token' => array(
		'edittoken' => $token,
	)
);

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

print json_encode($output);
