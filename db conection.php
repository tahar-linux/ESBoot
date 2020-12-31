<?php

try {

	$con ='mysql:host=localhost;dbname=algeria';
	$username = 'root';
	$password = '';

	$web = new PDO ($con, $username, $password);


} catch (PDOException $e) {

die($e->getmessage());

}


 ?>
