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
                    $item->zona          = $row['zona'];
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
    }