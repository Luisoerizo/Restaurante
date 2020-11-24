<?php
require 'view/header.php';
include_once 'model/restaurante.php';
?>

<div class="jumbotron bg-jumbotron d-flex flex-column justify-content-center align-items-center text-white text-center">
  <div class="intro">
    <h1 class="display-1 pb-4 "> ¿Dónde vas a comer hoy? </h1>
    <p class="lead"> Encuentra los mejores restaurantes cerca de ti.</p>
  </div>
</div>
<div class="container-fluid">
  <p class="font-weight-bold text-body text-center"> Nuestra colección de Restaurantes</p>
  <hr>
  <div class="row">
    <div class="col-2 text-center">
      <h3>Busqueda filtrada</h1>
        <hr>

        <div class="dropdown">
          <button class="dropbtn">Ordenar por valoración</button>
          <div class="dropdown-content">
            <a class="dropdown-item" href="<?php constant('URL');?>index/mostrardesc">De mayor a menor</a>
            <a class="dropdown-item" href="<?php constant('URL');?>index/mostrarasc">De menor a mayor</a>
          </div>
        </div>

        <div class="dropdown">
          <button class="dropbtn">Ordenar por precios</button>
          <div class="dropdown-content">
            <a class="dropdown-item" href="<?php constant('URL');?>index/mostrarprecioasc">De menor a mayor</a>
            <a class="dropdown-item" href="<?php constant('URL');?>index/mostrarpreciodesc">De mayor a menor</a>
          </div>
        </div>

        <div class="dropdown">
          <button class="dropbtn">Ordenar por ciudad</button>
          <div class="dropdown-content">
            <a class="dropdown-item" href="<?php constant('URL'); ?>index/mostrarciudadasc">A - Z</a>
            <a class="dropdown-item" href="<?php constant('URL'); ?>index/mostrarciudaddesc">Z - A</a>
          </div>
        </div>

        <div class="dropdown">
          <button class="dropbtn">Tipo de comida</button>
          <div class="dropdown-content">
          <a class="dropdown-item" href="<?php constant('URL'); ?>index/mostrarcomidaasc">A - Z</a>
            <a class="dropdown-item" href="<?php constant('URL'); ?>index/mostrarcomidadesc">Z - A</a>
          </div>
        </div>
    </div> <!-- FIN BARRA LATERAL -->
    <div class="col-10">
<!-- ===========================================================================================================
=====================================       ORDEN POR PRECIOS       ============================================
=============================================================================================================-->
<div class="row"> <!-- ORDEN RESTAURANTES ASCENDENDE -->
        <?php
        foreach ($this->restaurantesPrecioAsc as $row) {
          $restaurante = new Restaurante();
          $restaurante = $row;
        ?>
          <div class="card-group col col-md-3 col-sm-5">
            <div class="card my-2 border-left">
              <div class="card-body">
                <img src="<?php echo constant('URL'); ?>public/images/res1.jpg" class="img-thumbnail" width="304" height="236">
                <h4 class="card-title"><?php echo $restaurante->nombreRestaurante; ?></h4>
                <label class="card-text font-weight-bold">Ciudad: </label> <label class="card-text"><?php echo $restaurante->ciudad; ?></label> <br>
                <label class="card-text font-weight-bold">Rango de precios: </label> <label class="card-text"><?php echo $restaurante->rangoPrecio; ?></label> <br>
                <label class="card-text font-weight-bold">Tipo de comida: </label> <label class="card-text"><?php echo $restaurante->tipoComida; ?></label> <br>
                <label class="card-text font-weight-bold">Valoración: </label> <label class="card-text">
                  <?php
                  for ($i = 1; $i <= $restaurante->valoracion; $i++) {
                    echo '⭐';
                  }
                  ?>
                </label>
                <p> <a href="<?php echo constant('URL'); ?>reservar" class="btn btn-outline-success">Reservar Ahora</a> </p>
              </div>
            </div> <!--FIN CARD -->
          </div><!--FIN CARD GROUP -->
        <?php } ?>
      </div> <!--FIN ROW -->

