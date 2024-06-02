<div class="container">
<form action="?c=<?php echo base64_encode("Usuario").'&a='.base64_encode('actualizarPreguntaUsuarioDB')?>" method="post">
    <h3 class="display-7 text-center mb-4 mt-3">Actualizar Pregunta secreta</h3>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">ID Usuario:</span>
        <input name="idusuario" type="number" class="form-control" name="idusario" placeholder="Ingrese el ID del usuario" aria-label="ID Usuario" aria-describedby="basic-addon1" required>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">ID Pregunta Secreta:</span>
        <input name="idpreguntasecretausuario" type="number" class="form-control" id="exampleFormControlInput1" placeholder="La respuestas es...">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Respuesta Secreta:</span>
        <input name="respuestausuario" type="text" class="form-control" name="respuestasecreta" placeholder="Ingrese la respuesta secreta" aria-label="Respuesta Secreta" aria-describedby="basic-addon1" required>
    </div>

    <input class="btn btn-primary" type="submit" value="Actualizar Pregunta y Respuesta">
</form>
</div>
