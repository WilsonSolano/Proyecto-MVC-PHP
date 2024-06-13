    <div class="container text-center mt-3">
            <h1 class="display-4">PROYECTO FINAL - DESARROLLO WEB</h1>
            <h2 class="display-6">---------ACTUALIZAR CLIENTES---------</h2>
        </div>    
    </header>

    <div class="container">
    <h3 class="display-7 text-center mb-4 mt-3">Actualizar Cliente</h3>
    <form method="post" action="?c=<?php echo base64_encode('Cliente').'&a='.base64_encode('actualizarDatosCliente')?>">
        <div class="input-group mb-2">
            <span class="input-group-text" id="basic-addon1">ID Cliente:</span>
            <input type="text" class="form-control" placeholder="1234" aria-label="ID Cliente" aria-describedby="basic-addon1" name="idcliente" required value="<?php echo base64_decode($_REQUEST["idcliente"])?>" readonly>
        </div>
        <div class="input-group mb-2">
            <span class="input-group-text" id="basic-addon1">Nombres:</span>
            <input type="text" class="form-control" placeholder="Victor Hilario" aria-label="Nombre" aria-describedby="basic-addon1" name="nombre" required value="<?php echo base64_decode($_REQUEST["nombre"])?>">
        </div>
        <div class="input-group mb-2">
            <span class="input-group-text" id="basic-addon1">Apellidos:</span>
            <input type="text" class="form-control" placeholder="Solano Durán" aria-label="Apellido" aria-describedby="basic-addon1" name="apellido" required value="<?php echo base64_decode($_REQUEST["apellido"])?>">
        </div>
        <div class="input-group mb-2">
            <span class="input-group-text" id="basic-addon1">Teléfono:</span>
            <input type="text" class="form-control" placeholder="1234-5678" aria-label="Teléfono" aria-describedby="basic-addon1" name="telefono" required value="<?php echo base64_decode($_REQUEST["telefono"])?>">
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección:</label>
            <input type="text" class="form-control" id="direccion" placeholder="Calle Principal #123" name="direccion" required value="<?php echo base64_decode($_REQUEST["direccion"])?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email:</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" required value="<?php echo base64_decode($_REQUEST["email"])?>">
        </div>
        <div class="input-group mb-2">
            <span class="input-group-text" id="basic-addon1">Sexo:</span>
            <select class="form-select" aria-label="Sexo" name="sexo" required>
                <option value="" selected disabled>Seleccione su sexo</option>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
            </select>
        </div>
        <div class="input-group mb-2">
            <span class="input-group-text" id="basic-addon1">Fecha de Nacimiento:</span>
            <input type="date" class="form-control" aria-label="Fecha de Nacimiento" aria-describedby="basic-addon1" name="fechanacimiento" required>
        </div>
        <input class="btn btn-primary mt-3" type="submit" value="Actualizar">
    </form>
</div>
    </main>