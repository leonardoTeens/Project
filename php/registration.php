<?php 
session_start();

// include connection

// get info from browser (form)
$_POST['username'];

// do register INSERT INTO
//SELECT count(id) FROM users WHERE username = '. $_POST['username'] .';
// INSERT INTO 
// SELECT id FROM users WHERE username = '.$_POST['username'].';

// if user already exist - redirect to register page


// write info about user into SESSION
$_SESSION['user'] = [
    'name' => $_POST['username'],
    'id' => 12
];

// NOT SHOWING ANY INFO BEFORE FUCKING REDIRECT
// redirect page to index.php