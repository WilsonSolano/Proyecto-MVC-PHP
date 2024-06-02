<form action="?c=<?php echo base64_encode('TallaCliente').'&a='.base64_encode('eliminarTallaClienteDB')?>" method="post">
    <div class="container">
        <h3 class="display-7 text-center mb-4 mt-3">Eliminar una Talla Cliente</h3>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">ID de la Talla: </span>
            <input type="text" class="form-control" placeholder="12345" aria-label="Nombre" aria-describedby="basic-addon1" name="idtallaclienteF" value="<?php echo isset($_REQUEST["idtallaclienteF"]) ? $_REQUEST["idtallaclienteF"]: 0 ?>">
        </div>
            <input class="btn btn-danger" type="submit" value="Eliminar" onclick="javascript:return confirm('¿Está seguro que desea eliminar?')">
            <a href="?c=<?php echo base64_encode('TallaCliente')?>" class="btn btn-primary" role="button">Ver Tabla de Datos</a>
        </div>
    </div>
</form>