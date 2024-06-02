<div class="container">
    <form action="?c=<?php echo base64_encode('Talla').'&a='.base64_encode('insertar')?>" method="post">
        <h3 class="display-7 text-center mb-4 mt-3">Registrar una Talla</h3>
        <div class="input-group mb-5">
            <span class="input-group-text" id="basic-addon1">Nombre: </span>
            <input name="nombre" type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1">
            <input class="btn btn-primary" type="submit" value="Insertar">
        </div>  
    </form>

    <div class="contrainer mt-3">
        <a href="?c=<?php echo base64_encode('Talla')?>" class="btn btn-primary" role="button">Ver Tabla de Datos</a>
    </div>

</div>
