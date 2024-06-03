<?php

    #iniciar sesion
    session_start();

    #conectarnos a la base de datos
    require_once 'model/Conexion.php';

    #controlador por primera vez
    $controller = 'Login';


    #verificar el controlador
    if (!isset($_REQUEST['c'])) {
        #call controller for default
        require_once 'controller/'.$controller.'Controller.php';
        $controller = $controller.'Controller';

        #instancia
        $controller = new $controller;

        #metodo index
        $controller->Index();
    } else {
        #Cuando c tiene valor
        #decodificar el controller
        $controller = base64_decode($_REQUEST['c']);
        #base64_decode($_REQUEST['a'])

        $accion = isset($_REQUEST['a']) ? base64_decode($_REQUEST['a']): 'Index';

        #call of controller
        require_once 'controller/'.$controller.'Controller.php';
        $controller = $controller.'Controller';

        #instancia
        $controller = new $controller;

        #call controller and method
        call_user_func(array($controller, $accion));
    }
    

?>