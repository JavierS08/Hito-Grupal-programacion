<?php
require_once('db.php');

$titulo=$_POST['titulo'];
$eliminar= $gbd->prepare("DELETE FROM `content` WHERE `content`.`titulo` = :titulo");
$eliminar->bindvalue('titulo',$titulo);
$eliminar->execute();  

header("Location: index.php");