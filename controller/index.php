<?php

class Index extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->restaurantes = [];
    }

    function render(){
        $restaurantes = $this->model->getRestaurantes();
        $this->view->restaurantes = $restaurantes;
        $this->view->render('index');
    }

}