<!-- ===========================================================================================================
================================================================================================================
=============================================================================================================-->
<div class="row"> <!-- ORDEN RESTAURANTES ASCENDENDE -->
        <?php
        foreach ($this->restaurantesPrecioDesc as $row) {
          $restaurante = new Restaurante();
          $restaurante = $row;
        ?>
          <div class="card-group col col-md-3 col-sm-5">
            <div class="card my-2 border-left">
              <div class="card-body">
                <img src="<?php echo constant('URL'); ?>public/images/res1.jpg" class="img-thumbnail" width="304" height="236">
                <h4 class="card-title"><?php echo $restaurante->nombreRestaurante; ?></h4>
                <label class="card-text font-weight-bold">Ciudad: </label> <label class="card-text"><?php echo $restaurante->ciudad; ?></label> <br>
                <label class="card-text font-weight-bold">Rango de precios: </label> <label class="card-text"><?php echo $restaurante->rangoPrecio; ?></label> <br>
                <label class="card-text font-weight-bold">Tipo de comida: </label> <label class="card-text"><?php echo $restaurante->tipoComida; ?></label> <br>
                <label class="card-text font-weight-bold">Valoración: </label> <label class="card-text">
                  <?php
                  for ($i = 1; $i <= $restaurante->valoracion; $i++) {
                    echo '⭐';
                  }
                  ?>
                </label>
                <p> <a href="<?php echo constant('URL'); ?>reservar" class="btn btn-outline-success">Reservar Ahora</a> </p>
              </div>
            </div> <!--FIN CARD -->
          </div><!--FIN CARD GROUP -->
        <?php } ?>
      </div> <!--FIN ROW -->
<!-- ===========================================================================================================
=====================================        ORDEN POR CIUDAD       ============================================
=============================================================================================================-->
<div class="row"> <!-- ORDEN RESTAURANTES ASCENDENDE -->
        <?php
        foreach ($this->restaurantesCiudadAsc as $row) {
          $restaurante = new Restaurante();
          $restaurante = $row;
        ?>
          <div class="card-group col col-md-3 col-sm-5">
            <div class="card my-2 border-left">
              <div class="card-body">
                <img src="<?php echo constant('URL'); ?>public/images/res1.jpg" class="img-thumbnail" width="304" height="236">
                <h4 class="card-title"><?php echo $restaurante->nombreRestaurante; ?></h4>
                <label class="card-text font-weight-bold">Ciudad: </label> <label class="card-text"><?php echo $restaurante->ciudad; ?></label> <br>
                <label class="card-text font-weight-bold">Rango de precios: </label> <label class="card-text"><?php echo $restaurante->rangoPrecio; ?></label> <br>
                <label class="card-text font-weight-bold">Tipo de comida: </label> <label class="card-text"><?php echo $restaurante->tipoComida; ?></label> <br>
                <label class="card-text font-weight-bold">Valoración: </label> <label class="card-text">
                  <?php
                  for ($i = 1; $i <= $restaurante->valoracion; $i++) {
                    echo '⭐';
                  }
                  ?>
                </label>
                <p> <a href="<?php echo constant('URL'); ?>reservar" class="btn btn-outline-success">Reservar Ahora</a> </p>
              </div>
            </div> <!--FIN CARD -->
          </div><!--FIN CARD GROUP -->
        <?php } ?>
      </div> <!--FIN ROW -->

<!-- ===========================================================================================================
================================================================================================================
=============================================================================================================-->
<div class="row"> <!-- ORDEN RESTAURANTES ASCENDENDE -->
        <?php
        foreach ($this->restaurantesCiudadDesc as $row) {
          $restaurante = new Restaurante();
          $restaurante = $row;
        ?>
          <div class="card-group col col-md-3 col-sm-5">
            <div class="card my-2 border-left">
              <div class="card-body">
                <img src="<?php echo constant('URL'); ?>public/images/res1.jpg" class="img-thumbnail" width="304" height="236">
                <h4 class="card-title"><?php echo $restaurante->nombreRestaurante; ?></h4>
                <label class="card-text font-weight-bold">Ciudad: </label> <label class="card-text"><?php echo $restaurante->ciudad; ?></label> <br>
                <label class="card-text font-weight-bold">Rango de precios: </label> <label class="card-text"><?php echo $restaurante->rangoPrecio; ?></label> <br>
                <label class="card-text font-weight-bold">Tipo de comida: </label> <label class="card-text"><?php echo $restaurante->tipoComida; ?></label> <br>
                <label class="card-text font-weight-bold">Valoración: </label> <label class="card-text">
                  <?php
                  for ($i = 1; $i <= $restaurante->valoracion; $i++) {
                    echo '⭐';
                  }
                  ?>
                </label>
                <p> <a href="<?php echo constant('URL'); ?>reservar" class="btn btn-outline-success">Reservar Ahora</a> </p>
              </div>
            </div> <!--FIN CARD -->
          </div><!--FIN CARD GROUP -->
        <?php } ?>
      </div> <!--FIN ROW -->

