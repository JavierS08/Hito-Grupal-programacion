<?php


$dsn = 'mysql:dbname=test;host=127.0.0.1';
$usuario = 'root';
$contraseña = '';



try {
    $gbd = new PDO($dsn, $usuario, $contraseña); //constructor
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}

