<div class="container text-center mt-3">
            <h1 class="display-4">PROYECTO FINAL - DESARROLLO WEB</h1>
            <h2 class="display-6">---------ACTUALIZAR COLOR---------</h2>
        </div>    
    </header>
    <form action="?c=<?php echo base64_encode('Color').'&a='.base64_encode('ActualizarColorDB')?>" method="post">
        <main class="container ml-1 mr-5 mt-4 border border-success">
            <h3 class="display-7 text-center mb-4 mt-3">Actualizar un Color</h3>

    <main class="container ml-1 mr-5 mt-4 border border-success">
        <h3 class="display-7 text-center mb-4 mt-3">Actualizar un Color</h3>
<form action="?c=<?php echo base64_encode('Color').'&a='.base64_encode('ActualizarColorDB')?>" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">ID Color: </span>
            <input name="idcolor" type="number" class="form-control" placeholder="12345" aria-label="Nombre" aria-describedby="basic-addon1" value="<?php echo base64_decode($_REQUEST["idcolor"])?>" readonly>
        </div>
        <div class="input-group mb-5">
            <span class="input-group-text" id="basic-addon1">Nombre: </span>
            <input name="upNombre" type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1" value="<?php echo base64_decode($_REQUEST["nombre"])?>">
            <input class="btn btn-primary" type="submit" value="Actualizar">
        </div>
</form>

    </main>
