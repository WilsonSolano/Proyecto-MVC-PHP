<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="container">
            <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link fw-semibold fs-5 link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="#">Tallas</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fw-semibold fs-5 link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Talla Clientes</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?c=<?php echo base64_encode('TallaCliente')?>">Ver Datos</a></li>
                    <li><a class="dropdown-item" href="?c=<?php echo base64_encode('TallaCliente').'& a='.base64_encode("insertar")?>">Insertar nueva Talla CLiente</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fw-semibold fs-5 link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Tipos de Usuario</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Crear Tipo de Usuario</a></li>
                    <li><a class="dropdown-item" href="#">Leer Tipos de Usuario</a></li>
                    <li><a class="dropdown-item" href="#">Actualizar Tipo de Usuario</a></li>
                    <li><a class="dropdown-item" href="#">Eliminar Tipo de Usuario</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fw-semibold fs-5 link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Usuarios</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Crear Usuario</a></li>
                    <li><a class="dropdown-item" href="#">Leer Usuarios</a></li>
                    <li><a class="dropdown-item" href="#">Actualizar Usuario</a></li>
                    <li><a class="dropdown-item" href="#">Eliminar Usuario</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fw-semibold fs-5 link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Cliente</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Crear Cliente</a></li>
                    <li><a class="dropdown-item" href="#">Leer Clientes</a></li>
                    <li><a class="dropdown-item" href="#">Actualizar Cliente</a></li>
                    <li><a class="dropdown-item" href="#">Eliminar Cliente</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fw-semibold fs-5 link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Color</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Crear Color</a></li>
                    <li><a class="dropdown-item" href="#">Leer Colores</a></li>
                    <li><a class="dropdown-item" href="#">Actualizar Color</a></li>
                    <li><a class="dropdown-item" href="#">Eliminar Color</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fw-semibold fs-5 link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">PreguntaSecreta</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Crear Pregunta Secreta</a></li>
                    <li><a class="dropdown-item" href="#">Leer Preguntas Secretas</a></li>
                    <li><a class="dropdown-item" href="#">Actualizar Pregunta Secreta</a></li>
                    <li><a class="dropdown-item" href="#">Eliminar Pregunta Secreta</a></li>
                </ul>
            </li>
        </ul>

    </div>
