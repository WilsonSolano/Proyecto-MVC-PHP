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
        <th scope="col">Email</th>
        <th scope="col">Direccion</th>
        <th scope="col">Sexo</th>
        <th scope="col">Fecha de nacimiento</th>
        <th scope="col">Edad</th>
        <th scope="col">Id Usuario Registro</th>
        <th scope="col">Registrado por</th>
        <th scope="col">Estado</th>
        <th scope="col">Editar</th>
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
                <td><?php echo $r->sexo;?></td>
                <td><?php echo $r->fechanacimiento?>
                <td><?php echo $r->edad; ?></td>
                <td><?php echo $r->idusuarioregistro; ?></td>
                <td><?php echo $r->registradopor; ?></td>
            <td><a onclick="javascript:return confirm('¿Está seguro que desea desactivar este cliente?')" href="?c=<?php echo base64_encode('cliente'); ?>&a=<?php echo base64_encode('CambiarEstado'); ?>&id=<?php echo base64_encode($r->idcliente); ?>&ne=<?php echo base64_encode('0'); ?>" title="Desactivar Usuario"><i class="bi bi-clipboard2-x-fill" style="font-size: 1.5rem; color: red;"></i></a></td>
            <td><a href="?c=<?php echo base64_encode('Cliente'); ?>&a=<?php echo base64_encode('ActualizarCliente'); ?>&idcliente=<?php echo base64_encode($r->idcliente).'&nombre='.base64_encode($r->nombre).'&apellido='.base64_encode($r->apellido).'&telefono='.base64_encode($r->telefono).'&direccion='.base64_encode($r->direccion).'&email='.base64_encode($r->email).'&sexo='.base64_encode($r->sexo).'&fechanacimiento='.base64_encode($r->fechanacimiento); ?>" title="Editar Cliente"><i class="bi-pen-fill" style="font-size: 1.5rem; color: cornflowerblue;"></i></a></td>    
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
        <th scope="col">ID Cliente</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Telefono</th>
        <th scope="col">Email</th>
        <th scope="col">Direccion</th>
        <th scope="col">Sexo</th>
        <th scope="col">Fecha de nacimiento</th>
        <th scope="col">Edad</th>
        <th scope="col">Id Usuario Registro</th>
        <th scope="col">Registrado por</th>
        <th scope="col">Estado</th>
        <th scope="col">Editar</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->ListarClientesInactivos() as $r): ?>                
        <tr>
        <th scope="row"><?php echo $r->idcliente; ?></th>
                <td><?php echo $r->nombre; ?></td>
                <td><?php echo $r->apellido; ?></td>
                <td><?php echo $r->telefono; ?></td>
                <td><?php echo $r->email; ?></td>
                <td><?php echo $r->direccion;?></td>
                <td><?php echo $r->sexo;?></td>
                <td><?php echo $r->fechanacimiento?>
                <td><?php echo $r->edad; ?></td>
                <td><?php echo $r->idusuarioregistro; ?></td>
                <td><?php echo $r->registradopor; ?></td>
                <td><a onclick="javascript:return confirm('¿Está seguro que desea activar este Cliente?')" href="?c=<?php echo base64_encode('Cliente'); ?>&a=<?php echo base64_encode('CambiarEstado'); ?>&id=<?php echo base64_encode($r->idcliente); ?>&ne=<?php echo base64_encode('1'); ?>" title="Activar Cliente"><i class="bi-check-circle-fill" style="font-size: 1.5rem; color: green;"></i></a></td>
                <td><a href="?c=<?php echo base64_encode('Cliente'); ?>&a=<?php echo base64_encode('ActualizarCliente'); ?>&idcliente=<?php echo base64_encode($r->idcliente).'&nombre='.base64_encode($r->nombre).'&apellido='.base64_encode($r->apellido).'&telefono='.base64_encode($r->telefono).'&direccion='.base64_encode($r->direccion).'&email='.base64_encode($r->email).'&sexo='.base64_encode($r->sexo).'&fechanacimiento='.base64_encode($r->fechanacimiento); ?>" title="Editar Cliente"><i class="bi-pen-fill" style="font-size: 1.5rem; color: cornflowerblue;"></i></a></td>    
            </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>
<!--Footer-->