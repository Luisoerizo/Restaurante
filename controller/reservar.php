<?php
	/**
	 * 
	 */
	class Reservar extends Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->view->mensaje = "";
			$this->view->tipoMensaje ="";
		}

		function render(){
			 $this->view->render('reservar');
		}
		
		function registrarReservacion() {
			$nombreCliente = $_POST['nombreCliente'];
			$personas      = $_POST['personas'];
			$fecha         = $_POST['fecha'];
			$correo        = $_POST['correo'];
			$idRestaurante = $_POST['idRestaurante'];

			if(  $this->model->insert([
				'nombreCliente' => $nombreCliente,
				'personas'      => $personas,
				'fecha'         => $fecha,
				'correo'        => $correo,
				'idRestaurante' => $idRestaurante])){
					$mensaje = "Reservación agregada correctamente";
					$tipoMensaje ="alert alert-success";
			}
			else{
				$mensaje = "¡Error! Algo salió mal :(";
				$tipoMensaje ="alert alert-danger";
			}
			$this->view->mensaje=$mensaje;
			$this->view->tipoMensaje=$tipoMensaje;
			$this->render();
		}

}

     
	
?>