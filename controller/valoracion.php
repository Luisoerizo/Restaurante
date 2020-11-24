<?php

class Valoracin extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->restaurantes = [];
        $this->view->restaurantesXestrellas = [];
        $this->view->restaurantesXestrellasDESC = [];
    }

    function render(){
        $restaurantes = $this->model->getRestaurantes();  
        $this->view->restaurantes = $restaurantes;        // Mostrando al cargar la pag. Todos los restaurantes en CARDS
        $restaurantesasc = $this->model->getRestaurantesasc();
        $this->view->restaurantesASC = $restaurantes;
        $restaurantesdesc = $this->model->getRestaurantesdesc();
        $this->view->restaurantesdesc = $restaurantesdesc;
        $this->view->render('index');
    }

}