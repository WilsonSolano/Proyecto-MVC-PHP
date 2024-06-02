    <!--Header-->

<div class="container">

    <!--Header-->
    <div class="container">
    <h3 class="display-7 text-center mb-4 mt-3">Listar Tipos de Usuario</h3>
    <form action="?c=<?php echo base64_encode('TipoUsuario').'&a='.base64_encode('buscarTipoUsuario')?>" method="post">
        <div class="form-floating mb-2">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="idtipousuario">
            <label for="floatingInput">Buscar tipo de usuario por ID</label>
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID Tipo Usuario</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($this->model->ListarTiposUsuarios() as $r): ?>                
            <tr>
                <th scope="row"><?php echo $r->idtipousuario; ?></th>
                <td><?php echo $r->nombre; ?></td>
                <td><?php echo $r->descripcion; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
</table>
</div>
<!--Footer-->