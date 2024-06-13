<div class="container">
<form action="?c=<?php echo base64_encode("Usuario").'&a='.base64_encode('actualizarPreguntaUsuarioDB')?>" method="post">
    <h3 class="display-7 text-center mb-4 mt-3">Actualizar Pregunta secreta</h3>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">ID Usuario:</span>
        <input name="idusuario" type="number" class="form-control" name="idusario" placeholder="Ingrese el ID del usuario" aria-label="ID Usuario" aria-describedby="basic-addon1" required value="<?php echo base64_decode($_REQUEST["idusuario"])?>" readonly>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Respuestas Secreta:</span>
        <select class="form-select" aria-label="Default select example" required name="idpreguntasecretausuario">
                <option value selected disabled>Seleccione la pregunta</option>
            <?php foreach($this->model->ListarPreguntas() as $r):?>
                <option value="<?php echo $r->idpreguntasecreta?>"><?php echo $r->nombre?></option>
            <?php endforeach?>
        </select>
    </div>    
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Pregunta Secreta:</span>
        <input name="respuestausuario" type="text" class="form-control" id="exampleFormControlInput1" placeholder="La respuestas es...">
    </div>
    <input class="btn btn-primary" type="submit" value="Actualizar Pregunta y Respuesta">
</form>
</div>
