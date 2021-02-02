
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
  <link rel="stylesheet" href="css/fontawesome/css/all.css">
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
</head>

<body id="<?php echo $pagina?>">
  <header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white mt-2">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item active">
              <a class="nav-link px-5<?php echo $pagina == "index"?"active": "" ?>" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-5 <?php echo $pagina == "sobre-mi"?"active": "" ?>" href="sombre-mi.php">Sobre mi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-5 <?php echo $pagina == "proyectos"?"active": "" ?>" href="proyectos.php">Proyectos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-5 <?php echo $pagina == "contacto"?"active": "" ?>" href="contacto.php" aria-disabled="true">contacto</a>
            </li>
          </ul>
          <form class="d-flex">  
            <a href="files/CV Pablo Ezequiel Abagnale 2020.doc.pdf" target="_blank"><button class="btn-cv" type="button">Decarga mi CV <i class="fas fa-download"></i></button></a>
          </form>
        </div>
      </div>
    </nav>
  </header>