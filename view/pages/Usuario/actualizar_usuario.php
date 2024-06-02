<div class="container">
    <form action="?c=<?php echo base64_encode('Usuario').'&a='.base64_encode('actualizarDatosUsuario')?>" method="post">
        <h3 class="display-7 text-center mb-4 mt-3">Actualizar Usuario</h3>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">ID Usuario:</span>
            <input name="idusuario" type="number" class="form-control" name="idusario" placeholder="Ingrese el ID del usuario" aria-label="ID Usuario" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nombre:</span>
            <input name="nombreusuario" type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre" aria-label="Nombre" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Apellido:</span>
            <input name="apellidousuario" type="text" class="form-control" name="apellido" placeholder="Ingrese el apellido" aria-label="Apellido" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Teléfono:</span>
            <input name="telefonousuario" type="tel" class="form-control" name="telefono" placeholder="Ingrese el teléfono" aria-label="Teléfono" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Email:</span>
            <input name="emailusuario" type="email" class="form-control" name="email" placeholder="Ingrese el email" aria-label="Email" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-3">        
            <select class="form-select" aria-label="Default select example" name="idtipousuario">
                    <option value selected disabled>Tipo de Usuario</option>
                    <option value="1">Administrador</option>
                    <option value="2">Vendedor</option>
            </select>
        </div>
        <div class="d-grid gap-2">
            <input class="btn btn-primary" type="submit" value="Actualizar">
        </div>
    </form>
</div>
