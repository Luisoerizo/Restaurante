<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8157424bab.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/estilos.css">
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
    
    <title>RESTAURANTES ONLINE</title>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark navbar-expand-lg navbar-expand-xl">
        <a class="navbar-brand " href="<?php echo constant('URL'); ?>">Restaurantes en Morelos</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
          aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo constant('URL'); ?>index">Inicio<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo constant('URL'); ?>reservar">Reservar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo constant('URL'); ?>modificarreservacion">Modificar reservación</a>
            </li>
          </ul>
        </div>
      </nav>
