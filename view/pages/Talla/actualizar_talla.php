    <!--Header-->
<div class="container">
    <form action="?c=<?php echo base64_encode('Talla').'&a='.base64_encode('ActualizarTallaDB')?>" method="post">
        <h3 class="display-7 text-center mb-4 mt-3">Actualizar una Talla</h3>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">ID de la Talla: </span>
            <input name="idtallaActua" type="number" class="form-control" placeholder="12345" aria-label="Nombre" aria-describedby="basic-addon1" value="<?php echo base64_decode($_REQUEST["idtalla"])?>">
        </div>
        <div class="input-group mb-5">
            <span class="input-group-text" id="basic-addon1">Nombre: </span>
            <input name="nombreActua" type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1" value="<?php echo base64_decode($_REQUEST["nombretalla"])?>">
            <input class="btn btn-primary" type="submit" value="Actualizar">
        </div>
    </form>
</div>
    <!--Foother-->