<!-- ===========================================================================================================
=====================================        ORDEN POR COMIDA       ============================================
=============================================================================================================-->
<div class="row"> <!-- ORDEN RESTAURANTES ASCENDENDE -->
        <?php
        foreach ($this->restaurantesComidaAsc as $row) {
          $restaurante = new Restaurante();
          $restaurante = $row;
        ?>
          <div class="card-group col col-md-3 col-sm-5">
            <div class="card my-2 border-left">
              <div class="card-body">
                <img src="<?php echo constant('URL'); ?>public/images/res1.jpg" class="img-thumbnail" width="304" height="236">
                <h4 class="card-title"><?php echo $restaurante->nombreRestaurante; ?></h4>
                <label class="card-text font-weight-bold">Ciudad: </label> <label class="card-text"><?php echo $restaurante->ciudad; ?></label> <br>
                <label class="card-text font-weight-bold">Rango de precios: </label> <label class="card-text"><?php echo $restaurante->rangoPrecio; ?></label> <br>
                <label class="card-text font-weight-bold">Tipo de comida: </label> <label class="card-text"><?php echo $restaurante->tipoComida; ?></label> <br>
                <label class="card-text font-weight-bold">Valoración: </label> <label class="card-text">
                  <?php
                  for ($i = 1; $i <= $restaurante->valoracion; $i++) {
                    echo '⭐';
                  }
                  ?>
                </label>
                <p> <a href="<?php echo constant('URL'); ?>reservar" class="btn btn-outline-success">Reservar Ahora</a> </p>
              </div>
            </div> <!--FIN CARD -->
          </div><!--FIN CARD GROUP -->
        <?php } ?>
      </div> <!--FIN ROW -->

<!-- ===========================================================================================================
================================================================================================================
=============================================================================================================-->
<div class="row"> <!-- ORDEN RESTAURANTES ASCENDENDE -->
        <?php
        foreach ($this->restaurantesComidaDesc as $row) {
          $restaurante = new Restaurante();
          $restaurante = $row;
        ?>
          <div class="card-group col col-md-3 col-sm-5">
            <div class="card my-2 border-left">
              <div class="card-body">
                <img src="<?php echo constant('URL'); ?>public/images/res1.jpg" class="img-thumbnail" width="304" height="236">
                <h4 class="card-title"><?php echo $restaurante->nombreRestaurante; ?></h4>
                <label class="card-text font-weight-bold">Ciudad: </label> <label class="card-text"><?php echo $restaurante->ciudad; ?></label> <br>
                <label class="card-text font-weight-bold">Rango de precios: </label> <label class="card-text"><?php echo $restaurante->rangoPrecio; ?></label> <br>
                <label class="card-text font-weight-bold">Tipo de comida: </label> <label class="card-text"><?php echo $restaurante->tipoComida; ?></label> <br>
                <label class="card-text font-weight-bold">Valoración: </label> <label class="card-text">
                  <?php
                  for ($i = 1; $i <= $restaurante->valoracion; $i++) {
                    echo '⭐';
                  }
                  ?>
                </label>
                <p> <a href="<?php echo constant('URL'); ?>reservar" class="btn btn-outline-success">Reservar Ahora</a> </p>
              </div>
            </div> <!--FIN CARD -->
          </div><!--FIN CARD GROUP -->
        <?php } ?>
      </div> <!--FIN ROW -->

