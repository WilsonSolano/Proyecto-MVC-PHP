<div class="container">
<h3 class="display-7 text-center mb-4 mt-3">Listar Tallas Activas</h3>
<form action="?c=<?php echo base64_encode('Talla').'&a='.base64_encode('leerUnaTalla')?>" method="post">
        <div class="form-floating mb-2">
            <input type="text" class="form-control" id="floatingInput" placeholder="123" name="idtalla">
            <label for="floatingInput">Buscar una Talla por su ID</label>
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
</form>
<table class="table">
    <thead>
    <tr>
    <th scope="col">ID Talla</th>
    <th scope="col">Nombre</th>
    <th scope="col">DESACTIVAR</th>
    <th scope="col">EDITAR</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->ListarTallasActivas() as $r): ?>                
        <tr>
            <th scope="row"><?php echo $r->idtalla; ?></th>
            <td><?php echo $r->nombre; ?></td>
            <td><a onclick="javascript:return confirm('¿Está seguro que desea desactivar esta Talla?')" href="?c=<?php echo base64_encode('Talla'); ?>&a=<?php echo base64_encode('CambiarEstado'); ?>&id=<?php echo base64_encode($r->idtalla); ?>&ne=<?php echo base64_encode('0'); ?>" title="Desactivar Talla"><i class="bi bi-clipboard2-x-fill" style="font-size: 1.5rem; color: red;"></i></a></td>
            <td><a href="?c=<?php echo base64_encode('Talla'); ?>&a=<?php echo base64_encode('ActualizarTalla'); ?>&idtalla=<?php echo base64_encode($r->idtalla).'&nombretalla='.base64_encode($r->nombre); ?>" title="Editar Talla"><i class="bi-pen-fill" style="font-size: 1.5rem; color: cornflowerblue;"></i></a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>            

<div class="container">
<h3 class="display-7 text-center mb-4 mt-3">Listar Tallas Inactivos</h3>
<table class="table">
    <thead>
    <tr>
    <th scope="col">ID Talla</th>
    <th scope="col">Nombre</th>
    <th scope="col">ACTIVAR</th>
    <th scope="col">EDITAR</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->ListarTallasInactivas() as $r): ?>                
        <tr>
            <th scope="row"><?php echo $r->idtalla; ?></th>
            <td><?php echo $r->nombre; ?></td>
            <td><a onclick="javascript:return confirm('¿Está seguro que desea activar esta Talla?')" href="?c=<?php echo base64_encode('Talla'); ?>&a=<?php echo base64_encode('CambiarEstado'); ?>&id=<?php echo base64_encode($r->idtalla); ?>&ne=<?php echo base64_encode('1'); ?>" title="Desactivar Talla"><i class="bi-check-circle-fill" style="font-size: 1.5rem; color: green;"></i></a></td>
            <td><a href="?c=<?php echo base64_encode('Talla'); ?>&a=<?php echo base64_encode('ActualizarTalla'); ?>&idtalla=<?php echo base64_encode($r->idtalla).'&nombretalla='.base64_encode($r->nombre); ?>" title="Editar Talla"><i class="bi-pen-fill" style="font-size: 1.5rem; color: cornflowerblue;"></i></a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table></div>

<!--Footer-->