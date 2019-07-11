<?php

function getUser($login) {


$mysqli = mysqli_connect('localhost:3307', 'root', '', 'PHP1');
$query_auth = sprintf('SELECT * FROM users WHERE login = "%s" LIMIT 1', $login);
$mysql_auth = mysqli_query($mysqli, $query_auth);

$user = NULL;


	$user= mysqli_fetch_assoc($mysql_auth);
    mysqli_close($mysqli);


if (!is_null($user))
	return $user;
	return false;

}
?>