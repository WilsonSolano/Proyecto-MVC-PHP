<div class="container">
    <form action="?c=<?php echo base64_encode("Usuario").'&a='.base64_encode('actualizarClaveUsuarioDB')?>" method="post">
            <h3 class="display-7 text-center mb-4 mt-3">Actualizar Clave Usuario</h3>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">ID Usuario:</span>
                <input name="idusuario" type="number" class="form-control" name="idusario" placeholder="Ingrese el ID del usuario" aria-label="ID Usuario" aria-describedby="basic-addon1" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nueva Contraseña:</span>
                <input name="newcontrasena" type="password" class="form-control" name="clave" placeholder="Ingrese la nueva contraseña" aria-label="Nueva Contraseña" aria-describedby="basic-addon1" required>
            </div>
            <input class="btn btn-primary" type="submit" value="Actualizar Contraseña">
    </form>
</div>
