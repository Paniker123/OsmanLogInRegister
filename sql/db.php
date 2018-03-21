<?php
/* Database connection settings */
$host = 'localhost:3306';//
$user = 'root';
$pass = 'kakapy';//database password(I input my locale database password)
$db = 'account';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
