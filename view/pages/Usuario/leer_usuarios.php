<!--Header-->
<div class="container">
<h3 class="display-7 text-center mb-4 mt-3">Listar Usuarios Activos</h3>
<table class="table">
    <thead>
    <tr>
        <th scope="col">ID Usuario</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Telefono</th>
        <th scope="col">Email</th>
        <th scope="col">Tipo de Usuario</th>
        <th scope="col">DESACTIVAR</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->ListarUsuariosActivos() as $r): ?>                
        <tr>
            <th scope="row"><?php echo $r->idusuario; ?></th>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->apellido; ?></td>
            <td><?php echo $r->telefono; ?></td>
            <td><?php echo $r->email; ?></td>
            <td><?php echo $r->tipo; ?></td>
            <td><a onclick="javascript:return confirm('¿Está seguro que desea desactivar este Usuario?')" href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('CambiarEstado'); ?>&id=<?php echo base64_encode($r->idusuario); ?>&ne=<?php echo base64_encode('0'); ?>" title="Desactivar Usuario"><i class="bi bi-clipboard2-x-fill" style="font-size: 1.5rem; color: red;"></i></a></td>
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
            <td><a onclick="javascript:return confirm('¿Está seguro que desea activar este Usuario?')" href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('CambiarEstado'); ?>&id=<?php echo base64_encode($r->idusuario); ?>&ne=<?php echo base64_encode('1'); ?>" title="Activar Usuario"><i class="bi-check-circle-fill" style="font-size: 1.5rem; color: green;"></i></a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>
<!--Footer-->