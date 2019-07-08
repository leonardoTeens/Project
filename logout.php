<?php
include_once 'includes/connection.php';
session_destroy();
header("location:index.php");
