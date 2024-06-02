<div class="container">
<h3 class="display-7 text-center mb-4 mt-3">Registrar una Talla de cliente</h3>
    <form action="?c=<?php echo base64_encode('TallaCliente').'&a='.base64_encode('insertarTallaCliente')?>" method="post">
        <div class="input-group mb-2">
            <span class="input-group-text" id="basic-addon1">ID de la Talla:</span>
            <input type="number" class="form-control" placeholder="1234" aria-label="Nombre" aria-describedby="basic-addon1" name="idtalla">
        </div>
        <div class="input-group mb-2">
            <span class="input-group-text" id="basic-addon1">ID del Cliente:</span>
            <input type="number" class="form-control" placeholder="1234" aria-label="Nombre" aria-describedby="basic-addon1" name="idcliente">
        </div>
        <div class="input-group mb-2">
            <span class="input-group-text" id="basic-addon1">Detalle:</span>
            <input type="text" class="form-control" placeholder="Muchas cosas interesantes" aria-label="Nombre" aria-describedby="basic-addon1" name="detalle">
            <input class="btn btn-primary" type="submit" value="Insertar" onclick="javascript:return confirm('¿Está seguro de insertar los datos?')">
        </div>
    </form>

    <div class="contrainer mt-3">
        <a href="?c=<?php echo base64_encode('TallaCliente')?>" class="btn btn-primary" role="button">Ver Tabla de Datos</a>
    </div>
</div>
