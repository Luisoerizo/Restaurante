<?php

include_once 'model/restaurante.php';

    class IndexModel extends Model{

        public function __construct()
        {
            parent::__construct();
        }

        public function getRestaurantes(){
            $items = [];
            try{
                $query = $this->db->conectar()->query("SELECT * FROM restaurantes;");
                while($row = $query->fetch())
                {
                    $item = new Restaurante();
                    $item->idRestaurante     = $row['idRestaurante'];
                    $item->nombreRestaurante = $row['nombreRestaurante'];
                    $item->ciudad            = $row['ciudad'];
                    $item->zona              = $row['zona'];
                    $item->valoracion             = $row['valoracion'];
                    $item->rangoPrecio            = $row['rangoPrecio'];
                    $item->tipoComida            = $row['tipoComida'];                   
                    array_push($items,$item);
                }
                     return $items;
                }
            catch(PDOException $e){
                echo $e->getMessage();  
                return[];
            }
        }

        function getRestaurantesasc(){
            $items = [];
            try{
            $query = $this->db->conectar()->query("SELECT * FROM restaurantes ORDER BY valoracion ASC;");
                while($row = $query->fetch())
                {
                    $item = new Restaurante();
                    $item->idRestaurante     = $row['idRestaurante'];
                    $item->nombreRestaurante = $row['nombreRestaurante'];
                    $item->ciudad            = $row['ciudad'];
                    $item->zona              = $row['zona'];
                    $item->valoracion             = $row['valoracion'];
                    $item->rangoPrecio            = $row['rangoPrecio'];
                    $item->tipoComida             = $row['tipoComida'];                   
                    array_push($items,$item);
                }
                     return $items;
                }
            catch(PDOException $e){
                echo $e->getMessage();  
                return[];
            }
        }

         function getRestaurantesdesc(){
            $items = [];
            try{
            $query = $this->db->conectar()->query("SELECT * FROM restaurantes ORDER BY valoracion DESC;");
                while($row = $query->fetch())
                {
                    $item = new Restaurante();
                    $item->idRestaurante     = $row['idRestaurante'];
                    $item->nombreRestaurante = $row['nombreRestaurante'];
                    $item->ciudad            = $row['ciudad'];
                    $item->zona              = $row['zona'];
                    $item->valoracion            = $row['valoracion'];
                    $item->rangoPrecio           = $row['rangoPrecio'];
                    $item->tipoComida            = $row['tipoComida'];                   
                    array_push($items,$item);
                }
                     return $items;
                }
            catch(PDOException $e){
                echo $e->getMessage();  
                return[];
            }
        }

        function getRestaurantesprecioasc(){
            $items = [];
            try{
            $query = $this->db->conectar()->query("SELECT * FROM restaurantes ORDER BY rangoPrecio ASC;");
                while($row = $query->fetch())
                {
                    $item = new Restaurante();
                    $item->idRestaurante     = $row['idRestaurante'];
                    $item->nombreRestaurante = $row['nombreRestaurante'];
                    $item->ciudad            = $row['ciudad'];
                    $item->zona              = $row['zona'];
                    $item->valoracion            = $row['valoracion'];
                    $item->rangoPrecio           = $row['rangoPrecio'];
                    $item->tipoComida            = $row['tipoComida'];                   
                    array_push($items,$item);
                }
                     return $items;
                }
            catch(PDOException $e){
                echo $e->getMessage();  
                return[];
            }
        }

        function getRestaurantespreciodesc(){
            $items = [];
            try{
            $query = $this->db->conectar()->query("SELECT * FROM restaurantes ORDER BY rangoPrecio DESC;");
                while($row = $query->fetch())
                {
                    $item = new Restaurante();
                    $item->idRestaurante     = $row['idRestaurante'];
                    $item->nombreRestaurante = $row['nombreRestaurante'];
                    $item->ciudad            = $row['ciudad'];
                    $item->zona              = $row['zona'];
                    $item->valoracion            = $row['valoracion'];
                    $item->rangoPrecio           = $row['rangoPrecio'];
                    $item->tipoComida            = $row['tipoComida'];                   
                    array_push($items,$item);
                }
                     return $items;
                }
            catch(PDOException $e){
                echo $e->getMessage();  
                return[];
            }
        }

        function getRestaurantesciudadasc(){
            $items = [];
            try{
            $query = $this->db->conectar()->query("SELECT * FROM restaurantes ORDER BY ciudad ASC;");
                while($row = $query->fetch())
                {
                    $item = new Restaurante();
                    $item->idRestaurante     = $row['idRestaurante'];
                    $item->nombreRestaurante = $row['nombreRestaurante'];
                    $item->ciudad            = $row['ciudad'];
                    $item->zona              = $row['zona'];
                    $item->valoracion            = $row['valoracion'];
                    $item->rangoPrecio           = $row['rangoPrecio'];
                    $item->tipoComida            = $row['tipoComida'];                   
                    array_push($items,$item);
                }
                     return $items;
                }
            catch(PDOException $e){
                echo $e->getMessage();  
                return[];
            }
        }

        function getRestaurantesciudaddesc(){
            $items = [];
            try{
            $query = $this->db->conectar()->query("SELECT * FROM restaurantes ORDER BY ciudad DESC;");
                while($row = $query->fetch())
                {
                    $item = new Restaurante();
                    $item->idRestaurante     = $row['idRestaurante'];
                    $item->nombreRestaurante = $row['nombreRestaurante'];
                    $item->ciudad            = $row['ciudad'];
                    $item->zona              = $row['zona'];
                    $item->valoracion            = $row['valoracion'];
                    $item->rangoPrecio           = $row['rangoPrecio'];
                    $item->tipoComida            = $row['tipoComida'];                   
                    array_push($items,$item);
                }
                     return $items;
                }
            catch(PDOException $e){
                echo $e->getMessage();  
                return[];
            }
        }

        
        function getRestaurantescomidaasc(){
            $items = [];
            try{
            $query = $this->db->conectar()->query("SELECT * FROM restaurantes ORDER BY tipoComida ASC;");
                while($row = $query->fetch())
                {
                    $item = new Restaurante();
                    $item->idRestaurante     = $row['idRestaurante'];
                    $item->nombreRestaurante = $row['nombreRestaurante'];
                    $item->ciudad            = $row['ciudad'];
                    $item->zona              = $row['zona'];
                    $item->valoracion            = $row['valoracion'];
                    $item->rangoPrecio           = $row['rangoPrecio'];
                    $item->tipoComida            = $row['tipoComida'];                   
                    array_push($items,$item);
                }
                     return $items;
                }
            catch(PDOException $e){
                echo $e->getMessage();  
                return[];
            }
        }

        
        function getRestaurantescomidadesc(){
            $items = [];
            try{
            $query = $this->db->conectar()->query("SELECT * FROM restaurantes ORDER BY tipoComida DESC;");
                while($row = $query->fetch())
                {
                    $item = new Restaurante();
                    $item->idRestaurante     = $row['idRestaurante'];
                    $item->nombreRestaurante = $row['nombreRestaurante'];
                    $item->ciudad            = $row['ciudad'];
                    $item->zona              = $row['zona'];
                    $item->valoracion            = $row['valoracion'];
                    $item->rangoPrecio           = $row['rangoPrecio'];
                    $item->tipoComida            = $row['tipoComida'];                   
                    array_push($items,$item);
                }
                     return $items;
                }
            catch(PDOException $e){
                echo $e->getMessage();  
                return[];
            }
        }
    }