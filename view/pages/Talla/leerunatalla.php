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
    <th scope="col">Estado</th>
    <th scope="col">Activar/Desactivar</th>
    <th scope="col">EDITAR</th>
    </tr>
    </thead>
    <tbody>
    <?php $r = $this->model->ObtenerTalla($_REQUEST["idtalla"]) ?>                
        <tr>
            <th scope="row"><?php echo $r->idtalla; ?></th>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->estado == 0 ? 'Inactiva' : 'Activa'; ?></td>
            <td><a onclick="javascript:return confirm('¿Está seguro de esta decisión?')" href="?c=<?php echo base64_encode('Talla'); ?>&a=<?php echo base64_encode('CambiarEstado'); ?>&id=<?php echo base64_encode($r->idtalla); ?>&ne=<?php echo base64_encode($r->estado == 1 ? 0 : 1); ?>" title="Desactivar/Activar Talla"><i class="bi bi-calendar3-week" style="font-size: 1.5rem; color: black;"></i></a></td>
            <td><a href="?c=<?php echo base64_encode('Talla'); ?>&a=<?php echo base64_encode('ActualizarTalla'); ?>&idtalla=<?php echo base64_encode($r->idtalla).'&nombretalla='.base64_encode($r->nombre); ?>" title="Editar Talla"><i class="bi-pen-fill" style="font-size: 1.5rem; color: cornflowerblue;"></i></a></td>
        </tr>
    </tbody>
</table>
<div class="contrainer mt-3">
    <a href="?c=<?php echo base64_encode('Talla')?>" class="btn btn-primary" role="button">Ver Tabla de Datos</a>
</div>

</div> 