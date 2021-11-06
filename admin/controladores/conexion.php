<?php
$dsn = 'mysql:dbname=inmobiliaria;host=localhost';
$usuario = 'root';
$contraseña = '';
try {
    $pdo = new PDO($dsn, $usuario, $contraseña);
    
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}