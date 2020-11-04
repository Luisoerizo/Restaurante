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

}