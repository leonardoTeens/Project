<?php
require_once "session.php";
require_once "constants.php";

$con = mysqli_connect(DB_SERVER,DB_USER, DB_PASS, DB_NAME) or die(mysqli_error());
