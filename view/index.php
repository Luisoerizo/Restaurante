<?php 
        require 'view/header.php';
  ?>

<div class="jumbotron bg-jumbotron d-flex flex-column justify-content-center align-items-center text-white text-center">
  <div class="intro">
    <h1 class="display-1 pb-4 "> ¿Dónde vas a comer hoy? </h1>
    <p class="lead"> Encuentra los mejores restaurantes cerca de ti.</p>
  </div>
</div>
<div class="container-fluid">
  <p class="font-weight-bold text-body text-center"> Los mejor votados </p>
  <hr>
  <div class="row">
    <div class="col-2 barra-busqueda">
      <h3>Busqueda filtrada</h1>
        <hr>
        <form id="form" name="form" class="grupo-estrellas" method="POST">
          <p class="font-weight-bold">Valoración</p>
          <p class="clasificacion">
            <input id="radio1" type="radio" name="estrellas" value="5">
            <!--
        --><label for="radio1">★</label>
            <!--
        --><input id="radio2" type="radio" name="estrellas" value="4">
            <!--
        --><label for="radio2">★</label>
            <!--
        --><input id="radio3" type="radio" name="estrellas" value="3">
            <!--
        --><label for="radio3">★</label>
            <!--
        --><input id="radio4" type="radio" name="estrellas" value="2">
            <!--
        --><label for="radio4">★</label>
            <!--
        --><input id="radio5" type="radio" name="estrellas" value="1">
            <!--
        --><label for="radio5">★</label>
          </p>
         <!-- <p class="font-weight-bold">Rango de precios</p>
          <p><a class="" href="<?php echo constant('URL');?>">$ - $$</a></p>
          <p><a class="" href="<?php echo constant('URL');?>">$$ - $$$</a></p>
          <p><a class="" href="<?php echo constant('URL');?>">$$$ - $$$$</a></p>
          <p><a class="" href="<?php echo constant('URL');?>">$$$$ - $$$$$</a></p>
          <p class="font-weight-bold">Ciudad</p>
          <p><a class="" href="<?php echo constant('URL');?>">Cuernavaca</a></p>
          <p><a class="" href="<?php echo constant('URL');?>">Xochitepec</a></p>
          <p><a class="" href="<?php echo constant('URL');?>">Zacatepec</a></p>
          <p><a class="" href="<?php echo constant('URL');?>">Jojutla</a></p>
-->
        </form>
    </div> <!-- FIN BARRA LATERAL -->
    <div class="col-10">
      <div class="row">
          <?php 
              foreach($this->restaurantes as $row){
                  $restaurante = new Restaurante();
                  $restaurante = $row;
              
          ?>
        <div class="card-group col col-md-3 col-sm-5">
          <div class="card my-2 border-left">
            <div class="card-body">
              <img src="<?php echo constant('URL'); ?>public/images/res1.jpg" class="img-thumbnail" alt="Cinque Terre"
                width="304" height="236">
              <h4 class="card-title"><?php echo $restaurante->nombreRestaurante;?></h4>
              <label class="card-text font-weight-bold">Ciudad: </label>    <label class="card-text"><?php echo $restaurante->ciudad;?></label> <br>
              <label class="card-text font-weight-bold">Rango de precios: </label>    <label class="card-text"><?php echo $restaurante->rangoPrecio;?></label> <br>
              <label class="card-text font-weight-bold">Tipo de comida: </label>    <label class="card-text"><?php echo $restaurante->tipoComida;?></label> <br>
              <label class="card-text font-weight-bold">Valoración: </label>    <label class="card-text">
              <?php 
                for ($i = 1; $i <= $restaurante->valoracion; $i++) {
                  echo '⭐';
              }
              ?>
            </label>
            
              <p>  <a href="<?php echo constant('URL');?>reservar" class="btn btn-outline-success">Reservar Ahora</a>  </p>
            </div>
          </div><!--FIN CARD -->
         
        </div> <!--FIN CARD GROUP -->
            <?php }?>
      </div>  <!--FIN ROW -->
    
    </div> <!--FIN COL 10 -->
   
  </div> <!--FIN ROW -->
 
</div><!--FIN CONTENEDOR PRINCIPAL -->


<?php require 'view/footer.php';?>