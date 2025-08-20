<?php
// Basic connection settings
$databaseHost = '<host_address>';
$databaseUsername = '<user_name>';
$databasePassword = 'mariadb';
$databaseName = 'mariadb';

// Connect to the database
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
?>