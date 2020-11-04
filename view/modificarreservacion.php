<?php 
        require 'view/header.php';
  ?>

  <div class="container col-5">
  <h1 class="display-4 text-center"> Modificar Reservación </h1>
<hr>
      <form action="">

      <div class="form-group">
            <label for="correo" class="control-label">Correo electrónico</label>
            <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo electrónico">
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Buscar reservación</button>
        </div>

      </form>

  </div>
      

<?php 
        require 'view/footer.php';
  ?>