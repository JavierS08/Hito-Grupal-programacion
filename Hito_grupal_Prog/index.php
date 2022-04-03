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
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

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

     <!-- CONTACT -->
     <section class="contact section" id="contact">
          <div class="container">
               <div class="row">

                    <div class="ml-auto col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">FORMULARIO</h2>

                        <form action="save.php" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
                            <label>Titulo</label>
                            <input type="text" class="form-control" name="title" placeholder="Escribe un titulo">
                            <label>Contenido texto</label>
                            <input type="text" class="form-control" name="texto" placeholder="Escribe el Contenido">
                            <label>Imagen</label>
                            <input type="text" class="form-control" name="imagen" placeholder="Enlaza una imagen">
                            <label>Fecha de publicacion</label>
                            <input type="date" class="form-control" name="date">
                            <button type="submit" class="form-control" id="submit-button" name="submit">Enviar</button>
                        </form>
                    </div>
                    

                    
               </div>
          </div>
     </section>


     <!-- FOOTER -->
     <footer class="site-footer">
          <div class="container">
               <div class="row">
                    <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
                        <p class="mr-4">
                            <i class=""></i>
                            <p>Javier Gutierrez</p>
                        </p>
                        <p class="mr-4">
                            <i class=""></i>
                            <p>Sergio Camino</p>
                        </p>
                        <p class="mr-4">
                            <i class=""></i>
                            <p>Javier Sánchez</p>
                        </p>
                    </div>
                    
               </div>
          </div>
     </footer>

    <!-- Modal -->
    <div class="modal fade" id="membershipForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">

        <div class="modal-content">
          <div class="modal-header">

            <h2 class="modal-title" id="membershipFormLabel">Membership Form</h2>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-footer"></div>

        </div>
      </div>
    </div>

     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>