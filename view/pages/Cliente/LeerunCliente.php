<div class="container">
<h3 class="display-7 text-center mb-4 mt-3">Listar Clientes Activos</h3>
<form action="?c=<?php echo base64_encode('Cliente').'&a='.base64_encode('LeerunCliente')?>" method="post">
        <div class="form-floating mb-2">
            <input type="text" class="form-control" id="floatingInput" placeholder="123" name="idusuario">
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
        <?php $r = $this->model->ObtenerCliente($_REQUEST["idcliente"]) ?>                
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
            </tr>
    </tbody>
</table>
</div>