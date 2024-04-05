<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person Admin</title>

    <link rel="stylesheet" href="<?php echo base_url("vendor/twbs/bootstrap/dist/css/bootstrap.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("vendor/twbs/bootstrap-icons/font/bootstrap-icons.css") ?>">
</head>
<body class="bg-light">
<nav class="container navbar navbar-expand-lg bg-secondary text-uppercase" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top">Sistema Pos</a>


    </div>

    <div class="container justify-content-end" >
        <ul class="navbar-nav ms-auto">
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Portfolio</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li>
        </ul>
    </div>
</nav>
<main class="container">
    contenido

 <div class="container row">
     <h2>Listado de productos</h2>
     
      <ul>
           <?php foreach($productos as $producto):?>
              <li><?php echo $producto['nombre_producto'] ;  ?></li> 
           <?php endforeach; ?>
      </ul>
   

 </div>

 <div class="container bg-primary">
   <?= $categoria->getNombre(); ?>
 </div>

</main>




<footer class="container">
    pie de pagina
</footer>


</body>
</html>