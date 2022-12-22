<?php
$databaseHost = 'localhost';
$databaseName = 'uas_mobcom'; // NAMA DATABASE
$databaseUsername = 'root'; // USERNAME DATABASE
$databasePassword = ''; //PASSWORD DATABASE
$databasePort = '3307';

// MENGHUBUNGKAN DATABASE
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName, $databasePort);

