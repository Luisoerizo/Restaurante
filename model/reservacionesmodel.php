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
                        $item->idReservacion     = $row['idReservacion'];
                        $item->nombreCliente     = $row['nombreCliente'];
                        $item->nombreRestaurante = $row['nombreRestaurante'];
                        $item->personas          = $row['personas'];
                        $item->fecha             = $row['fecha'];
                        $item->correo            = $row['correo'];
                                            
                        array_push($items,$item);
                        
                         }
              
                         return $items;
    
                    }
                catch(PDOException $e){
                    echo $e->getMessage();  
                    return[];
                }

            }

            function getById($id){
                $item = new Reservacion();
                $query = $this->db->conectar()->prepare("SELECT * FROM reservaciones WHERE idReservacion =:idReservacion");
                try{
                    $query->execute(['idReservacion' => $id]);
                    while($row = $query->fetch()){
                        $item->idReservacion         = $row['idReservacion'];
                        $item->nombreCliente         = $row['nombreCliente'];
                        $item->personas              = $row['personas'];
                        $item->fecha                 = $row['fecha'];
                        $item->correo                = $row['correo'];
                        $item->idRestaurante         = $row['idRestaurante'];
                    }
                    return $item;
                }
                catch(PDOException $e){
                    return null;
                }
            }

            function update($item){
                $query = $this->db->conectar()->prepare("UPDATE reservaciones SET 
                nombreCliente = :nombreCliente,
                personas = :personas,
                fecha = :fecha,
                correo = :correo,
                idRestaurante = :idRestaurante WHERE idReservacion = :idReservacion");
                try{
                    $query->execute([
                        'idReservacion' => $item['idReservacion'],
                        'nombreCliente' => $item['nombreCliente'],
                        'personas'      => $item['personas'],
                        'fecha'         => $item['fecha'],
                        'correo'        => $item['correo'],
                        'idRestaurante' => $item['idRestaurante']
                    ]);
                    return true;
                    echo 'DATOS ACTUALIZADOS';
                }
                catch(PDOException $e){
                    return false;
                }
            }

            function delete($id){
                $query = $this->db->conectar()->prepare("DELETE FROM reservaciones WHERE idReservacion =:id");
                try{
                    $query->execute([
                        'id' => $id
                    ]);
                    return true;
                }
                catch(PDOException $e){
                    return false;
                }
              }
    

        }
    

