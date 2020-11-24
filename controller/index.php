<?php

class Index extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->restaurantes = [];
        $this->view->restaurantesasc = []; // POR VALORACIÓN ASCENDENTE
        $this->view->restaurantesdesc = []; // POR VALORACIÓN DESCENDENTE

        $this->view->restaurantesPrecioAsc = []; // POR PRECIO ASCENDENTE
        $this->view->restaurantesPrecioDesc = []; // POR PRECIO DESCENDENTE

        $this->view->restaurantesCiudadAsc = []; // POR CIUDAD ASCENDENTE
        $this->view->restaurantesCiudadDesc = []; // POR CIUDAD DESCENDENTE

        $this->view->restaurantesComidaAsc = []; // POR COMIDA ASCENDENTE
        $this->view->restaurantesComidaDesc = []; // POR COMIDA DESCENDENTE
    }

    function render(){
        $restaurantes = $this->model->getRestaurantes();  
        $this->view->restaurantes = $restaurantes;        // Mostrando al cargar la pag. Todos los restaurantes en CARDS
        $this->view->render('index');
    }
 
    function mostrarasc(){
        $restaurantesasc = $this->model->getRestaurantesasc();
        $this->view->restaurantesasc = $restaurantesasc;
           $this->view->render('index');
    }
    
    function mostrardesc(){
        $restaurantesdesc = $this->model->getRestaurantesdesc();
        $this->view->restaurantesdesc = $restaurantesdesc;
        $this->view->render('index');
    }

    function mostrarprecioasc(){
        $restaurantesPrecioAsc = $this->model->getRestaurantesprecioasc();
        $this->view->restaurantesPrecioAsc = $restaurantesPrecioAsc;
        $this->view->render('index');
    }

    function mostrarpreciodesc(){
        $restaurantesPrecioDesc = $this->model->getRestaurantespreciodesc();
        $this->view->restaurantesPrecioDesc = $restaurantesPrecioDesc;
        $this->view->render('index');
    }

    function mostrarciudadasc(){
        $restaurantesCiudadAsc = $this->model->getRestaurantesciudadasc();
        $this->view->restaurantesCiudadAsc =  $restaurantesCiudadAsc;
        $this->view->render('index');
    }

    function mostrarciudaddesc(){
        $restaurantesCiudadDesc = $this->model->getRestaurantesciudaddesc();
        $this->view->restaurantesCiudadDesc = $restaurantesCiudadDesc;
        $this->view->render('index');
    }

    function mostrarcomidaasc(){
        $restaurantesComidaAsc = $this->model->getRestaurantescomidaasc();
        $this->view->restaurantesComidaAsc = $restaurantesComidaAsc;
        $this->view->render('index');
    }

    function mostrarcomidadesc(){
        $restaurantesComidaDesc = $this->model->getRestaurantescomidadesc();
        $this->view->restaurantesComidaDesc = $restaurantesComidaDesc;
        $this->view->render('index');
    }
}