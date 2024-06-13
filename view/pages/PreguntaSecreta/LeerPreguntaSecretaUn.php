<div class="container">
    <h3 class="display-7 text-center mb-4 mt-3">Listar Pregunta Secreta</h3>
    <form action="?c=<?php echo base64_encode('PreguntaSecreta').'&a='.base64_encode('buscarPreguntaS')?>" method="post">
    <div class="form-floating mb-2">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="idpreguntasecreta">
            <label for="floatingInput">Buscar tipo de Pregunta Secreta por ID</label>
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
    
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID Pregunta</th>
            <th scope="col">Pregunta</th>
        </tr>
        </thead>
        <tbody>
        <?php $r = $this->model->ObtenerPreguntaSecreta($_REQUEST["idpreguntasecreta"]) ?>                
            <tr>
                <th scope="row"><?php echo $r->idpreguntasecreta; ?></th>
                <td><?php echo $r->nombre; ?></td>
            </tr>
        </tbody>
    </table>

</div>