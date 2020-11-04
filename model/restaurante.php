<?php

    class Restaurante{
        public  $idRestaurante;
        public  $nombreRestaurante;
        public  $ciudad;
        public  $zona;
        public  $valoracion;
        public  $rangoPrecio;
        public  $tipoComida;
    }

    class Reservacion{
        public $idReservacion;
        public $nombreCliente;
        public $personas;
        public $fecha;
        public $correo;
        public $idRestaurante;
    }