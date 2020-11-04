<?php
require_once 'controller/errores.php';

class App{

    function __construct(){
        //echo "<p>Nueva app</p>";

        $url = isset($_GET['url']) ? $_GET['url']: null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        // cuando se ingresa sin definir controlador
        if(empty($url[0])){
            $archivoController = 'controller/index.php';
            require_once $archivoController;
            $controller = new Index();
            $controller->loadModel('index');
            $controller->render();
            return false;
        }
        $archivoController = 'controller/' . $url[0] . '.php';

        /* if(file_exists($archivoController)){
            require_once $archivoController;

            // inicializar controlador
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            // si hay un método que se requiere cargar
            if(isset($url[1])){
                $controller->{$url[1]}();
            }else{
                $controller->render();
            }
        }else{
            $controller = new Errores();
        } */

        if(file_exists($archivoController)){
            require_once $archivoController;

            //Inicializar el controlador
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            //numero de elementos del arreglo
            $nparam = sizeof($url);

            if($nparam > 1){
                if($nparam > 2){
                    $param = [];
                    for($i = 2; $i<$nparam; $i++){
                        array_push($param, $url[$i]);
                    }
                    $controller->{$url[1]}($param);
                }else{
                    $controller->{$url[1]}();
                }
            }else{
                $controller->render();
            }
        }else{
            $controller = new Errores();
        }
    }
}

?>