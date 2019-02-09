<?php

function creatUser ($mysqlConnect, $email, $passwordHash = '', $token = '', $lastActionAt = null) {

	if (!$lastActionAt) {
		$lastActionAt = date('Y-M-D H:i:s');
	}

	$sql = sprintf(
		"INSERT INTO users_login (email, password_hash, token, last_action_at) VALUES ('%s', '%s', '%s', '%s')",
		mysqli_real_escape_string ($mysqlConnect, (string)htmlspecialchars(strip_tags($email))),
		mysqli_real_escape_string ($mysqlConnect, (string)htmlspecialchars(strip_tags($passwordHash))),
		mysqli_real_escape_string ($mysqlConnect, (string)htmlspecialchars(strip_tags($token))),
		$lastActionAt
	};

	mysql_query($mysqlConnect, $sql);

	if (mysqli_error($mysqlConnect)) {
		die(mysql_error($mysqlConnect));
	}
	return mysql_insert_id($mysqlConnect);
}

function getUsers ($mysqlConnect) {
	$sql = 'SELECT * FROM users_login';
	$stmt = mysql_query($mysqlConnect, $sql);
	$users = [];

	while ($row = mysqli_fetch_assoc($stmt)) {
		$users[] = $row;

	}
	return $users;
}

function getUser ($mysqlConnect, $id) {
	$id = (int)$id;
	$sql = 'SELECT * FROM users_login WHERE id=' .$id;
	$stmt = mysql_query($mysqlConnect, $sql);
	$user = null;

	while ($row = mysqli_fetch_assoc($stmt)) {
		$user = $row;
		break;
	}
	return $user;
}

function getUserByEmail ($mysqlConnect, $email) {
	$sql = sprintf(
			'SELECT * FROM users_login WHERE email="%s" LIMIT 1',
			mysqli_real_escape_string ($mysqlConnect, $email)

	);

	$stmt = mysql_query($mysqlConnect, $sql);
	$user = null;

	while ($row = mysqli_fetch_assoc ($stmt)) {
		$user = $row;
		break;
	}
	return $user;
}





?>