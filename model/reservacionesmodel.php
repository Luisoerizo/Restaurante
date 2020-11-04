<?php
        include_once 'model/restaurante.php';
        class ReservacionesModel extends Model {
            public function __construct()
            {
                parent::__construct();
            }
            
            public function getReservaciones(){
                $items = [];

                try{
                    $query = $this->db->conectar()->query("SELECT idReservacion, nombreCliente, nombreRestaurante, personas, fecha,
                     correo FROM reservaciones INNER JOIN restaurantes WHERE restaurantes.idRestaurante = reservaciones.idRestaurante;");
                    while($row = $query->fetch()){
                        $item = new Reservacion();
                        $item->idReservacion = $row['idReservacion'];
                        $item->nombreCliente = $row['nombreCliente'];
                        $item->nombreRestaurante = $row['nombreRestaurante'];
                        $item->personas      = $row['personas'];
                        $item->fecha         = $row['fecha'];
                        $item->correo        = $row['correo'];
                                            
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
    ?>

