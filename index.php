<?php
if ((include 'index.html') == TRUE) {
    echo 'OK';
}else{
	echo 'pizda';
}
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'game_market';

try {
	$conn = mysqli_connect($server, $user, $password, $database);
	if($conn) {
		echo 'Connection complete!';
	} else {
		echo 'Connection failed!';
	}
} catch (Exception $e) {
	var_dump($e);
}
?>