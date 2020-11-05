<?php

class ModificarReservacion extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->palabraReservacion = [];
        $this->view->tipoMensaje ="";
    }

    function render(){
        $this->view->render('modificarreservacion');
    }

     function buscar(){
            $palabra = $_POST['palabra'];
            $palabraReservacion = $this->model->buscarReservaciones($palabra);  
            $this->view->palabraReservacion=$palabraReservacion;
            $this->view->render('modificarreservacion');
            $tipoMensaje ="alert alert-success";
        }
}