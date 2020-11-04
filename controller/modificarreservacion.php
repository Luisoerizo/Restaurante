<?php

class ModificarReservacion extends Controller{

    function __construct(){
        parent::__construct();
      
    }

    function render(){
        $this->view->render('modificarreservacion');
    }

}