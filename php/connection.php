<?php
include_once 'settings.php';

try {
	$conn = mysqli_connect(SERVER, USER_NAME, USER_PASS, DATABASE_NAME);
	if($conn) {
		//echo 'Connection complete!';
	} else {
		//echo 'Connection failed!';
	}
} catch (Exception $e) {
	var_dump($e);
}

