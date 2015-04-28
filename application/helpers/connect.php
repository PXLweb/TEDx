<?php
$server = 'localhost';
$username = 'root';
$password = 'Kris3803';
$database = 'tedx';

$db;
try {
    $db = new PDO("mysql:host=$server;dbname=$database;charset=UTF8", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $ex) {
    exit('Error: could not establish database connection');
}
