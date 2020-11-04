<?php 
        require 'view/header.php';
  ?>

<div class="jumbotron bg-jumbotron d-flex flex-column justify-content-center align-items-center text-white text-center">
<div class="intro">
<h1 class="display-1 pb-4 "> ¿Dónde vas a comer hoy? </h1>
<p class="lead"> Encuentra los mejores restaurantes cerca de ti.</p>
</div>
</div>
  <div class="container-fluid ">
    <p class="font-weight-bold text-body text-center"> Los mejor votados  </p>
    <hr>
  <div class="row">
    <div class="col-2 barra-busqueda">
        <h3>Busqueda filtrada</h1>
      <hr>
      <form id="form" name="form" class="grupo-estrellas" method="POST">
      <p class="font-weight-bold">Valoración</p>
      <p class="clasificacion">
        <input id="radio1" type="radio" name="estrellas" value="5"><!--
        --><label for="radio1">★</label><!--
        --><input id="radio2" type="radio" name="estrellas" value="4"><!--
        --><label for="radio2">★</label><!--
        --><input id="radio3" type="radio" name="estrellas" value="3"><!--
        --><label for="radio3">★</label><!--
        --><input id="radio4" type="radio" name="estrellas" value="2"><!--
        --><label for="radio4">★</label><!--
        --><input id="radio5" type="radio" name="estrellas" value="1"><!--
        --><label for="radio5">★</label>
      </p>
      <p class="font-weight-bold">Rango de precios</p>
      <p><a class="" href="<?php echo constant('URL');?>">$ - $$</a></p>
      <p><a class="" href="<?php echo constant('URL');?>">$$ - $$$</a></p>
      <p><a class="" href="<?php echo constant('URL');?>">$$$ - $$$$</a></p>
      <p><a class="" href="<?php echo constant('URL');?>">$$$$ - $$$$$</a></p>
      <p class="font-weight-bold">Ciudad</p>
      <p><a class="" href="<?php echo constant('URL');?>">Cuernavaca</a></p>
      <p><a class="" href="<?php echo constant('URL');?>">Xochitepec</a></p>
      <p><a class="" href="<?php echo constant('URL');?>">Zacatepec</a></p>
      <p><a class="" href="<?php echo constant('URL');?>">Jojutla</a></p>

    </form>
    </div> <!-- FIN BARRA LATERAL -->
    <div class="col-10">
    
  <div class="card-group">
  <div class="card m-2  border-left">
    <div class="card-body">
    <img src="<?php echo constant('URL'); ?>public/images/res1.jpg"  class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
      <h4 class="card-title">María Félix</h4>
      <p class="card-text">Ofrecemos comida mexicana, corrida, asados, guisos, entre muchísimos platillos diferentes cada día.</p>
        <a href="#!" class="btn btn-outline-success">Reservar Ahora</a>
    </div>
  </div>
  <div class="card m-2 border-left">
    <div class="card-body">
    <img src="<?php echo constant('URL'); ?>public/images/res2.jpg"  class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
      <h4 class="card-title">Lé Apétit</h4>
      <p class="card-text">Atrévete a probar la mejor comida francesa de todo el estado. Prueba nuestros mejores vinos y licores, sólo en Lé Apétit.</p>
        <a href="#!" class="btn btn-outline-success">Reservar Ahora</a>
    </div>
  </div>
  <div class="card m-2 border-left">
    <div class="card-body">
    <img src="<?php echo constant('URL'); ?>public/images/res3.jpg"  class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
      <h4 class="card-title">Vaca Argentina</h4>
      <p class="card-text">Los mejores cortes de carne estilo Argentina. Sólo cortes de cálidad acompañados de tu bebida favorita.</p>
        <a href="#!" class="btn btn-outline-success">Reservar Ahora</a>
    </div>
  </div>
  <div class="card m-2  border-left">
    <div class="card-body">
    <img src="<?php echo constant('URL'); ?>public/images/res4.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
      <h4 class="card-title">Piérrot</h4>
      <p class="card-text">Restaurante vegano. Conoce todas nuestras ensaladas que te dejarán una increíble explosión de sabores en tu paladar.</p>
        <a href="#!" class="btn btn-outline-success">Reservar Ahora</a>
    </div>
  </div>
  <div class="card m-2  border-left">
    <div class="card-body">
    <img src="<?php echo constant('URL'); ?>public/images/res5.jpg"  class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
      <h4 class="card-title">Rincón del Bife</h4>
      <p class="card-text"> Cocina Mexicana con Parrilla Argentina, disfrute del sabor incondicional que brinda el buen sazón.</p>
        <a href="#!" class="btn btn-outline-success">Reservar Ahora</a>
    </div>
  </div>
</div>

<div class="card-group">
  <div class="card m-2  border-left">
    <div class="card-body">
    <img src="<?php echo constant('URL'); ?>public/images/res1.jpg"  class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
      <h4 class="card-title">María Félix</h4>
      <p class="card-text">Ofrecemos comida mexicana, corrida, asados, guisos, entre muchísimos platillos diferentes cada día.</p>
        <a href="#!" class="btn btn-outline-success">Reservar Ahora</a>
    </div>
  </div>
  <div class="card m-2 border-left">
    <div class="card-body">
    <img src="<?php echo constant('URL'); ?>public/images/res2.jpg"  class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
      <h4 class="card-title">Lé Apétit</h4>
      <p class="card-text">Atrévete a probar la mejor comida francesa de todo el estado. Prueba nuestros mejores vinos y licores, sólo en Lé Apétit.</p>
        <a href="#!" class="btn btn-outline-success">Reservar Ahora</a>
    </div>
  </div>
  <div class="card m-2 border-left">
    <div class="card-body">
    <img src="<?php echo constant('URL'); ?>public/images/res3.jpg"  class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
      <h4 class="card-title">Vaca Argentina</h4>
      <p class="card-text">Los mejores cortes de carne estilo Argentina. Sólo cortes de cálidad acompañados de tu bebida favorita.</p>
        <a href="#!" class="btn btn-outline-success">Reservar Ahora</a>
    </div>
  </div>
  <div class="card m-2  border-left">
    <div class="card-body">
    <img src="<?php echo constant('URL'); ?>public/images/res4.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
      <h4 class="card-title">Piérrot</h4>
      <p class="card-text">Restaurante vegano. Conoce todas nuestras ensaladas que te dejarán una increíble explosión de sabores en tu paladar.</p>
        <a href="#!" class="btn btn-outline-success">Reservar Ahora</a>
    </div>
  </div>
  <div class="card m-2  border-left">
    <div class="card-body">
    <img src="<?php echo constant('URL'); ?>public/images/res5.jpg"  class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
      <h4 class="card-title">Rincón del Bife</h4>
      <p class="card-text"> Cocina Mexicana con Parrilla Argentina, disfrute del sabor incondicional que brinda el buen sazón.</p>
        <a href="#!" class="btn btn-outline-success">Reservar Ahora</a>
    </div>
  </div>
</div>
    </div> <!-- FIN CONTENEDOR SECUNDARIO-->
  </div>
    

  
</div> <!--FIN CONTENEDOR PRINCIPAL -->
  <?php require 'view/footer.php';?>

