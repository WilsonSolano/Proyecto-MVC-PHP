<div class="container">
    <form action="?c=<?php echo base64_encode("Usuario").'&a='.base64_encode('insertar')?>" method="post">
            <h3 class="display-7 text-center mb-4 mt-3">Registrar un Usuario</h3>

            <div class="input-group mb-2">
                <span class="input-group-text" id="basic-addon1">Nombres:</span>
                <input name="nombreusuario" type="text" class="form-control" placeholder="Victor Hilario" aria-label="Nombre" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-2">
                <span class="input-group-text" id="basic-addon1">Apellidos:</span>
                <input name="apellidousuario" type="text" class="form-control" placeholder="Solano Durán" aria-label="Nombre" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-2">
                <span class="input-group-text" id="basic-addon1">Telefono:</span>
                <input name="telefonousuario" type="text" class="form-control" placeholder="1234-5678" aria-label="Nombre" aria-describedby="basic-addon1">
            </div>            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email:</label>
                <input name="emailusuario" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Clave</label>
                </div>
                <div class="col-auto">
                    <input name="claveusuario" type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">
                        Debe tener entre 8 y 20 caracteres.
                    </span>
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">ID pregunta Secreta</label>
                <input name="idpreguntasecretausuario" type="number" class="form-control" id="exampleFormControlInput1" placeholder="123">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Respuesta a pregunta secreta</label>
                <textarea name="respuestausuario" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <select name="idtipousuario" class="form-select" aria-label="Default select example">
                <option value selected disabled>Tipo de Usuario</option>
                <option value="1">Administrador</option>
                <option value="2">Vendedor</option>
            </select>

            <input class="btn btn-primary mt-3" type="submit" value="Insertar">

    </form>
</div>
