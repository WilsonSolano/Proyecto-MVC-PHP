<div class="container">
<h3 class="display-7 text-center mb-4 mt-3">Listar Usuarios Activos</h3>
<form action="?c=<?php echo base64_encode('Usuario').'&a='.base64_encode('leerUnUsuario')?>" method="post">
        <div class="form-floating mb-2">
            <input type="text" class="form-control" id="floatingInput" placeholder="123" name="idusuario">
            <label for="floatingInput">Buscar un usuario por su ID</label>
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
</form>
<table class="table">
    <thead>
    <tr>
        <th scope="col">ID Usuario</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Telefono</th>
        <th scope="col">Email</th>
        <th scope="col">Estado</th>
        <th scope="col">Tipo de Usuario</th>
        <th scope="col">Clave</th>
        <th scope="col">ID pregunta secreta</th>
        <th scope="col">Respuesta</th>
        <th scope="col">Pregunta</th>
    </tr>
    </thead>
    <tbody>
        <?php $r = $this->model->ObtenerUsuario($_REQUEST["idusuario"]) ?>                
            <tr>
                <th scope="row"><?php echo $r->idusuario; ?></th>
                <td><?php echo $r->nombre; ?></td>
                <td><?php echo $r->apellido; ?></td>
                <td><?php echo $r->telefono; ?></td>
                <td><?php echo $r->email; ?></td>
                <td><?php echo $r->estado == 1 ? "Activo" : "Inactivo"; ?></td>
                <td><?php echo $r->tipo; ?></td>
                <td><?php echo $r->clave; ?></td>
                <td><?php echo $r->idpreguntasecreta; ?></td>
                <td><?php echo $r->respuestasecreta; ?></td>
                <td><?php echo $r->pregunta; ?></td>
            </tr>
    </tbody>
</table>
</div>