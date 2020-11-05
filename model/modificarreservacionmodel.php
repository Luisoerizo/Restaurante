<?php
        include_once 'model/restaurante.php';

        class ModificarReservacionModel extends Model{
            public function __construct()
            {
                parent::__construct();
            }

            function buscarReservaciones($palabra){
                $items = [];
              $query = $this->db->conectar()->prepare("SELECT idReservacion, nombreCliente, nombreRestaurante, personas, fecha,
              correo FROM reservaciones INNER JOIN restaurantes ON restaurantes.idRestaurante = reservaciones.idRestaurante WHERE correo LIKE :palabra");
              try{
                  $query->execute(['palabra'=>'%'.$palabra.'%']);
                  while($row = $query->fetch()){
                    $item = new Reservacion();
                    $item->idReservacion         = $row['idReservacion'];
                    $item->nombreCliente         = $row['nombreCliente'];
                    $item->nombreRestaurante     = $row['nombreRestaurante'];
                    $item->personas              = $row['personas'];
                    $item->fecha                 = $row['fecha'];
                    $item->correo                = $row['correo'];
                                        
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