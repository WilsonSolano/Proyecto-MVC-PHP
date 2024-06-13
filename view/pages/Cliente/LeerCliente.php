<!--Header-->
<div class="container">
<h3 class="display-7 text-center mb-4 mt-3">Listar Usuarios Activos</h3>
<form action="?c=<?php echo base64_encode('Cliente').'&a='.base64_encode('LeerunCliente')?>" method="post">
        <div class="form-floating mb-2">
            <input type="text" class="form-control" id="floatingInput" placeholder="123" name="idcliente">
            <label for="floatingInput">Buscar un cliente por su ID</label>
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
</form>
<table class="table">
    <thead>
    <tr>
        <th scope="col">ID Cliente</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Telefono</th>
        <th scope="col">Direccion</th>
        <th scope="col">Email</th>
        <th scope="col">Sexo</th>
        <th scope="col">Fecha de nacimiento</th>
        <th scope="col">Estado</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->ListarClientesActivos() as $r): ?>                
        <tr>
        <th scope="row"><?php echo $r->idcliente; ?></th>
                <td><?php echo $r->nombre; ?></td>
                <td><?php echo $r->apellido; ?></td>
                <td><?php echo $r->telefono; ?></td>
                <td><?php echo $r->email; ?></td>
                <td><?php echo $r->direccion;?></td>
                <td><?php echo $r->Sexo;?></td>
                <td><?php echo $r->fechanacimiento?>
                <td><?php echo $r->estado == 1 ? "Activo" : "Inactivo"; ?></td>
                <td><?php echo $r->tipo; ?></td>
            <td><a onclick="javascript:return confirm('¿Está seguro que desea desactivar este cliente?')" href="?c=<?php echo base64_encode('cliente'); ?>&a=<?php echo base64_encode('CambiarEstado'); ?>&id=<?php echo base64_encode($r->idcliente); ?>&ne=<?php echo base64_encode('0'); ?>" title="Desactivar Usuario"><i class="bi bi-clipboard2-x-fill" style="font-size: 1.5rem; color: red;"></i></a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>            

<div class="container">
<h3 class="display-7 text-center mb-4 mt-3">Listar Usuarios Inactivos</h3>
<table class="table">
    <thead>
    <tr>
        <th scope="col">ID Usuario</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Telefono</th>
        <th scope="col">Email</th>
        <th scope="col">Tipo de Usuario</th>
        <th scope="col">ACTIVAR</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->ListarUsuariosInactivos() as $r): ?>                
        <tr>
            <th scope="row"><?php echo $r->idusuario; ?></th>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->apellido; ?></td>
            <td><?php echo $r->telefono; ?></td>
            <td><?php echo $r->email; ?></td>
            <td><?php echo $r->tipo; ?></td>
            <td><a onclick="javascript:return confirm('¿Está seguro que desea desactivar este cliente?')" href="?c=<?php echo base64_encode('cliente'); ?>&a=<?php echo base64_encode('CambiarEstado'); ?>&id=<?php echo base64_encode($r->idcliente); ?>&ne=<?php echo base64_encode('1'); ?>" title="Activar Usuario"><i class="bi bi-clipboard2-x-fill" style="font-size: 1.5rem; color: red;"></i></a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>
<!--Footer-->