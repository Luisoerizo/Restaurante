<?php
        include_once 'model/restaurante.php';
        class ReservarModel extends Model {
            public function __construct()
            {
                parent::__construct();
            }
            
            public function insert($datos) {
                try{
                    $query = $this->db->conectar()->prepare("INSERT INTO reservaciones (nombreCliente, personas, fecha, correo,
                    idRestaurante) VALUES (:nombreCliente, :personas, :fecha, :correo, :idRestaurante)");
                    
                    $query->execute([
                    'nombreCliente' => $datos['nombreCliente'],
                    'personas'      => $datos['personas'],
                    'fecha'         => $datos['fecha'],
                    'correo'        => $datos['correo'],
                    'idRestaurante' => $datos['idRestaurante'],
                    ]);
                    return true;
                }
                catch(PDOException $e){
                    return false;
                }

            }
            
        }
    ?>
