<?php 
        require 'view/header.php';
        include_once 'model/restaurante.php';
        $link = mysqli_connect("localhost","root","");
	    if($link){
		mysqli_select_db($link,"restaurante");
		mysqli_query($link,"SET NAMES 'utf8'");
		}
  ?>

<div class="container col-5">
        <h1 class="display-4 text-center">Reservación</h1>
        <hr>
        
        <div class="<?php echo $this->tipoMensaje?>" role="alert">
         <?php echo $this->mensaje?>
        </div>
   
    <form action="<?php echo constant('URL');?>reservar/registrarReservacion" method="POST">
        <div class="form-group">
            <label for="nombreCliente" class="control-label">Nombre Completo</label>
            <input type="text" class="form-control" id="nombreCliente" name="nombreCliente" placeholder="Nombre Completo" required>
        </div>

        <div class="form-group">
            <label for="personas" class="control-label">Número de comensales</label>
            <input type="number" class="form-control" id="personas" name="personas"
                placeholder="Número de comensales" required>
        </div>

        <div class="form-group">
            <label for="fecha" class="control-label">Fecha de reservación</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required>
        </div>

        <div class="form-group">
            <label for="correo" class="control-label">Correo electrónico</label>
            <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo electrónico" required>
        </div>
        
        <div class="form-group">
            <label for="nombreRestaurante" class="control-label">Restaurante</label>
            <select class="form-control" id="idRestaurante" name="idRestaurante">
                <option value="">Selecciona un restaurante</option>
                <?php
		$v = mysqli_query($link, "SELECT * FROM restaurantes");
		while($restaurantes = mysqli_fetch_row($v)){
	            ?>
                <option value="<?php echo $restaurantes[0]?>"><?php echo $restaurantes[1]?></option>
                <?php } ?>
                    </select>
                </div>

    <hr>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Reservar</button>
        </div>
    </form>

    <!-- TABLA QUE MUESTRE RESULTADOS DE LA BÚSQUEDA Y POSTERIORMENTE ENVÍE A UN NUEVO FORMULARIO PARA MODIFICARLO  -->
</div>

<?php 
        require 'view/footer.php';
  ?>