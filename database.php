<?php
// Code to Connect to the database used by the site

$pdo = new PDO('mysql:host=mysql;dbname=access;charset=utf8', 'student', 'student',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

?>