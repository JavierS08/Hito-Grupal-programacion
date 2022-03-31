<?php
require_once('db.php');


$titulo=$_POST['titulo'];
$imagen=$_POST['imagen'];
$fecha=$_POST['fecha'];
$contenido=$_POST['contenido'];

if(isset($titulo)){
    $id= $gbd->query("SELECT id from content where titulo=:titulo");

    $modificar= $gbd->prepare("UPDATE `content` SET `titulo` = '$titulo' WHERE `content`.`id` = :id;");
    $modificar->bindParam('id',$id);
    $modificar->execute();
}

?>