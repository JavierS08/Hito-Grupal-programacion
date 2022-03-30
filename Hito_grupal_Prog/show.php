<?php

require_once('db.php');
$busqueda=$gbd->prepare('SELECT * FROM content');
$busqueda->execute();
$arrDatos=$busqueda->fetchAll(PDO::FETCH_ASSOC);


?>



<!DOCTYPE html>
<html lang="en">
<head>

     <title>Hito Grupal</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-gymso-style.css">
<!--
Tooplate 2119 Gymso Fitness
https://www.tooplate.com/view/2119-gymso-fitness
-->
</head>
<body>
<h1>Entradas</h1>




<table border="1.5px" align="center">
    <thead>
    <th>ID</th>
    <th>Titulo</th>
    <th>Contenido</th>
    <th>Foto</th>   
    <th>Fecha</th>
</thead>

<tbody>
    <?php

    foreach($arrDatos as $muestra){
        echo '<tr>';

  
        echo '<td >' . $muestra['id'] . '</td>';
        echo '<td >' . $muestra['titulo'] . '</td>';
        echo '<td >' . $muestra['contenido'] . '</td>';
        echo '<td >' . $muestra['imagen'] . '</td>';
        echo '<td >' . $muestra['fecha'] . '</td>';

       
        echo ' </tr>';

    }     
        
    
   
    ?>


</tbody>
</table>

     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>