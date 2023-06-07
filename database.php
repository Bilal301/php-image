<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'php_image';
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
