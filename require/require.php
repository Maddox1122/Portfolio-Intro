<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_data = 'portfolio';

session_start();

$con = new mysqli($db_host, $db_user, $db_pass, $db_data);

if ($con->connect_errno) {
    die('Failed to connect to MySQL: ' . $con->connect_error);
}
