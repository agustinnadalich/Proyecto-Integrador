<?php

// require_once 'funciones/funcionesMatias.php';
// require_once 'funciones/controller-json.php';

$dsn = "mysql:host=localhost;dbname=juntandomanos_db;port=3306";
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

$base = new PDO($dsn, 'root', '', $opt); //se conecta a la base de datos y me devuelve un objeto PDO que me sirve para correr consultas en esa base de datos

// $usuario = getUserByEmail('Prueba02DH@gmail.com');

//
// $emailusuario= $usuario['0']['pass'];
// echo "$emailusuario";
// password_verify($pass, $usuario->pass);
