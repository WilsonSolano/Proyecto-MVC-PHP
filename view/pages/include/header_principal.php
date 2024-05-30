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
                <a class="nav-link fw-semibold fs-5 link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="?c=<?php echo base64_encode('Home')?>"> DAW </a>
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
                    <li><a class="dropdown-item" href="?c=<?php echo base64_encode('TipoUsuario')?>">Ver Datos</a></li>
                    <li><a class="dropdown-item" href="?c=<?php echo base64_encode('TipoUsuario').'& a='.base64_encode("buscarTipoUsuario")?>">Buscar un Tipo de Usuario</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fw-semibold fs-5 link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Usuarios</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?c=<?php echo base64_encode('Usuario').'& a='.base64_encode("insertarUsuario")?>">Crear Usuario</a></li>
                    <li><a class="dropdown-item" href="?c=<?php echo base64_encode('Usuario')?>">Leer Usuarios</a></li>
                    <li><a class="dropdown-item" href="?c=<?php echo base64_encode('Usuario').'& a='.base64_encode("actualizarUsuario")?>">Actualizar Usuario</a></li>
                    <li><a class="dropdown-item" href="?c=<?php echo base64_encode('Usuario').'& a='.base64_encode("actualizarClaveUsuario")?>">Actualizar clave de Usuario</a></li>
                    <li><a class="dropdown-item" href="?c=<?php echo base64_encode('Usuario').'& a='.base64_encode("actualizarPreguntaUsuario")?>">Actualizar pregunta de Usuario</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fw-semibold fs-5 link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Talla</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?c=<?php echo base64_encode('Talla').'& a='.base64_encode("InsertarTalla")?>">Crear Talla</a></li>
                    <li><a class="dropdown-item" href="?c=<?php echo base64_encode('Talla')?>">Leer Tallas</a></li>
                    <li><a class="dropdown-item" href="?c=<?php echo base64_encode('Talla').'& a='.base64_encode("actualizarEstadoTalla")?>">Actualizar Estado de Talla</a></li>
                    <li><a class="dropdown-item" href="?c=<?php echo base64_encode('Talla').'& a='.base64_encode("actualizarTalla")?>">Actualizar Talla</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fw-semibold fs-5 link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Color</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?c=<?php echo base64_encode('Color')?>.'& a='.base64_encode("CrearColor")?>Crear Color</a></li>
                    <li><a class="dropdown-item" href="?c=<?php echo base64_encode('Color')?>">Leer Colores</a></li>
                    <li><a class="dropdown-item" href="?c=<?php echo base64_encode('Color')?>.'& a='.base64_encode("ActualizarColor")?>Actualizar Color</a></li>
                    <li><a class="dropdown-item" href="?c=<?php echo base64_encode('Color')?>.'& a='.base64_encode("EliminarColor")?>Eliminar Color</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fw-semibold fs-5 link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">PreguntaSecreta</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?c=<?php echo base64_encode('PreguntaSecreta')?>.'& a='.base64_encode("CrearPreguntaSecreta")?>Crear Pregunta Secreta</a></li>
                    <li><a class="dropdown-item" href="?c=<?php echo base64_encode('PreguntaSecreta')?>">Leer Preguntas Secretas</a></li>
                    <li><a class="dropdown-item" href="?c=<?php echo base64_encode('PreguntaSecreta')?>.'& a='.base64_encode("ActualizarPreguntaSecreta")?>Actualizar Pregunta Secreta</a></li>
                    <li><a class="dropdown-item" href="?c=<?php echo base64_encode('PreguntaSecreta')?>.'& a='.base64_encode("EliminarPreguntaSecreta")?>Eliminar Pregunta Secreta</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fw-semibold fs-5 link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Cliente</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?c=<?php echo base64_encode('Cliente')?>.'& a='.base64_encode("CrearCliente")?>Crear Cliente</a></li>
                    <li><a class="dropdown-item" href="?c=<?php echo base64_encode('Cliente')?>">Leer Clientes</a></li>
                    <li><a class="dropdown-item" href="?c=<?php echo base64_encode('Cliente')?>.'& a='.base64_encode("ActualizarCliente")?>Actualizar Cliente</a></li>
                    <li><a class="dropdown-item" href="?c=<?php echo base64_encode('Cliente')?>.'& a='.base64_encode("EliminarCliente")?>Eliminar Cliente</a></li>
                </ul>
            </li>
        </ul>

    </div>
