<div class="container">
    <h3 class="display-7 text-center mb-4 mt-3">Registrar un Cliente</h3>
    <form method="post" action="?c=<?php echo base64_encode('Cliente').'&a='.base64_encode('insertar')?>">
        <div class="input-group mb-2">
            <span class="input-group-text" id="basic-addon1">Nombres:</span>
            <input type="text" class="form-control" placeholder="Victor Hilario" aria-label="Nombre" aria-describedby="basic-addon1" name="nombrecliente">
        </div>
        <div class="input-group mb-2">
            <span class="input-group-text" id="basic-addon1">Apellidos:</span>
            <input type="text" class="form-control" placeholder="Solano Durán" aria-label="Nombre" aria-describedby="basic-addon1" name="apellidocliente">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email:</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="emailcliente">
        </div>
        <div class="input-group mb-2">
            <span class="input-group-text" id="basic-addon1">Teléfono:</span>
            <input type="text" class="form-control" placeholder="1234-5678" aria-label="Nombre" aria-describedby="basic-addon1" name="telefonocliente">
        </div>
        <div class="input-group mb-2">
            <span class="input-group-text" id="basic-addon1">Direccion:</span>
            <input type="text" class="form-control" placeholder="Col. remedios" aria-label="Nombre" aria-describedby="basic-addon1" name="direccioncliente">
        </div>
        <div class="input-group mb-2">
            <span class="input-group-text" id="basic-addon1">Sexo:</span>
            <select class="form-select" aria-label="Sexo" name="sexocliente">
                <option value="" selected disabled>Seleccione su sexo</option>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
            </select>
        </div>
        <div class="input-group mb-2">
            <span class="input-group-text" id="basic-addon1">Fecha de Nacimiento:</span>
            <input type="date" class="form-control" aria-label="Fecha de Nacimiento" aria-describedby="basic-addon1" name="fechanacimientocliente">
        </div>
        <select class="form-select mb-3" aria-label="Default select example" name="idusuarioregistro">
            <option value="" selected disabled>Usuario registro</option>
            <option value="1">Solano</option>
        </select>
        <input class="btn btn-primary mt-3" type="submit" value="Insertar">
    </form>
</div>
