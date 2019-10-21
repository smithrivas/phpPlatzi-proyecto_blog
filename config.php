<?php
$dbHost = 'localhost';
$dbName = 'phpplatzi';
$dbUser = 'root';
$dbPass = '';
try {
    // Tipo de base de datos:host; nombre db;  
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPass);
    // Habilitar el modo de error que tiene PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo $e->getMessage();
}
