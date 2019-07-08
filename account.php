<?php include_once 'includes/connection.php';
include_once 'includes/session.php';
// TODO: This file is account page. You need to show this info about current logged user (get id from session and select all from database). Dont forget about game's keys.
$_SESSION['full_name'] = $full_name;
$_SESSION['session_email'] = $email;

$sql = "SELECT * FROM users";
	$result = mysqli_query($con, $sql);
	while($users = mysqli_fetch_array($result)) {
    echo '<br>';
    //echo $users['username'];
    }
    $user=array(
        $_SESSION['session_username'],
        $_SESSION['session_password'],
        $_SESSION['session_full_name'],
        $_SESSION['session_email'],      
      );
      var_dump($user);
       echo '<br>';
      