<!-- ===========================================================================================================
=====================================     ORDEN POR VALORACIONES    ============================================
=============================================================================================================-->
      <div class="row"> <!-- ORDEN RESTAURANTES ASCENDENDE -->
        <?php
        foreach ($this->restaurantesasc as $row) {
          $restaurante = new Restaurante();
          $restaurante = $row;
        ?>
          <div class="card-group col col-md-3 col-sm-5">
            <div class="card my-2 border-left">
              <div class="card-body">
                <img src="<?php echo constant('URL'); ?>public/images/res1.jpg" class="img-thumbnail" width="304" height="236">
                <h4 class="card-title"><?php echo $restaurante->nombreRestaurante; ?></h4>
                <label class="card-text font-weight-bold">Ciudad: </label> <label class="card-text"><?php echo $restaurante->ciudad; ?></label> <br>
                <label class="card-text font-weight-bold">Rango de precios: </label> <label class="card-text"><?php echo $restaurante->rangoPrecio; ?></label> <br>
                <label class="card-text font-weight-bold">Tipo de comida: </label> <label class="card-text"><?php echo $restaurante->tipoComida; ?></label> <br>
                <label class="card-text font-weight-bold">Valoración: </label> <label class="card-text">
                  <?php
                  for ($i = 1; $i <= $restaurante->valoracion; $i++) {
                    echo '⭐';
                  }
                  ?>
                </label>
                <p> <a href="<?php echo constant('URL'); ?>reservar" class="btn btn-outline-success">Reservar Ahora</a> </p>
              </div>
            </div> <!--FIN CARD -->
          </div><!--FIN CARD GROUP -->
        <?php } ?>
      </div> <!--FIN ROW -->
<!-- ===========================================================================================================
================================================================================================================
=============================================================================================================-->
      <div class="row">  <!-- ORDEN RESTAURANTES DESCENDENDE -->
        <?php
        foreach ($this->restaurantesdesc as $row) {
          $restaurante = new Restaurante();
          $restaurante = $row;

        ?>
          <div class="card-group col col-md-3 col-sm-5">
            <div class="card my-2 border-left">
              <div class="card-body">
                <img src="<?php echo constant('URL'); ?>public/images/res1.jpg" class="img-thumbnail" width="304" height="236">
                <h4 class="card-title"><?php echo $restaurante->nombreRestaurante; ?></h4>
                <label class="card-text font-weight-bold">Ciudad: </label> <label class="card-text"><?php echo $restaurante->ciudad; ?></label> <br>
                <label class="card-text font-weight-bold">Rango de precios: </label> <label class="card-text"><?php echo $restaurante->rangoPrecio; ?></label> <br>
                <label class="card-text font-weight-bold">Tipo de comida: </label> <label class="card-text"><?php echo $restaurante->tipoComida; ?></label> <br>
                <label class="card-text font-weight-bold">Valoración: </label> <label class="card-text">
                  <?php
                  for ($i = 1; $i <= $restaurante->valoracion; $i++) {
                    echo '⭐';
                  }
                  ?>
                </label>
                <p> <a href="<?php echo constant('URL'); ?>reservar" class="btn btn-outline-success">Reservar Ahora</a> </p>
              </div>
            </div><!--FIN CARD -->
          </div><!--FIN CARD GROUP -->
        <?php } ?>
      </div><!--FIN ROW -->
<!-- ===========================================================================================================
================================================================================================================
=============================================================================================================-->
      <div class="row"><!-- CARDS PRECARGADOS-->
        <?php
        foreach ($this->restaurantes as $row) {
          $restaurante = new Restaurante();
          $restaurante = $row;
        ?>
          <div class="card-group col col-md-3 col-sm-5">
            <div class="card my-2 border-left">
              <div class="card-body">
                <img src="<?php echo constant('URL'); ?>public/images/res1.jpg" class="img-thumbnail" width="304" height="236">
                <h4 class="card-title"><?php echo $restaurante->nombreRestaurante; ?></h4>
                <label class="card-text font-weight-bold">Ciudad: </label> <label class="card-text"><?php echo $restaurante->ciudad; ?></label> <br>
                <label class="card-text font-weight-bold">Rango de precios: </label> <label class="card-text"><?php echo $restaurante->rangoPrecio; ?></label> <br>
                <label class="card-text font-weight-bold">Tipo de comida: </label> <label class="card-text"><?php echo $restaurante->tipoComida; ?></label> <br>
                <label class="card-text font-weight-bold">Valoración: </label> <label class="card-text">
                  <?php
                  for ($i = 1; $i <= $restaurante->valoracion; $i++) {
                    echo '⭐';
                  }
                  ?>
                </label>
                <p> <a href="<?php echo constant('URL'); ?>reservar" class="btn btn-outline-success">Reservar Ahora</a> </p>
              </div>
            </div><!--FIN CARD -->
          </div><!--FIN CARD GROUP -->
        <?php } ?>
      </div><!--FIN ROW CARDS PRECARGADOS -->
    </div><!--FIN COL 10 CONTENEDOR DE CARDS -->
  </div><!--FIN ROW -->

</div>
<!--FIN CONTENEDOR PRINCIPAL -->


<?php require 'view/footer.php'; ?>