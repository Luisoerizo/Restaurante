<?php

class Reservaciones extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->datosReservaciones  = [];  
    }

    function render(){
        $reservaciones = $this->model->getReservaciones();
        $this->view->datosReservaciones = $reservaciones; 
        $this->view->render('reservaciones');
    }

    function verReservacion($param = null){
        $idReservacion = $param[0];
        $reservacion = $this->model->getById($idReservacion);
        $this->view->reservacion = $reservacion;
        $this->view->render('actualizar');
    }

    function actualizarReservacion(){
        $idReservacion = $_POST['idReservacion'];
        $nombreCliente = $_POST['nombreCliente'];
        $personas      = $_POST['personas'];
        $fecha         = $_POST['fecha'];
        $correo        = $_POST['correo'];
        $idRestaurante = $_POST['idRestaurante'];

        if($this->model->update([
            'idReservacion'=>$idReservacion,
            'nombreCliente'=>$nombreCliente,
            'personas'=>$personas,
            'fecha'=>$fecha,
            'correo'=>$correo,
            'idRestaurante'=>$idRestaurante
            ])){
                $this->render();
                $this->view->mensaje = "Los datos se actualizaron correctamente";
        }
        else{
            $this->view->render('index');
        }
 
    }
    function eliminarReservacion($param = null){
        $id = $param[0];

        if($this->model->delete($id)){
            echo 'eliminado';
        }
        else{
            echo 'ocurrio un error';
        }
        $this->render();
    }

}