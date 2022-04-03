<?php
require_once('db.php');
$id=$_POST['id'];
$titulo=$_POST['titulo'];
$imagen=$_POST['imagen'];
$fecha=$_POST['fecha'];
$contenido=$_POST['contenido'];
/* 
if(isset($titulo)){
    $id= $gbd->query("SELECT id from content where titulo=:titulo");
 */
    $modificar= $gbd->prepare("UPDATE content SET titulo = '$titulo',contenido='$contenido', fecha='$fecha',imagen='$imagen'  WHERE `content`.`id` = :id;");
    $modificar->bindValue('id',$id);
    $modificar->execute();
    header('Location: index.php');
// }
// header('Location: index.php');

?>