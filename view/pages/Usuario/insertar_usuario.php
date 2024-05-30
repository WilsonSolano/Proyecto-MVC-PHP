<div class="container">
            <h3 class="display-7 text-center mb-4 mt-3">Registrar un Cliente</h3>

            <div class="input-group mb-2">
                <span class="input-group-text" id="basic-addon1">Nombres:</span>
                <input type="text" class="form-control" placeholder="Victor Hilario" aria-label="Nombre" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-2">
                <span class="input-group-text" id="basic-addon1">Apellidos:</span>
                <input type="text" class="form-control" placeholder="Solano Durán" aria-label="Nombre" aria-describedby="basic-addon1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email:</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="input-group mb-2">
                <span class="input-group-text" id="basic-addon1">Telefono:</span>
                <input type="text" class="form-control" placeholder="1234-5678" aria-label="Nombre" aria-describedby="basic-addon1">
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Clave</label>
                </div>
                <div class="col-auto">
                    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">
                        Debe tener entre 8 y 20 caracteres.
                    </span>
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">pregunta Secreta</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="¿Qué fue primero la gallina o el huevo?">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Respuesta a pregunta secreta</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <select class="form-select" aria-label="Default select example">
                <option value selected disabled>Tipo de Usuario</option>
                <option value="1">Pro</option>
                <option value="0">No pro</option>
            </select>

            <input class="btn btn-primary mt-3" type="submit" value="Insertar">
</div>
