<?php
require_once('db.php');
$titulo=$_POST['title'];
$texto=$_POST['texto'];
$imagen=$_POST['imagen'];
$fecha=$_POST['date'];


$insertar=$gbd->prepare("INSERT INTO content(titulo,contenido,imagen,fecha) VALUES (:title,:texto,:imagen,:fecha)");
$insertar->bindParam('title',$titulo);
$insertar->bindParam('texto',$texto);
$insertar->bindParam('imagen',$imagen);
$insertar->bindParam('fecha',$fecha);
$insertar->execute();
header('Location: index.php');