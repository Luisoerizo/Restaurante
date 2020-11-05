<?php 
        require 'view/header.php';
        include_once 'model/restaurante.php'
  ?>

  <div class="container">
  <h1 class="display-4 text-center"> Modificar Reservación </h1>
<hr>    
        <form action="<?php constant('URL')?>modificarreservacion/buscar" method="POST">
         <div class="form-group">
            <label for="correo" class="control-label">Correo electrónico</label>
            <input type="email" class="form-control" id="correo" name="palabra" placeholder="Correo electrónico" required>
         </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Buscar reservación</button>
        </div>
        </form> <!-- FIN FORMULARIO -->
    <div class="container">
    <table width="100%" id="tabla" class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No. Reservación</th>
                    <th scope="col">Nombre del cliente</th>
                    <th scope="col">Restaurante</th>
                    <th scope="col">Comensales</th>
                    <th scope="col">Fecha de reservación</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>

            <tbody id="tbody-reservaciones">
            <?php
            foreach ($this->palabraReservacion as $row) { //datos es el arreglo creado en controller
                $reservacion = new Reservacion();
                $reservacion = $row;
            ?>
                <tr >
                    <th scope="row"><?php echo $reservacion->idReservacion; ?></td>
                    <td><?php echo $reservacion->nombreCliente; ?></td>
                    <td><?php echo $reservacion->nombreRestaurante; ?></td>
                    <td><?php echo $reservacion->personas; ?></td>
                    <td><?php echo $reservacion->fecha; ?></td>
                    <td><?php echo $reservacion->correo; ?></td>
                    <td><a class="link-modificar" href="<?php echo constant('URL') . 'reservaciones/verReservacion/' . $reservacion->idReservacion; ?>">Modificar</a>
                    <a class="link-eliminar"href="<?php echo constant('URL') . 'reservaciones/eliminarReservacion/' . $reservacion->idReservacion; ?>"> Eliminar</a></td>
                   
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
        

</div> <!-- FIN CONTAINER -->
      

<?php 
        require 'view/footer.php';
  ?>