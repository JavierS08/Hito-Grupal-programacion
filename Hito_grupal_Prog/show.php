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

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Bienvenido</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link smoothScroll">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="show.php" class="nav-link smoothScroll">Mostrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="eliminar.php" class="nav-link smoothScroll">Eliminar</a>
                    </li>
                    <li class="nav-item">
                        <a href="modificar.php" class="nav-link smoothScroll">Modificar</a>
                    </li>

                </ul>
            </div>
        </div>
</nav>
<!-- MOSTRAR INFO -->
<hr>
<br>
<h1>Entradas</h1>
<table class="table">
    <tr>
        <th>TITULO</th>
        <th>CONTENIDO TEXTO</th>
        <th>IMAGEN</th>
        <th>FECHA DE PUBLICACIÓN</th>
    </tr>
<tbody>
    <!-- PHP -->
    <?php
    require_once('db.php');
    $arrDatos=$gbd->query("SELECT * FROM content");
    foreach ($arrDatos as $fila) {
        echo "<tr><td>" . $fila['titulo'] . "</td><td>".$fila['contenido']."</td><td>"."<img src=".$fila['imagen']." width='250px' height='200px'<img>"."</td><td>".$fila['fecha']."</td></tr>";
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